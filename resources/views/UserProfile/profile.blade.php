@extends('layouts.frontend.profile')
@section('body')
<style>
/*! CSS Used from: https://www.quizando.com/styles.767ea02111c6b8c938d8.css */
*{box-sizing:border-box;}
body ::-webkit-input-placeholder{color:#666;}
body :-moz-placeholder{color:#666;}
body ::-moz-placeholder{color:#666;}
body :-ms-input-placeholder{color:#666;}
::-webkit-input-placeholder{color:#898989;}
:-moz-placeholder{color:#898989;opacity:1;}
::-moz-placeholder{color:#898989;opacity:1;}
:-ms-input-placeholder{color:#898989;}
::-ms-input-placeholder{color:#898989;}
button{border-radius:0;}
*,::after,::before{box-sizing:border-box;}
h2,h3{margin-top:0;}
p{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;border-style:none;}
button{border-radius:0;}
button:focus{outline:dotted 1px;outline:-webkit-focus-ring-color auto 5px;}
button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{overflow:visible;}
button{text-transform:none;}
[type=button],button{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
h2,h3{margin-bottom:.5rem;font-weight:500;line-height:1.2;}
h2{font-size:2rem;}
h3{font-size:1.75rem;}
.btn{display:inline-block;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.btn{-webkit-transition:none;transition:none;}
}
.btn:hover{color:#212529;text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.btn:disabled{opacity:.65;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
h2,h3,p{orphans:3;widows:3;}
h2,h3{page-break-after:avoid;}
}
:focus{outline:0;box-shadow:none;border-color:inherit;}
.btn:focus{box-shadow:none;}
.bg-grey{background-color:#eee;}
.btn{border-radius:.3em;font-family:"Titillium Web",sans-serif;font-weight:400;}
.btn-blue{background:#29a1d8;color:#fff;}
.btn-blue:hover{color:#fff;}
/*! CSS Used from: Embedded */
.myaccount-page .account-section-title{font-family:"Paytone One",sans-serif;font-size:1.8em;}
/*! CSS Used from: Embedded */
.myaccount-dashboard[_ngcontent-egl-c17]{max-width:713px;margin:0 auto;}
.myaccount-dashboard[_ngcontent-egl-c17]   .btn-buyTokens[_ngcontent-egl-c17]{font-family:"Paytone One",sans-serif;}
.myaccount-dashboard[_ngcontent-egl-c17]   .dash-btn[_ngcontent-egl-c17]{font-size:1.6em;padding:5px 20px;}
.myaccount-dashboard[_ngcontent-egl-c17]   .btn[_ngcontent-egl-c17]{padding-top:8px!important;padding-bottom:8px!important;font-size:18px!important;}
.myaccount-dashboard[_ngcontent-egl-c17]   button[_ngcontent-egl-c17]:disabled{background-color:#54b4e0;}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]{display:-webkit-box;display:flex;-webkit-box-pack:justify;justify-content:space-between;-webkit-box-align:center;align-items:center;width:100%;padding:10px;margin-bottom:10px;border-radius:5px;}
@media (max-width:480px){
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]{-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .add-funds[_ngcontent-egl-c17],.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .add-funds[_ngcontent-egl-c17]   .btn[_ngcontent-egl-c17]{width:100%;}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .balance-overview[_ngcontent-egl-c17]{width:100%;display:-webkit-box;display:flex;justify-content:space-around;-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-direction:row;}
}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .balance-overview[_ngcontent-egl-c17]   p[_ngcontent-egl-c17]{font-size:1.4em;font-family:"Titillium Web",sans-serif;margin:0;}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .balance-overview[_ngcontent-egl-c17]   .amount[_ngcontent-egl-c17]{font-size:2.6em;font-weight:700;}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .balance-overview[_ngcontent-egl-c17]   .wallet-balance[_ngcontent-egl-c17]{display:inline-block;padding:10px;}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .balance-overview[_ngcontent-egl-c17]   .wallet-balance[_ngcontent-egl-c17]   .wallet-icon[_ngcontent-egl-c17]{display:inline-block;width:40px;height:38px;background:url(https://www.quizando.com/sprite.6ef32407100718b23623.png) -177px 0;vertical-align:middle;margin-right:5px;}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .balance-overview[_ngcontent-egl-c17]   .quiz-balance[_ngcontent-egl-c17]{display:inline-block;padding:10px;color:#4d4d4d;}
.myaccount-dashboard[_ngcontent-egl-c17]   .funds-section[_ngcontent-egl-c17]   .balance-overview[_ngcontent-egl-c17]   .token-icon[_ngcontent-egl-c17]{display:inline-block;width:26px;height:38px;background:url(https://www.quizando.com/sprite.6ef32407100718b23623.png) -256px -28px;vertical-align:middle;margin-right:5px;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details[_ngcontent-egl-c17]{border-radius:5px;padding:10px 0;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details-section[_ngcontent-egl-c17]   .btn[_ngcontent-egl-c17]{margin-right:.8em;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details-section[_ngcontent-egl-c17]:not(.--switch){padding:10px 20px;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details-section[_ngcontent-egl-c17]:not(.--noborder){border-bottom:1px solid #ccc;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details[_ngcontent-egl-c17]   h2[_ngcontent-egl-c17]{font-size:1.9em;font-family:"Titillium Web",sans-serif;font-weight:700;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details-overview[_ngcontent-egl-c17]{display:-webkit-box;display:flex;-webkit-box-pack:justify;justify-content:space-between;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details-info[_ngcontent-egl-c17]{-webkit-box-flex:1;flex-grow:1;max-width:70%;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details-info-row[_ngcontent-egl-c17]{display:-webkit-box;display:flex;text-align:left;font-family:"Titillium Web",sans-serif;font-size:1.4em;-webkit-box-pack:start;justify-content:start;white-space:initial;word-wrap:break-word;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details-info-row-key[_ngcontent-egl-c17]{width:38%;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-details-info-row-value[_ngcontent-egl-c17]{width:62%;color:#ff3f5f;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-picture-container[_ngcontent-egl-c17]{background-color:#fff;align-self:flex-start;text-align:center;color:#ff3f5f;font-size:1.2em;border-radius:2px;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-picture-container-border[_ngcontent-egl-c17]{display:-webkit-box;display:flex;-webkit-box-pack:center;justify-content:center;width:130px;height:130px;background-color:#f2f2f2;border-radius:50%;margin:.5em 1em;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-picture-container[_ngcontent-egl-c17]   img[_ngcontent-egl-c17]{align-self:center;margin:5px 10px;width:120px;height:120px;border-radius:50%;-o-object-fit:cover;object-fit:cover;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-picture-container[_ngcontent-egl-c17]   .upload-image[_ngcontent-egl-c17]{margin-bottom:5px;cursor:pointer;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-picture-container[_ngcontent-egl-c17]   .upload-image[_ngcontent-egl-c17]   .camera-icon[_ngcontent-egl-c17]{display:inline-block;width:20px;height:18px;background:url(https://www.quizando.com/sprite.6ef32407100718b23623.png) -3px -33px;margin-right:5px;vertical-align:bottom;}
.myaccount-dashboard[_ngcontent-egl-c17]   .account-picture-container[_ngcontent-egl-c17]   .user-name[_ngcontent-egl-c17]{background:#29a1d8;color:#fff;font-size:1.5em;font-weight:600;padding:5px;border-bottom-left-radius:2px;border-bottom-right-radius:2px;}
@media (max-width:648px){
.myaccount-dashboard[_ngcontent-egl-c17]   #account-details-container[_ngcontent-egl-c17]{display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;flex-direction:column-reverse;}
.myaccount-dashboard[_ngcontent-egl-c17]   #account-details-container[_ngcontent-egl-c17]   .account-picture-container[_ngcontent-egl-c17]{width:100%;margin-bottom:11px;}
.myaccount-dashboard[_ngcontent-egl-c17]   #account-details-container[_ngcontent-egl-c17]   .account-picture-container-border[_ngcontent-egl-c17]{margin:0 auto!important;}
.myaccount-dashboard[_ngcontent-egl-c17]   #account-details-container[_ngcontent-egl-c17]   .account-picture-container[_ngcontent-egl-c17]   .user-name[_ngcontent-egl-c17]{font-size:18px!important;padding-top:8px;padding-bottom:8px;}
.myaccount-dashboard[_ngcontent-egl-c17]   #account-details-container[_ngcontent-egl-c17]   .account-details-info[_ngcontent-egl-c17]{max-width:100%;}
.myaccount-dashboard[_ngcontent-egl-c17]   #account-details-container[_ngcontent-egl-c17]   .account-details-info-row[_ngcontent-egl-c17]{word-break:break-word;white-space:initial;}
}
@media (max-width:648px){
#account-actions-group[_ngcontent-egl-c17]{display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;-webkit-box-pack:center;justify-content:center;}
#account-actions-group[_ngcontent-egl-c17]   button[_ngcontent-egl-c17]{margin:0 auto;max-width:234px;width:100%;}
#account-actions-group[_ngcontent-egl-c17]   button[_ngcontent-egl-c17]:not(:last-child){margin-bottom:10px;}
}
/*! CSS Used fontfaces */
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPDcZTIAOhVxoMyOr9n_E7ffGjEGIVzY4SY.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPDcZTIAOhVxoMyOr9n_E7ffGjEGItzYw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPecZTIAOhVxoMyOr9n_E7fdM3mDbRS.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPecZTIAOhVxoMyOr9n_E7fdMPmDQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPDcZTIAOhVxoMyOr9n_E7ffBzCGIVzY4SY.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPDcZTIAOhVxoMyOr9n_E7ffBzCGItzYw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPDcZTIAOhVxoMyOr9n_E7ffHjDGIVzY4SY.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPDcZTIAOhVxoMyOr9n_E7ffHjDGItzYw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Paytone One';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/paytoneone/v13/0nksC9P7MfYHj2oFtYm2ChTigPvNiA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Paytone One';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/paytoneone/v13/0nksC9P7MfYHj2oFtYm2ChTjgPvNiA.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Paytone One';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/paytoneone/v13/0nksC9P7MfYHj2oFtYm2ChTtgPs.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
<div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="pcard">
						<!-- Card header -->
						<div class="pcard-header">
							<h3 class="mb-0">Profile Details</h3>
							<p class="mb-0">
								You have full control to manage your own account setting.
							</p>
						</div>
						<!-- Card body -->
						<div class="pcard-body">
							<div class="d-lg-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center mb-4 mb-lg-0">
									@foreach ($users as $user)
                                        <img src="{{asset('images')}}/{{$user->profileimage}}" id="img-uploaded" class="avatar-xl rounded-circle" alt="">
                                    @endforeach
                                    	<div class="ms-3">
										<h4 class="mb-0"> 
											@foreach ($profiles as $user)
                       						 <td>{{$user->first_name}} 
												{{$user->last_name}}</td>
                						    @endforeach
      									</h4>
									</div>
								</div>
								<div>

								</div>
							</div>
							<hr class="my-5">
						<div class="container">
							<div _ngcontent-vpk-c18="" class="account-details bg-grey"><div _ngcontent-vpk-c18="" class="account-details-section">
								<!---->
								<h2 _ngcontent-vpk-c18="">My Account Details</h2>
								<!---->
							</div>
							<div _ngcontent-vpk-c18="" class="account-details-section account-details-overview --noborder" id="account-details-container">
								<!---->
								<div _ngcontent-vpk-c18="" class="account-details-info">
							
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">
											Id: 
											@foreach ($profiles as $user)
												<td>{{$user->id}}</td>
											@endforeach
										</p>
									</div>
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">
											First Name:
											@foreach ($profiles as $user)
												<td>{{$user->first_name}}</td>
											@endforeach
										</p>
										<!---->
										<!---->
									</div>
									<!---->
									<!---->
									<!---->
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">Last Name:
											@foreach ($profiles as $user)
											<td>{{$user->last_name}}</td>
											@endforeach
										</p>
										<!---->
										<!---->
									</div>
									<!---->
									<!---->
									<!---->
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
	
									</div>
					
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">Email:
											@foreach ($profiles as $user)
												<td>{{$user->email}}</td>
											@endforeach
										</p>
										<!---->
										<!---->
									</div>
				
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
				
									</div>
									<!---->
									<!---->
									<!---->
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">Country:
											@foreach ($users as $user)
												<td>{{$user->country}}</td>
											@endforeach
                                        </p>
								
									</div>

									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">Number:
											@foreach ($users as $user)
												<td>{{$user->number}}</td>
											@endforeach
										</p>
										<!---->
									</div>
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">Address:
											@foreach ($users as $user)
												<td>{{$user->address1}}</td>
											@endforeach
										</p>
										<!---->
									</div>
							
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">Date of Birth:
											@foreach ($users as $user)
												<td>{{$user->dateofbirth}}</td>
											@endforeach
										</p>
										<!---->
									</div>
							
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
										<!---->
										<p _ngcontent-vpk-c18="" class="account-details-info-row-key">Show country of origin:
											@foreach ($users as $user)
												<td>{{$user->country}}</td>
											@endforeach
										</p>
									</div>
									<div _ngcontent-vpk-c18="" class="account-details-info-row">
									</div>
									<!---->
								</div>
							
                              
							</div>
				
							<div _ngcontent-vpk-c18="" class="account-details-section --noborder" id="account-actions-group">
								
						</div>
							</div>
						</div>
						</div>
						</div>
						
					</div>
				</div>
@endsection