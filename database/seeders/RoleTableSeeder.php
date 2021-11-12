<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\roles;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $is_exist = roles::all();

    if (!$is_exist->count()) {
        $role_student = new roles();
        $role_student->name = 'student';
        $role_student->description = 'Student to learn course';
        $role_student->save();

        $role_instructor = new roles();
        $role_instructor->name = 'instructor';
        $role_instructor->description = 'Instructor to manage course';
        $role_instructor->save();

        $role_admin = new roles();
        $role_admin->name = 'admin';
        $role_admin->description = 'Admin to manage the site';
        $role_admin->save();
    }
    }
}
