@extends('layouts.frontend.index')
<!-- Dashboard upper section start-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Self Teach Lab</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
			/*! CSS Used from: https://codescandy.com/geeks-bootstrap-5/assets/fonts/feather/feather.css */
.fe{font-family:'Feather'!important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fe-bell:before{content:"\e91e";}
.fe-calendar:before{content:"\e927";}
.fe-clipboard:before{content:"\e938";}
.fe-credit-card:before{content:"\e94e";}
.fe-lock:before{content:"\e987";}
.fe-menu:before{content:"\e98f";}
.fe-power:before{content:"\e9b5";}
.fe-refresh-cw:before{content:"\e9b9";}
.fe-settings:before{content:"\e9c4";}
.fe-trash:before{content:"\e9e3";}
.fe-user:before{content:"\e9f1";}
/*! CSS Used from: https://codescandy.com/geeks-bootstrap-5/assets/libs/magnific-popup/dist/magnific-popup.css */
button::-moz-focus-inner{padding:0;border:0;}
/*! CSS Used from: https://codescandy.com/geeks-bootstrap-5/assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css */
select.selectpicker{display:none!important;}
.bootstrap-select{width:220px\0;vertical-align:middle;}
.bootstrap-select>.dropdown-toggle{position:relative;width:100%;text-align:right;white-space:nowrap;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;}
.bootstrap-select>.dropdown-toggle:after{margin-top:-1px;}
.bootstrap-select>.dropdown-toggle.bs-placeholder,.bootstrap-select>.dropdown-toggle.bs-placeholder:active,.bootstrap-select>.dropdown-toggle.bs-placeholder:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder:hover{color:#999;}
.bootstrap-select>select{position:absolute!important;bottom:0;left:50%;display:block!important;width:.5px!important;height:100%!important;padding:0!important;opacity:0!important;border:none;z-index:0!important;}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn){width:220px;}
.bootstrap-select .dropdown-toggle:focus{outline:thin dotted #333!important;outline:5px auto -webkit-focus-ring-color!important;outline-offset:-2px;}
.bootstrap-select:not(.input-group-btn){float:none;display:inline-block;margin-left:0;}
.bootstrap-select .dropdown-toggle .filter-option{position:static;top:0;left:0;float:left;height:100%;width:100%;text-align:left;overflow:hidden;-webkit-box-flex:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;}
.bootstrap-select .dropdown-toggle .filter-option-inner-inner{overflow:hidden;}
.bootstrap-select .dropdown-menu{min-width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.bootstrap-select .dropdown-menu>.inner:focus{outline:0!important;}
.bootstrap-select .dropdown-menu.inner{position:static;float:none;border:0;padding:0;margin:0;border-radius:0;-webkit-box-shadow:none;box-shadow:none;}
/*! CSS Used from: https://codescandy.com/geeks-bootstrap-5/assets/css/theme.min.css */
.icon-sm{height:2rem;line-height:2rem;width:2rem;}
.icon-shape{align-items:center;display:inline-flex;justify-content:center;text-align:center;vertical-align:middle;}
h2,h3{letter-spacing:-.022rem;}
.text-inherit{color:#18113c;}
@media (max-width:576px){
.rounded-none.rounded-bottom-md{border-bottom-left-radius:0!important;border-bottom-right-radius:0!important;}
}
@media (min-width:576px) and (max-width:767.98px){
.rounded-none.rounded-bottom-md{border-bottom-left-radius:0!important;border-bottom-right-radius:0!important;}
}
*,:after,:before{box-sizing:border-box;}
hr{background-color:currentColor;border:0;color:#ecebf1;margin:1rem 0;opacity:1;}
hr:not([size]){height:1px;}
h2,h3,h4{color:#18113c;font-family:Inter,"sans-serif";font-weight:500;line-height:1.4;margin-bottom:.5rem;margin-top:0;}
h2{font-size:1.5rem;}
h3{font-size:1.25rem;}
h4{font-size:1rem;}
p{margin-bottom:1rem;margin-top:0;}
ul{padding-left:2rem;}
ul{margin-bottom:1rem;margin-top:0;}
a{color:#754ffe;text-decoration:none;}
a:hover{color:#5e3fcb;}
img,svg{vertical-align:middle;}
label{display:inline-block;}
button{border-radius:0;}
button:focus:not(:focus-visible){outline:0;}
button,input,select{font-family:inherit;font-size:inherit;line-height:inherit;margin:0;}
button,select{text-transform:none;}
select{word-wrap:normal;}
select:disabled{opacity:1;}
[type=button],[type=submit],button{-webkit-appearance:button;}
::-moz-focus-inner{border-style:none;padding:0;}
.list-unstyled{list-style:none;padding-left:0;}
.container{margin-left:auto;margin-right:auto;padding-left:var(--bs-gutter-x,.75rem);padding-right:var(--bs-gutter-x,.75rem);width:100%;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1140px;}
}
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-left:calc(var(--bs-gutter-x)*-.5);margin-right:calc(var(--bs-gutter-x)*-.5);margin-top:calc(var(--bs-gutter-y)*-1);}
.row>*{flex-shrink:0;margin-top:var(--bs-gutter-y);max-width:100%;padding-left:calc(var(--bs-gutter-x)*.5);padding-right:calc(var(--bs-gutter-x)*.5);width:100%;}
.col-12{flex:0 0 auto;width:100%;}
@media (min-width:768px){
.col-md-4{flex:0 0 auto;width:33.33333333%;}
.col-md-6{flex:0 0 auto;width:50%;}
.col-md-8{flex:0 0 auto;width:66.66666667%;}
.col-md-12{flex:0 0 auto;width:100%;}
}
@media (min-width:992px){
.col-lg-3{flex:0 0 auto;width:25%;}
.col-lg-9{flex:0 0 auto;width:75%;}
.col-lg-12{flex:0 0 auto;width:100%;}
}
@media (min-width:1200px){
.col-xl-12{flex:0 0 auto;width:100%;}
}
.form-label{margin-bottom:.5rem;}
.form-control{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-clip:padding-box;background-color:#fff;border:1px solid #e8e7ed;border-radius:.25rem;color:#18113c;display:block;font-size:.875rem;font-weight:400;line-height:1.6;padding:.75rem 1.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;width:100%;}
@media (prefers-reduced-motion:reduce){
.form-control{transition:none;}
}
.form-control:focus{background-color:#fff;border-color:#754ffe;box-shadow:0 0 0 3px rgba(231,225,253,.75);color:#18113c;outline:0;}
.form-control::-moz-placeholder{color:#a8a3b9;opacity:1;}
.form-control:-ms-input-placeholder{color:#a8a3b9;opacity:1;}
.form-control::placeholder{color:#a8a3b9;opacity:1;}
.form-control:disabled,.form-control[readonly]{background-color:#f5f4f8;opacity:1;}
.btn{background-color:transparent;border:1px solid transparent;border-radius:.25rem;color:#5c5776;cursor:pointer;display:inline-block;font-size:.875rem;font-weight:600;line-height:1.6;padding:.75rem 1.25rem;text-align:center;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;vertical-align:middle;}
@media (prefers-reduced-motion:reduce){
.btn{transition:none;}
}
.btn:hover{color:#5c5776;}
.btn:focus{box-shadow:0 0 0 .25rem rgba(117,79,254,.25);outline:0;}
.btn:disabled{opacity:.65;pointer-events:none;}
.btn-primary{background-color:#754ffe;border-color:#754ffe;color:#fff;}
.btn-primary:focus,.btn-primary:hover{background-color:#6343d8;border-color:#5e3fcb;color:#fff;}
.btn-primary:focus{box-shadow:0 0 0 .25rem rgba(138,105,254,.5);}
.btn-primary:active{background-color:#5e3fcb;border-color:#583bbf;color:#fff;}
.btn-primary:active:focus{box-shadow:0 0 0 .25rem rgba(138,105,254,.5);}
.btn-primary:disabled{background-color:#754ffe;border-color:#754ffe;color:#fff;}
.btn-light{background-color:#f5f4f8;border-color:#f5f4f8;color:#000;}
.btn-light:focus,.btn-light:hover{background-color:#f7f6f9;border-color:#f6f5f9;color:#000;}
.btn-light:focus{box-shadow:0 0 0 .25rem hsla(255,4%,82%,.5);}
.btn-light:active{background-color:#f7f6f9;border-color:#f6f5f9;color:#000;}
.btn-light:active:focus{box-shadow:0 0 0 .25rem hsla(255,4%,82%,.5);}
.btn-light:disabled{background-color:#f5f4f8;border-color:#f5f4f8;color:#000;}
.btn-outline-primary{border-color:#754ffe;color:#754ffe;}
.btn-outline-primary:hover{background-color:#754ffe;border-color:#754ffe;color:#fff;}
.btn-outline-primary:focus{box-shadow:0 0 0 .25rem rgba(117,79,254,.5);}
.btn-outline-primary:active{background-color:#754ffe;border-color:#754ffe;color:#fff;}
.btn-outline-primary:active:focus{box-shadow:0 0 0 .25rem rgba(117,79,254,.5);}
.btn-outline-primary:disabled{background-color:transparent;color:#754ffe;}
.btn-outline-danger{border-color:#e53f3c;color:#e53f3c;}
.btn-outline-danger:hover{background-color:#e53f3c;border-color:#e53f3c;color:#fff;}
.btn-outline-danger:focus{box-shadow:0 0 0 .25rem rgba(229,63,60,.5);}
.btn-outline-danger:active{background-color:#e53f3c;border-color:#e53f3c;color:#fff;}
.btn-outline-danger:active:focus{box-shadow:0 0 0 .25rem rgba(229,63,60,.5);}
.btn-outline-danger:disabled{background-color:transparent;color:#e53f3c;}
.btn-outline-white{border-color:#fff;color:#fff;}
.btn-outline-white:hover{background-color:#fff;border-color:#fff;color:#000;}
.btn-outline-white:focus{box-shadow:0 0 0 .25rem hsla(0,0%,100%,.5);}
.btn-outline-white:active{background-color:#fff;border-color:#fff;color:#000;}
.btn-outline-white:active:focus{box-shadow:0 0 0 .25rem hsla(0,0%,100%,.5);}
.btn-outline-white:disabled{background-color:transparent;color:#fff;}
.btn-sm{border-radius:.2rem;font-size:.765625rem;padding:.5rem .875rem;}
.collapse:not(.show){display:none;}
.dropdown{position:relative;}
.dropdown-toggle{white-space:nowrap;}
.dropdown-toggle:after{border-bottom:0;border-left:.3em solid transparent;border-right:.3em solid transparent;border-top:.3em solid;content:"";display:inline-block;}
.dropdown-toggle:empty:after{margin-left:0;}
.dropdown-menu{background-clip:padding-box;background-color:#fff;border:1px solid rgba(0,0,0,.15);border-radius:.25rem;display:none;list-style:none;margin:0;min-width:10rem;padding:.5rem 0;position:absolute;text-align:left;z-index:1000;}
.dropdown-menu.show{display:block;}
.nav-link{color:#754ffe;display:block;padding:.5rem 1rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.nav-link{transition:none;}
}
.nav-link:focus,.nav-link:hover{color:#5e3fcb;}
.navbar{align-items:center;display:flex;flex-wrap:wrap;justify-content:space-between;padding-bottom:.5rem;padding-top:.5rem;position:relative;}
.navbar-nav{display:flex;flex-direction:column;list-style:none;margin-bottom:0;padding-left:0;}
.navbar-nav .nav-link{padding-left:0;padding-right:0;}
.navbar-collapse{align-items:center;flex-basis:100%;flex-grow:1;}
.navbar-toggler{background-color:transparent;border:1px solid transparent;border-radius:.25rem;font-size:1.09375rem;line-height:1;padding:.25rem .75rem;transition:box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.navbar-toggler{transition:none;}
}
.navbar-toggler:hover{text-decoration:none;}
.navbar-toggler:focus{box-shadow:0 0 0 .25rem;outline:0;text-decoration:none;}
@media (min-width:768px){
.navbar-expand-md{flex-wrap:nowrap;justify-content:flex-start;}
.navbar-expand-md .navbar-nav{flex-direction:row;}
.navbar-expand-md .navbar-nav .nav-link{padding-left:.5rem;padding-right:.5rem;}
.navbar-expand-md .navbar-collapse{display:flex!important;flex-basis:auto;}
.navbar-expand-md .navbar-toggler{display:none;}
}
.navbar-light .navbar-nav .nav-link{color:#754ffe;}
.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7);}
.navbar-light .navbar-toggler{border-color:rgba(0,0,0,.1);color:#754ffe;}
.pcard{word-wrap:break-word;background-clip:border-box;background-color:#fff;border:1px solid #ecebf1;border-radius:.5rem;display:flex;flex-direction:column;min-width:0;position:relative;}
.pcard-body{flex:1 1 auto;padding:1.5rem;}
.pcard-header{background-color:#fff;border-bottom:1px solid #ecebf1;margin-bottom:0;padding:1rem 1.5rem;}
.pcard-header:first-child{border-radius:calc(.5rem - 1px) calc(.5rem - 1px) 0 0;}
.d-block{display:block!important;}
.d-flex{display:flex!important;}
.d-none{display:none!important;}
.shadow-sm{box-shadow:0 1px 3px rgba(3,0,71,.09)!important;}
.position-relative{position:relative!important;}
.border{border:1px solid #ecebf1!important;}
.border-white{border-color:#fff!important;}
.border-4{border-width:4px!important;}
.flex-column{flex-direction:column!important;}
.justify-content-end{justify-content:flex-end!important;}
.justify-content-between{justify-content:space-between!important;}
.align-items-end{align-items:flex-end!important;}
.align-items-center{align-items:center!important;}
.my-5{margin-bottom:2rem!important;margin-top:2rem!important;}
.mt-0{margin-top:0!important;}
.me-2{margin-right:.5rem!important;}
.mb-0{margin-bottom:0!important;}
.mb-3{margin-bottom:1rem!important;}
.mb-4{margin-bottom:1.5rem!important;}
.ms-3{margin-left:1rem!important;}
.mt-n5{margin-top:-2rem!important;}
.ms-n2{margin-left:-.5rem!important;}
.px-4{padding-left:1.5rem!important;padding-right:1.5rem!important;}
.pt-2{padding-top:.5rem!important;}
.pt-16{padding-top:7.5rem!important;}
.pb-4{padding-bottom:1.5rem!important;}
.fw-bold{font-weight:700!important;}
.lh-1{line-height:1!important;}
.text-decoration-none{text-decoration:none!important;}
.text-light{--bs-text-opacity:1;color:rgba(var(--bs-light-rgb),var(--bs-text-opacity))!important;}
.bg-primary{--bs-bg-opacity:1;background-color:rgba(var(--bs-primary-rgb),var(--bs-bg-opacity))!important;}
.bg-white{--bs-bg-opacity:1;background-color:#fff!important;}
.rounded{border-radius:.25rem!important;}
.rounded-circle{border-radius:50%!important;}
.rounded-top-md{border-top-left-radius:.5rem!important;}
.rounded-top-md{border-top-right-radius:.5rem!important;}
.rounded-bottom-md{border-bottom-right-radius:.5rem!important;}
.rounded-bottom-md{border-bottom-left-radius:.5rem!important;}
@media (min-width:768px){
.d-md-block{display:block!important;}
.d-md-none{display:none!important;}
.mt-md-4{margin-top:1.5rem!important;}
}
@media (min-width:992px){
.d-lg-flex{display:flex!important;}
.d-lg-none{display:none!important;}
.mb-lg-0{margin-bottom:0!important;}
}
@media (min-width:1200px){
.d-xl-none{display:none!important;}
}
.avatar-xl{height:5rem;width:5rem;}
.btn-outline-white{border-color:#e8e7ed;color:#5c5776;}
.btn-outline-white:focus,.btn-outline-white:hover{background-color:#f5f4f8;border-color:#beb9cd;color:#5c5776;}
.navbar{padding:.625rem 1rem;}
.navbar .navbar-toggler{border:1px solid #754ffe;margin-left:.5rem;padding:.5rem;}
.navbar .navbar-toggler:focus{outline:0;}
.sidenav.navbar{background-color:#fff;border-radius:.5rem;padding:0;}
@media (max-width:576px){
.sidenav.navbar{border-radius:0 0 .5rem .5rem;border-top:1px solid #ecebf1;padding:1rem 1.5rem;}
}
@media (min-width:576px) and (max-width:767.98px){
.sidenav.navbar{border-radius:0 0 .5rem .5rem;border-top:1px solid #ecebf1;padding:1rem 1.5rem;}
}
.sidenav.navbar .navbar-header{color:#a8a3b9;font-size:.6875rem;font-weight:500;letter-spacing:1px;margin-bottom:.2rem;padding:.3rem .4rem;text-transform:uppercase;}
.sidenav.navbar .navbar-nav{padding:1.5rem;width:100%;}
@media (max-width:576px){
.sidenav.navbar .navbar-nav{padding:0;}
}
.sidenav.navbar .navbar-nav .nav-item{margin-bottom:.125rem;}
.sidenav.navbar .navbar-nav .nav-item.active{background-color:#e3dcff;border-radius:.5rem;color:#754ffe!important;}
.sidenav.navbar .navbar-nav .nav-item .nav-link{background-color:transparent;border-radius:.5rem;color:#18113c;font-weight:500;padding:.3rem 0 .3rem .7rem;position:relative;}
.sidenav.navbar .navbar-nav .nav-item .nav-link .nav-icon{margin-right:.5rem;opacity:.6;}
.sidenav.navbar .navbar-nav .nav-item .nav-link:hover{background-color:#e3dcff;color:#754ffe;}
.sidenav.navbar .navbar-nav .nav-item .nav-link:hover .nav-icon{opacity:1;}
.sidenav.navbar .navbar-nav .active>.nav-link{color:#754ffe!important;}
.sidenav.navbar .navbar-nav .active>.nav-link .nav-icon{opacity:1;}
.dropdown-menu{border:none;border-radius:.5rem;box-shadow:0 10px 30px 0 rgba(31,45,61,.1);color:#5c5776;font-size:.875rem;line-height:1.375rem;z-index:1040;}
.dropdown-toggle:after{border:0;content:"\e92e";float:right;font-family:Feather!important;margin-left:.255em;vertical-align:.255em;}
:focus{outline:0;}
.pcard{border:0;box-shadow:0 1px 3px rgba(3,0,71,.09);}
.form-label{color:#18113c;}
@media (-ms-high-contrast:none),screen and (-ms-high-contrast:active){
.dropdown .dropdown-toggle:after{display:none;}
}
.bootstrap-select>.dropdown-toggle{background-color:#fff!important;border-color:#e8e7ed!important;font-weight:400;}
.bootstrap-select .dropdown-toggle:focus{outline:none!important;}
.bootstrap-select .bs-placeholder,.bootstrap-select .bs-placeholder:active,.bootstrap-select .bs-placeholder:focus,.bootstrap-select .bs-placeholder:hover{color:#a8a3b9!important;}
.flatpickr-input[readonly]{background-color:#fff;cursor:pointer;}
svg{touch-action:none;}
/*! CSS Used fontfaces */
@font-face{font-family:'Feather';src:url('https://codescandy.com/geeks-bootstrap-5/assets/fonts/feather/fonts/feather.ttf?sdxovp') format('truetype'),     url('https://codescandy.com/geeks-bootstrap-5/assets/fonts/feather/fonts/feather.woff?sdxovp') format('woff'),     url('https://codescandy.com/geeks-bootstrap-5/assets/fonts/feather/fonts/feather.svg?sdxovp#Feather') format('svg');font-weight:normal;font-style:normal;}
@font-face{font-family:'Inter';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Inter';font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Inter';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Inter';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Inter';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Inter';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Inter';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Inter';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Inter';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Inter';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Inter';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Inter';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}


.wrapper{
  
  width:100%;
  height:100%;
  display:flex;
  align-items:center;
  justify-content:center;
  

  .file-upload{

    height:200px;
    width:200px;
    border-radius: 100px;
    position:relative;
    
    display:flex;
    justify-content:center;
    align-items: center;  

    border:4px solid #FFFFFF;
    overflow:hidden;
    background-image: linear-gradient(to bottom, #2590EB 50%, #FFFFFF 50%);
    background-size: 100% 200%;
    transition: all 1s;
    color: #FFFFFF;
    font-size:100px;

    input[type='file']{

      height:200px;
      width:200px;
      position:absolute;
      top:0;
      left:0;
      opacity:0;
      cursor:pointer;

    }

    &:hover{

      background-position: 0 -100%;

      color:#2590EB;

    }


  }
}

</style>
<script src="https://kit.fontawesome.com/973d5b7ffc.js" crossorigin="anonymous"></script>
    </head>
  <body>
@section('content')
	<div class="container">
				<!-- User info -->
			<div class="row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-12">
					<!-- Bg -->
					<div class="pt-16 rounded-top-md" style="
								background: url(../assets/images/logo/logo.jpg) no-repeat;
								background-size: cover;
							"></div>
					<div class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
						<div class="d-flex align-items-center">
							<div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
									@foreach ($users as $user)
                                       <img src="{{asset('images')}}/{{$user->profileimage}}" class="avatar-xl rounded-circle border border-4 border-white" alt="">
                                    @endforeach
								
							</div>
							<div class="lh-1">
								<h2 class="mb-0">
							 	@foreach ($users as $user)
                       						 <td>{{$user->first_name}} 
												{{$user->last_name}}</td>
                			    @endforeach
        
							    </h2>
								
							</div>
						</div>
						<div>
							<a href="classicQuiz" class="btn btn-outline-primary btn-sm d-none d-md-block">Attend Quiz</a>
						</div>
					</div>
				</div>
			</div>
	<!-- Content -->
	<div class="row mt-0 mt-md-4">
				<div class="col-lg-3 col-md-4 col-12">
					<!-- Side navbar -->
					<nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
						<!-- Menu -->
						<a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
						<!-- Button -->
						<button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="fe fe-menu"></span>
						</button>
						<!-- Collapse navbar -->
						<div class="collapse navbar-collapse" id="sidenav">
							<div class="navbar-nav flex-column">
								<span class="navbar-header"><i class="fas fa-chart-line"></i> Subscription</span>
								<!-- List -->
                                <br>
								<ul class="list-unstyled ms-n2 mb-4">
									{{-- <!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="student-subscriptions.html">My
											Subscriptions</a>
									</li> --}}
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="billing-info"><i class="fas fa-money-bill"></i> Billing
											Info</a>
									</li>
                                    <br>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="payment"><i class="fas fa-shopping-cart"></i> Payment</a>
									</li>
                                    <br>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="invoice"><i class="fas fa-receipt"></i> Invoice</a>
									</li>
                                    <br>
								</ul>
								<span class="navbar-header"><i class="fas fa-user-cog"></i> Account Settings</span>
                <!-- List -->
								<ul class="list-unstyled ms-n2 mb-0">
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="{{url('/profile-edit/{id}')}}"><i class="fas fa-user-edit"></i> Edit Profile</a>
									</li>
                                    <br>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="security"><i class="fas fa-user-shield"></i> Security</a>
									</li>
                                    <br>
									{{-- <!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="social-profile.html"><i class="fe fe-refresh-cw nav-icon"></i>Social
											Profiles</a>
									</li> --}}
									{{-- <li class="nav-item">
										<a class="nav-link" href="notifications.html"><i class="fe fe-bell nav-icon"></i>Notifications</a>
									</li> --}}
									<!-- Nav item -->
									{{-- <li class="nav-item">
										<a class="nav-link" href="profile-privacy"><i class="fe fe-lock nav-icon"></i>Profile
											Privacy</a>
									</li> --}}
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="deleteprofile"><i class="fas fa-user-times"></i> Delete
											Profile</a>
									</li>
                                    <br>
										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link " href="linkedaccount"><i class="fas fa-link"></i> Linked Accounts</a>
										</li>
                                        <br>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="logout"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			
@yield('body')
@endsection
  </body>
  </html>


<!-- Dashboard side section end--> 


