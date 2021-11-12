<?php
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PaymentController;

// Auth Controller 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetController;
use App\Http\Controllers\Auth\VerificationController;

//Admin Controller 
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\Admin_DashboardController;
use App\Http\Controllers\Admin\UserController;

//UserProfile Controller
use App\Http\Controllers\UserProfile;

// Function Accessed by  Unregistered User .................
// =======================================================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('register',[RegisterController::class,'register'])->name('register');
// Route::post('register',[RegisterController::class,'store'])->name('register');
Route::get('logout',[LoginController::class,'logout'])->name('logOut');

//dashBoard Pages
Route::get('dashboard',[App\Http\Controllers\UserProfileController::class,'profile'])->name('dashboard');
// Route::post('profile/update', [App\Http\Controllers\DashboardController::class, 'profilepost']);

// Route::get('editprofile', [App\Http\Controllers\DashboardController::class, 'editprofile']);

// Route::get('deleteprofile', [App\Http\Controllers\DashboardController::class, 'deleteprofile']);

// Route::get('billing-info', [App\Http\Controllers\DashboardController::class, 'billingInfo']);

// Route::get('invoice', [App\Http\Controllers\DashboardController::class, 'invoice']);

// Route::get('payment', [App\Http\Controllers\DashboardController::class, 'payment']);

// Route::get('security', [App\Http\Controllers\DashboardController::class, 'security']);

// Route::get('linkedaccount', [App\Http\Controllers\DashboardController::class, 'account']);



Route::get('home',[HomeController::class, 'home'])->name('home');
Route::get('about',[HomeController::class, 'pageAbout'])->name('page.about');
Route::get('contact', [HomeController::class, 'pageContact'])->name('page.contact');
Route::get('instructor/{instructor_slug}', [InstructorController::class, 'instructorView'])->name('instructor.view');
Route::get('getCheckTime', [HomeController::class, 'getCheckTime']);
Route::get('checkUserEmailExists', [HomeController::class, 'checkUserEmailExists']);
Route::get('checkUserEmailExists', [HomeController::class, 'checkUserEmailExists']);
Route::get('course-view/{course_slug}', [CourseController::class, 'courseView'])->name('course.view');
Route::get('courses', [CourseController::class, 'courseList'])->name('course.list');
Route::get('checkout/{course_slug}', [CourseController::class, 'checkout'])->name('course.checkout');
Route::get('course-breadcrumb', [CourseController::class, 'saveBreadcrumb'])->name('course.breadcurmb');
Route::post('become-instructor', [InstructorController::class, 'becomeInstructor'])->name('become.instructor');
Route::get('instructors', [InstructorController::class, 'instructorList'])->name('instructor.list');
Route::post('contact-instructor', [InstructorController::class, 'contactInstructor'])->name('contact.instructor');
Route::post('contact-admin', [HomeController::class, 'contactAdmin'])->name('contact.admin');
Route::get('blogs', [HomeController::class, 'blogList'])->name('blogs');
Route::get('blog/{blog_slug}', [HomeController::class, 'blogView'])->name('blog.view');


// Functions accessed by only authenticated users
// ====================================================================

Route::group(['middleware' => 'auth'], function () { 

    Route::post('delete-photo', [CourseController::class, 'deletePhoto']);
    Route::post('payment-form', [PaymentController::class, 'paymentForm'])->name('payment.form');

    Route::get('payment/success', [PaymentController::class, 'getSuccess'])->name('payment.success');
    Route::get('payment/failure', [PaymentController::class, 'getFailure'])->name('payment.failure');


//Functions accessed by only students.................................
// =============================================================================

    Route::group(['middleware' => 'role:student'], function () {

        Route::get('course-enroll-api/{course_slug}/{lecture_slug}/{is_sidebar}', [CourseController::class, 'courseEnrollAPI']);
        Route::get('readPDF/{file_id}', [CourseController::class, 'readPDF']);
        Route::get('update-lecture-status/{course_id}/{lecture_id}/{status}', [CourseController::class, 'updateLectureStatus']);

        Route::get('download-resource/{resource_id}/{course_slug}', [CourseController::class, 'getDownloadResource']);

        Route::get('my-courses', [CourseController::class, 'myCourses'])->name('my.courses');
        Route::get('course-learn/{course_slug}', [CourseController::class, 'courseLearn'])->name('course.learn');

        Route::post('course-rate', [CourseController::class, 'courseRate'])->name('course.rate');
        Route::get('delete-rating/{raing_id}', [CourseController::class, 'deleteRating'])->name('delete.rating');

        Route::get('course-enroll-api/{course_slug}/{lecture_slug}/{is_sidebar}', [CourseController::class, 'courseEnrollAPI']);
        Route::get('readPDF/{file_id}', [CourseController::class, 'readPDF']);

    });

//Functions accessed by both student and instructor ...................... 
// ====================================================================================

    // Route::group(['middleware' => 'role:student,instructor'], function () {
    Route::group(['middleware' => 'role:instructor'], function () {
        Route::get('instructor-dashboard', [InstructorController::class, 'dashboard'])->name('instructor.dashboard');

        Route::get('instructor-profile', [InstructorController::class, 'getProfile'])->name('instructor.profile.get');
        Route::post('instructor-profile', [InstructorController::class, 'saveProfile'])->name('instructor.profile.save');

        Route::get('course-create', [CourseController::class, 'createInfo'])->name('instructor.course.create');
        Route::get('instructor-course-list', [CourseController::class, 'instructorCourseList'])->name('instructor.course.list');
        Route::get('instructor-course-info', [CourseController::class, 'instructorCourseInfo'])->name('instructor.course.info');
        Route::get('instructor-course-info/{course_id}', [CourseController::class, 'instructorCourseInfo'])->name('instructor.course.info.edit');
        Route::post('instructor-course-info-save', [CourseController::class, 'instructorCourseInfo'])->name('instructor.course.info.save');

        Route::get('instructor-course-image', [CourseController::class, 'instructorCourseImage'])->name('instructor.course.image');
        Route::get('instructor-course-image/{course_id}', [CourseController::class, 'instructorCourseImage'])->name('instructor.course.image.edit');
        Route::post('instructor-course-image-save', [CourseController::class, 'instructorCourseImage'])->name('instructor.course.image.save');

        Route::get('instructor-course-video/{course_id}', [CourseController::class, 'instructorCourseVideo'])->name('instructor.course.video.edit');
        Route::post('instructor-course-video-save', [CourseController::class, 'instructorCourseVideo'])->name('instructor.course.video.save');

        Route::get('instructor-course-curriculum/{course_id}', [CourseController::class, 'instructorCourseCurriculum'])->name('instructor.course.curriculum.edit');
        Route::post('instructor-course-curriculum-save', [CourseController::class, 'instructorCourseCurriculumSave'])->name('instructor.course.curriculum.save');


        Route::get('instructor-credits', [InstructorController::class, 'credits'])->name('instructor.credits');

        Route::post('instructor-withdraw-request', [InstructorController::class, 'withdrawRequest'])->name('instructor.withdraw.request');

        Route::get('instructor-withdraw-requests', [InstructorController::class, 'listWithdrawRequests'])->name('instructor.list.withdraw');

        // Save Curriculum
        Route::post('courses/section/save', [CourseController::class, 'postSectionSave']);
        Route::post('courses/section/delete', [CourseController::class, 'postSectionDelete']);
        Route::post('courses/lecture/save', [CourseController::class, 'postLectureSave']);
        Route::post('courses/video', [CourseController::class, 'postVideo']);
        
        Route::post('courses/lecturequiz/delete', [CourseController::class, 'postLectureQuizDelete']);
        Route::post('courses/lecturedesc/save', [CourseController::class, 'postLectureDescSave']);
        Route::post('courses/lecturepublish/save', [CourseController::class, 'postLecturePublishSave']);
        Route::post('courses/lecturevideo/save/{lid}', [CourseController::class, 'postLectureVideoSave']);
        Route::post('courses/lectureaudio/save/{lid}', [CourseController::class, 'postLectureAudioSave']);
        Route::post('courses/lecturepre/save/{lid}', [CourseController::class, 'postLecturePresentationSave']);
        Route::post('courses/lecturedoc/save/{lid}', [CourseController::class, 'postLectureDocumentSave']);
        Route::post('courses/lectureres/save/{lid}', [CourseController::class, 'postLectureResourceSave']);
        Route::post('courses/lecturetext/save', [CourseController::class, 'postLectureTextSave']);
        Route::post('courses/lectureres/delete', [CourseController::class, 'postLectureResourceDelete']);
        Route::post('courses/lecturelib/save', [CourseController::class, 'postLectureLibrarySave']);
        Route::post('courses/lecturelibres/save', [CourseController::class, 'postLectureLibraryResourceSave']);
        Route::post('courses/lectureexres/save', [CourseController::class, 'postLectureExternalResourceSave']);
        
        // Sorting Curriculum
        Route::post('courses/curriculum/sort', [CourseController::class, 'postCurriculumSort']);
    });


    //Functions accessed by only admin users
    Route::group(['middleware' => 'role:admin'], function () {
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('admin/dashboard', [Admin_DashboardController::class, 'dashboard'])->name('admin.dashboard');
        
        Route::get('admin/users', [Admin_DashboardController::class, 'index'])->name('admin.users');
        Route::get('admin/user-form', [Admin_DashboardController::class, 'getForm'])->name('admin.getForm');
        Route::get('admin/user-form/{user_id}', [UserController::class, 'getForm']);
        Route::post('admin/sa    ve-user', [UserController::class, 'saveUser'])->name('admin.saveUser');
        Route::get('admin/users/getData', [UserController::class, 'getData'])->name('admin.users.getData');

        Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
        Route::get('admin/category-form', [CategoryController::class, 'getForm'])->name('admin.categoryForm');
        Route::get('admin/category-form/{Category_id}', [CategoryController::class, 'getForm']);
        Route::post('admin/save-category', [CategoryController::class, 'saveCategory'])->name('admin.saveCategory');
        Route::get('admin/delete-category/{Category_id}', [CategoryController::class, 'deleteCategory']);

        Route::get('admin/blogs', [BlogController::class, 'index'])->name('admin.blogs');
        Route::get('admin/blog-form', [BlogController::class, 'getForm'])->name('admin.blogForm');
        Route::get('admin/blog-form/{blog_id}', [BlogController::class, 'getForm']);
        Route::post('admin/save-blog', [BlogController::class, 'saveBlog'])->name('admin.saveBlog');
        Route::get('admin/delete-blog/{blog_id}', [BlogController::class, 'deleteBlog']);

        Route::get('admin/withdraw-requests', [Admin_DashboardController::class, 'withdrawRequests'])->name('admin.withdraw.requests');
        Route::get('admin/approve-withdraw-request/{request_id}', [Admin_DashboardController::class, 'approveWithdrawRequest'])->name('admin.approve.withdraw.request');

        Route::post('admin/config/save-config', [ConfigController::class, 'saveConfig'])->name('admin.saveConfig');
        Route::get('admin/config/page-home', [ConfigController::class, 'pageHome'])->name('admin.pageHome');
        Route::get('admin/config/page-about', [ConfigController::class, 'pageAbout'])->name('admin.pageAbout');
        Route::get('admin/config/page-contact', [ConfigController::class, 'pageContact'])->name('admin.pageContact');

        Route::get('admin/config/setting-general', [ConfigController::class, 'settingGeneral'])->name('admin.settingGeneral');
        Route::get('admin/config/setting-payment', [ConfigController::class, 'settingPayment'])->name('admin.settingPayment');
        Route::get('admin/config/setting-email', [ConfigController::class, 'settingEmail'])->name('admin.settingEmail');
    });

    Route::group(['middleware' => 'subscribed'], function () {
        //Route for react js
        Route::get('course-enroll/{course_slug}/{lecture_slug}', function () {
            return view('site/course/course_enroll');
        });
        Route::get('course-learn/{course_slug}', [CourseController::class, 'courseLearn'])->name('course.learn');
    });

    //User Profile Routes
    Route::get('/editprofile',[App\Http\Controllers\UserProfileController::class,'adduser']);
    Route::post('updateprofile',[App\Http\Controllers\UserProfileController::class,'storeUserData'])->name('user.store');
    Route::get('/profile-edit/{id}',[App\Http\Controllers\UserProfileController::class,'profileEdit']);
    Route::post('/update-user',[App\Http\Controllers\UserProfileController::class,'updatedUser'])->name('user.update');
    Route::get('profile',[App\Http\Controllers\UserProfileController::class,'profile']);

    Route::get('deleteprofile', [App\Http\Controllers\UserProfileController::class, 'deleteprofile']);

    Route::get('billing-info', [App\Http\Controllers\UserProfileController::class, 'billingInfo']);

    Route::get('invoice', [App\Http\Controllers\UserProfileController::class, 'invoice']);

    Route::get('payment', [App\Http\Controllers\UserProfileController::class, 'payment']);

    Route::get('security', [App\Http\Controllers\UserProfileController::class, 'security']);

    Route::get('linkedaccount', [App\Http\Controllers\UserProfileController::class, 'account']);


});