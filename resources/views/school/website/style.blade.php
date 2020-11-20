<?php
    header("Content-type: text/css; charset: UTF-8");
$url = request()->segment(3);
if(auth()->user()){
$theme_settings = App\FrontCms::join('institute', 'institute.school_id', '=', 'front_cms.school_id')
->where('institute.school_id',  auth()->user()->school_id)->where('theme_status', 1)->first();
}else{
$theme_settings = App\FrontCms::join('institute', 'institute.school_id', '=', 'front_cms.school_id')
->where('web', $url)->where('theme_status', 1)->first();
}

   $brandColor = "red";
   $linkColor = "#555555";
   $CDNURL = "http://cdn.blahblah.net";

//   dd( $theme_settings->head_bcakground_color);



?>

<style>


.content_text{
    color:#ffffff !important;
}


.btn-bg{
    background-color: {{$theme_settings->head_background_color}};
    color:{{$theme_settings->head_fore_color}}
}

.btn-bg:hover{
    color:{{$theme_settings->head_fore_color}}
}

.login{
    border:1px solid;
    border-radius:20px
}

.owl-carousel .owl-wrapper {
    display: flex !important;
}
.owl-carousel .owl-item img {
    width: 100%;
    height: 50%  !important;
    object-fit: cover;
    max-width: initial;
}
/* Base */
body {
  line-height: 1.7;
  color: gray;
  font-weight: 300;
  font-size: 1.1rem; }

::-moz-selection {
  background: #000;
  color: #fff; }

::selection {
  background: #000;
  color: #fff; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
    color:#ffffff; }
  a:hover {
    text-decoration: none;
    color:#ffffff;
 }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

.border-2 {
  border-width: 2px; }

.text-black {
  color: #000 !important; }

.bg-black {
  background: #000 !important; }

.color-black-opacity-5 {
  color: rgba(0, 0, 0, 0.5); }

.color-white-opacity-5 {
  color: rgba(255, 255, 255, 0.5); }

.site-wrap:before {
  display: none;
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out;
  background: rgba(0, 0, 0, 0.6);
  content: "";
  position: absolute;
  z-index: 2000;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  visibility: hidden; }

.offcanvas-menu .site-wrap {
  height: 100%;
  width: 100%;
  z-index: 2; }
  .offcanvas-menu .site-wrap:before {
    opacity: 1;
    visibility: visible; }

.line-height-1 {
  line-height: 1 !important; }

.bg-black {
  background: #000; }

.site-section {
  padding: 2.5em 0; }
  @media (min-width: 768px) {
    .site-section {
      padding: 5em 0; } }
  .site-section.site-section-sm {
    padding: 4em 0; }

.site-section-heading {
  padding-bottom: 20px;
  margin-bottom: 0px;
  position: relative;
  font-size: 2.5rem; }
  @media (min-width: 768px) {
    .site-section-heading {
      font-size: 3rem; } }

.border-top {
  border-top: 1px solid #edf0f5 !important; }

.site-footer {
  padding: 4em 0; }
  @media (min-width: 768px) {
    .site-footer {
      padding: 8em 0; } }
  .site-footer p {
    color: #ffffff; }
  .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5 {
    color: #ffffff; }
  .site-footer a {
    color: #ffffff; }
    .site-footer a:hover {
      color: black; }
  .site-footer ul li {
    margin-bottom: 10px; }
  .site-footer .footer-heading {
    font-size: 16px;
    color: #ffffff;
    text-transform: uppercase;
    font-weight: 900; }

.bg-text-line {
  display: inline;
  background: #000;
  -webkit-box-shadow: 20px 0 0 #000, -20px 0 0 #000;
  box-shadow: 20px 0 0 #000, -20px 0 0 #000; }

.text-white-opacity-05 {
  color: rgba(255, 255, 255, 0.5); }

.text-black-opacity-05 {
  color: rgba(0, 0, 0, 0.5); }

.hover-bg-enlarge {
  overflow: hidden;
  position: relative; }
  @media (max-width: 991.98px) {
    .hover-bg-enlarge {
      height: auto !important; } }
  .hover-bg-enlarge > div {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .8s all ease-in-out;
    -o-transition: .8s all ease-in-out;
    transition: .8s all ease-in-out; }
  .hover-bg-enlarge:hover > div, .hover-bg-enlarge:focus > div, .hover-bg-enlarge:active > div {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2); }
  @media (max-width: 991.98px) {
    .hover-bg-enlarge .bg-image-md-height {
      height: 300px !important; } }

.bg-image {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed; }
  .bg-image.overlay {
    position: relative; }
    .bg-image.overlay:after {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.7); }
  .bg-image > .container {
    position: relative;
    z-index: 1; }

@media (max-width: 991.98px) {
  .img-md-fluid {
    max-width: 100%; } }

@media (max-width: 991.98px) {
  .display-1, .display-3 {
    font-size: 3rem; } }

.play-single-big {
  width: 90px;
  height: 90px;
  display: inline-block;
  border: 2px solid #fff;
  color: #fff !important;
  border-radius: 50%;
  position: relative;
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .play-single-big > span {
    font-size: 50px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-40%, -50%);
    -ms-transform: translate(-40%, -50%);
    transform: translate(-40%, -50%); }
  .play-single-big:hover {
    width: 120px;
    height: 120px; }

.overlap-to-top {
  margin-top: -150px; }

.ul-check {
  margin-bottom: 50px; }
  .ul-check li {
    position: relative;
    padding-left: 35px;
    margin-bottom: 15px;
    line-height: 1.5; }
    .ul-check li:before {
      left: 0;
      font-size: 20px;
      top: -.3rem;
      font-family: "icomoon";
      content: "\e5ca";
      position: absolute; }
  .ul-check.white li:before {
    color: #fff; }
  .ul-check.success li:before {
    color: {{$theme_settings->head_background_color}}; }
  .ul-check.primary li:before {
    color: {{$theme_settings->head_background_color}}; }

.select-wrap, .wrap-icon {
  position: relative; }
  .select-wrap .icon, .wrap-icon .icon {
    position: absolute;
    right: 10px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 22px; }
  .select-wrap select, .wrap-icon select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%; }

/* Navbar */
.site-logo {
  position: relative;
  font-weight: 900;
  font-size: 1.3rem; }
  .site-logo span {
    font-size: 2rem; }
  .site-logo a {
    color: #000; }

.site-navbar {
  margin-bottom: 0px;
  z-index: 1999;
  position: absolute;
  width: 100%; }
  .site-navbar .container-fluid {
    padding-left: 7rem;
    padding-right: 7rem; }
  .site-navbar .site-navigation.border-bottom {
    border-bottom: 1px solid #f3f3f4 !important; }
  .site-navbar .site-navigation .site-menu {
    margin-bottom: 0; }
    .site-navbar .site-navigation .site-menu .active > a {
      color: {{$theme_settings->head_fore_color}};
      display: inline-block;
      padding: 5px 20px; 
      border: 1px solid;
      background: {{$theme_settings->head_background_color}}
    }
    .site-navbar .site-navigation .site-menu > .active > a:hover {
          color: {{$theme_settings->head_fore_color}}; }
    .site-navbar .site-navigation .site-menu a {
      text-decoration: none !important;
      display: inline-block; }
    .site-navbar .site-navigation .site-menu > li {
      display: inline-block; }
      .site-navbar .site-navigation .site-menu > li .desc {
        font-size: 12px;
        color: #969696; }
      .site-navbar .site-navigation .site-menu > li > a {
        padding: 20px 20px;
        color: #000;
        display: inline-block;
        text-decoration: none !important; }
        .site-navbar .site-navigation .site-menu > li > a:hover {
          color: {{$theme_settings->head_background_color}}; }
    .site-navbar .site-navigation .site-menu .has-children {
      position: relative; }
      .site-navbar .site-navigation .site-menu .has-children > a {
        position: relative;
        padding-right: 20px; }
        .site-navbar .site-navigation .site-menu .has-children > a:before {
          position: absolute;
          content: "\e313";
          font-size: 16px;
          top: 50%;
          right: 0;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          font-family: 'icomoon'; }
      .site-navbar .site-navigation .site-menu .has-children .dropdown {
        visibility: hidden;
        opacity: 0;
        top: 100%;
        position: absolute;
        text-align: left;
        border-top: 2px solid {{$theme_settings->head_background_color}};
        -webkit-box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        border-left: 1px solid #edf0f5;
        border-right: 1px solid #edf0f5;
        border-bottom: 1px solid #edf0f5;
        padding: 0px 0;
        margin-top: 20px;
        margin-left: 0px;
        background: #fff;
        -webkit-transition: 0.2s 0s;
        -o-transition: 0.2s 0s;
        transition: 0.2s 0s; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top {
          position: absolute; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            bottom: 100%;
            left: 20%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            border-color: rgba(136, 183, 213, 0);
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown a {
          font-size: 16px;
          text-transform: none;
          letter-spacing: normal;
          -webkit-transition: 0s all;
          -o-transition: 0s all;
          transition: 0s all;
          color: #343a40; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown .active > a {
          color: {{$theme_settings->head_background_color}} !important; }
         
        .site-navbar .site-navigation .site-menu .has-children .dropdown > li {
          list-style: none;
          padding: 0;
          margin: 0;
          min-width: 200px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a {
            padding: 9px 20px;
            display: block; }
            .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a:hover {
              background: #f4f5f9;
              color: {{$theme_settings->head_background_color}}; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > a:before {
            content: "\e315";
            right: 20px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > ul {
            left: 100%;
            top: 0; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:active > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:focus > a {
            background: #f4f5f9;
            color: {{$theme_settings->head_background_color}}; }
      .site-navbar .site-navigation .site-menu .has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children:focus > a, .site-navbar .site-navigation .site-menu .has-children:active > a {
        color: {{$theme_settings->head_background_color}}; }
      .site-navbar .site-navigation .site-menu .has-children:hover, .site-navbar .site-navigation .site-menu .has-children:focus, .site-navbar .site-navigation .site-menu .has-children:active {
        cursor: pointer; }
        .site-navbar .site-navigation .site-menu .has-children:hover > .dropdown, .site-navbar .site-navigation .site-menu .has-children:focus > .dropdown, .site-navbar .site-navigation .site-menu .has-children:active > .dropdown {
          -webkit-transition-delay: 0s;
          -o-transition-delay: 0s;
          transition-delay: 0s;
          margin-top: 0px;
          visibility: visible;
          opacity: 1; }
    .site-navbar .site-navigation .site-menu.site-menu-dark > li > a {
      color: #000; }

.site-mobile-menu {
  width: 300px;
  position: fixed;
  right: 0;
  z-index: 2000;
  padding-top: 20px;
  background: #fff;
  height: calc(100vh);
  -webkit-transform: translateX(110%);
  -ms-transform: translateX(110%);
  transform: translateX(110%);
  -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .offcanvas-menu .site-mobile-menu {
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%); }
  .site-mobile-menu .site-mobile-menu-header {
    width: 100%;
    float: left;
    padding-left: 20px;
    padding-right: 20px; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
      float: right;
      margin-top: 8px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
        font-size: 30px;
        display: inline-block;
        padding-left: 10px;
        padding-right: 0px;
        line-height: 1;
        cursor: pointer;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span:hover {
          color: #25262a; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
      float: left;
      margin-top: 10px;
      margin-left: 0px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
        display: inline-block;
        text-transform: uppercase; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
          max-width: 70px; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
          text-decoration: none; }
  .site-mobile-menu .site-mobile-menu-body {
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    position: relative;
    padding: 0 20px 20px 20px;
    height: calc(100vh - 52px);
    padding-bottom: 150px; }
  .site-mobile-menu .site-nav-wrap {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative; }
    .site-mobile-menu .site-nav-wrap a {
      padding: 10px 20px;
      display: block;
      position: relative;
      color: #212529; }
      .site-mobile-menu .site-nav-wrap a:hover {
        color: {{$theme_settings->head_background_color}}; }
    .site-mobile-menu .site-nav-wrap li {
      position: relative;
      display: block; }
      .site-mobile-menu .site-nav-wrap li .active > a {
        color: {{$theme_settings->head_background_color}}; }
    .site-mobile-menu .site-nav-wrap .arrow-collapse {
      position: absolute;
      right: 0px;
      top: 10px;
      z-index: 20;
      width: 36px;
      height: 36px;
      text-align: center;
      cursor: pointer;
      border-radius: 50%; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:hover {
        background: #f8f9fa; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
        font-size: 12px;
        z-index: 20;
        font-family: "icomoon";
        content: "\f078";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(-180deg);
        -ms-transform: translate(-50%, -50%) rotate(-180deg);
        transform: translate(-50%, -50%) rotate(-180deg);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .site-mobile-menu .site-nav-wrap > li {
      display: block;
      position: relative;
      float: left;
      width: 100%; }
      .site-mobile-menu .site-nav-wrap > li > a {
        padding-left: 20px;
        font-size: 20px; }
      .site-mobile-menu .site-nav-wrap > li > ul {
        padding: 0;
        margin: 0;
        list-style: none; }
        .site-mobile-menu .site-nav-wrap > li > ul > li {
          display: block; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > a {
            padding-left: 40px;
            font-size: 16px; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > ul {
            padding: 0;
            margin: 0; }
            .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li {
              display: block; }
              .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li > a {
                font-size: 16px;
                padding-left: 60px; }
    .site-mobile-menu .site-nav-wrap[data-class="social"] {
      float: left;
      width: 100%;
      margin-top: 30px;
      padding-bottom: 5em; }
      .site-mobile-menu .site-nav-wrap[data-class="social"] > li {
        width: auto; }
        .site-mobile-menu .site-nav-wrap[data-class="social"] > li:first-child a {
          padding-left: 15px !important; }

.sticky-wrapper {
  position: absolute;
  z-index: 100;
  width: 100%;
  background: #fff; }
  .sticky-wrapper + .site-blocks-cover {
    margin-top: 96px; }
  .sticky-wrapper .site-navbar {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    background: #fff; }
    .sticky-wrapper .site-navbar .site-logo a {
      color: #000; }
    .sticky-wrapper .site-navbar .site-menu > li {
      display: inline-block; }
      .sticky-wrapper .site-navbar .site-menu > li > a.active {
        color: #000;
        position: relative; }
        .sticky-wrapper .site-navbar .site-menu > li > a.active:after {
          height: 2px;
          background: #fff;
          content: "";
          position: absolute;
          bottom: 0;
          left: 20px;
          right: 20px; }
  .sticky-wrapper.is-sticky .site-navbar {
    background: #fff;
    -webkit-box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
    box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2); }
    .sticky-wrapper.is-sticky .site-navbar .site-logo a {
      color: #000; }
    .sticky-wrapper.is-sticky .site-navbar .site-menu > li {
      display: inline-block; }
      .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a {
        padding: 5px 20px;
        color: #000;
        display: inline-block;
        text-decoration: none !important; }
        .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a:hover {
          color: {{$theme_settings->head_background_color}}; }
        .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a.active:after {
          background: {{$theme_settings->head_background_color}}; }
      .sticky-wrapper.is-sticky .site-navbar .site-menu > li.active > a {
        color: {{$theme_settings->head_fore_color}}; }
  .sticky-wrapper .shrink {
    padding-top: 10px !important;
    padding-bottom: 10px !important; }

/* Blocks */
.intro-section {
  background-size: cover;
  position: relative; }
  .intro-section, .intro-section .container .row {
    /* height: 100vh; */
    min-height: 700px; 
}
  .intro-section:before {
    content: "";
    position: absolute;
    /* height: 100%; */
    /* width: 100%; */
    background: #222;
    opacity: .7;
    border-bottom-right-radius: 0px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; }
    @media (max-width: 991.98px) {
      .intro-section:before {
        width: 100%; } }
  .intro-section h1 {
    font-size: 7rem;
    font-weight: 900;
    color: #fff; }
  .intro-section p {
    color: rgba(255, 255, 255, 0.5);
    font-size: 1.1rem;
    max-width: 400px; }

.custom-breadcrumns {
  padding: 20px 0; }
  .custom-breadcrumns span, .custom-breadcrumns a {
    font-size: 14px; }
  .custom-breadcrumns a {
    display: inline-block;
    color: #bdbdbd; }
    .custom-breadcrumns a:hover {
      color: {{$theme_settings->head_background_color}}; }
  .custom-breadcrumns .current {
    color: {{$theme_settings->head_background_color}}; }

.section-title-underline {
  color: #000; }
  .section-title-underline span {
    display: inline-block;
    border-bottom: 4px solid {{$theme_settings->head_background_color}}; }
  .section-title-underline.style-2 {
    color: #fff; }
    .section-title-underline.style-2 span {
      border-color: {{$theme_settings->head_background_color}}; }

.section-bg {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 4rem 0; }
  .section-bg.style-1 {
    position: relative; }
    .section-bg.style-1:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: {{$theme_settings->footer_background_color}};
      opacity: .9;
      z-index: 0; }
    .section-bg.style-1 > .container {
      z-index: 2; }
    .section-bg.style-1 .icon {
      font-size: 3.5rem;
      color: {{$theme_settings->head_background_color}}; }
    .section-bg.style-1 h3 {
      font-size: 20px;
      color: {{$theme_settings->head_fore_color}};
      margin-bottom: 30px; }
    .section-bg.style-1 p {
      color: #7697c6; }

.news-updates {
  padding: 5rem 0; }
  .news-updates .section-heading {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 40px; }
    .news-updates .section-heading h2 {
      margin-bottom: 0;
      line-height: 0; }
    .news-updates .section-heading a {
      font-size: 16px; }
  .news-updates .post-entry-big .img-link {
    position: relative;
    display: inline-block;
    margin-bottom: 30px;
    overflow: hidden; }
    .news-updates .post-entry-big .img-link img {
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
    .news-updates .post-entry-big .img-link:before {
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      position: absolute;
      content: "";
      background: #000;
      opacity: 0;
      z-index: 2;
      visibility: hidden;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
    .news-updates .post-entry-big .img-link img {
      z-index: 1; }
    .news-updates .post-entry-big .img-link:hover:before {
      opacity: .6;
      visibility: visible; }
    .news-updates .post-entry-big .img-link:hover img {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05); }
  .news-updates .post-entry-big .post-content .post-meta a {
    display: inline-block;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: bold;
    color: #939393; }
  .news-updates .post-entry-big .post-content .post-heading {
    line-height: .9; }
    .news-updates .post-entry-big .post-content .post-heading a {
      font-size: 18px;
      font-weight: bold;
      color: #303030; }
      .news-updates .post-entry-big .post-content .post-heading a:hover {
        color: {{$theme_settings->head_background_color}}; }
  .news-updates .post-entry-big.horizontal .img-link {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 90px;
    flex: 0 0 90px; }

.social-wrap a {
  display: inline-block;
  width: 40px;
  height: 40px;
  /* border: 1px solid; */
  background: {{$theme_settings->head_background_color}};
  position: relative; }
  .social-wrap a > span {
    position: absolute;
    color: #fff;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); }
  .social-wrap a:hover {
    background: {{$theme_settings->head_background_color}}; }

.block-number-1 .icon {
  color: #fff;
  font-size: 2rem; }

.ftco-testimonial-1 .ftco-testimonial-vcard img {
  width: 50px;
  height: 50px;
  border-radius: 50%; }

.ftco-testimonial-1 .ftco-testimonial-vcard h3 {
  font-size: 1.2rem;
  display: block;
  margin-bottom: 0;
  color: #000; }

.ftco-testimonial-1 p {
  color: #a2a2a2; }

.hero-slide {
  position: relative; }
  .hero-slide .owl-nav .owl-prev,
  .hero-slide .owl-nav .owl-next {
    position: absolute;
    top: 50%;
    text-align: center;
    width: 40px;
    height: 40px;
    border: 1px solid; 
    border-radius:50%;
    color:#ffffff;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    background: {{$theme_settings->head_background_color}}; }
    .hero-slide .owl-nav .owl-prev > span,
    .hero-slide .owl-nav .owl-next > span {
      font-size: 1.5rem;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
  .hero-slide .owl-nav .owl-prev {
    left: 0; }
  .hero-slide .owl-nav .owl-next {
    right: 0; }
  .hero-slide .owl-dots {
    position: absolute;
    bottom: 30px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    text-align: center; }
    .hero-slide .owl-dots .owl-dot {
      display: inline-block; }
      .hero-slide .owl-dots .owl-dot > span {
        border-radius: 50%;
        display: inline-block;
        width: 7px;
        height: 7px;
        margin: 2px 5px;
        background: rgba(255, 255, 255, 0.2); }
      .hero-slide .owl-dots .owl-dot.active > span {
        background: #fff; }

.owl-slide-3, .owl-slide {
  position: relative; }
  .owl-slide-3 .owl-stage, .owl-slide .owl-stage {
    padding-top: 30px;
    padding-bottom: 30px; }
  .owl-slide-3 .owl-nav .owl-prev,
  .owl-slide-3 .owl-nav .owl-next, .owl-slide .owl-nav .owl-prev,
  .owl-slide .owl-nav .owl-next {
    position: absolute;
    top: 50%;
    text-align: center;
    width: 40px;
    height: 40px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    background: {{$theme_settings->head_background_color}};
    color:#ffffff }
    .owl-slide-3 .owl-nav .owl-prev > span,
    .owl-slide-3 .owl-nav .owl-next > span, .owl-slide .owl-nav .owl-prev > span,
    .owl-slide .owl-nav .owl-next > span {
      font-size: 1.5rem;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
  .owl-slide-3 .owl-nav .owl-prev, .owl-slide .owl-nav .owl-prev {
    left: 0; border-radius: 20px }
  .owl-slide-3 .owl-nav .owl-next, .owl-slide .owl-nav .owl-next {
    right: 0; 
    border-radius: 20px}
  .owl-slide-3 .owl-dots, .owl-slide .owl-dots {
    position: absolute;
    bottom: -30px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    text-align: center; }
    .owl-slide-3 .owl-dots .owl-dot, .owl-slide .owl-dots .owl-dot {
      display: inline-block; }
      .owl-slide-3 .owl-dots .owl-dot > span, .owl-slide .owl-dots .owl-dot > span {
        border-radius: 50%;
        display: inline-block;
        width: 7px;
        height: 7px;
        margin: 2px 5px;
        background: rgba(0, 0, 0, 0.2); }
      .owl-slide-3 .owl-dots .owl-dot.active > span, .owl-slide .owl-dots .owl-dot.active > span {
        background: {{$theme_settings->head_background_color}};
        color:#ffffff  }

.owl-slide .owl-nav {
  display: none; }

.feature-1 .icon-wrapper, .person .icon-wrapper {
  position: relative;
  width: 96px;
  height: 55.43px;
  right: 0;
  left: 0;
  margin: 0 auto;
  z-index: 1;
  margin-top: -33.94px;
  background: {{$theme_settings->head_background_color}}; }
  .feature-1 .icon-wrapper > span, .person .icon-wrapper > span {
    width: 96px;
    height: 96px;
    text-align: center;
    font-size: 3rem;
    line-height: 96px;
    display: inline-block;
    position: absolute;
    top: -20px;
    left: 0; }
  .feature-1 .icon-wrapper:before, .feature-1 .icon-wrapper:after, .person .icon-wrapper:before, .person .icon-wrapper:after {
    content: "";
    position: absolute;
    z-index: -1;
    width: 67.88px;
    height: 67.88px;
    -webkit-transform: scaleY(0.5774) rotate(-45deg);
    -ms-transform: scaleY(0.5774) rotate(-45deg);
    transform: scaleY(0.5774) rotate(-45deg);
    background-color: inherit;
    left: 14.06px; }
  .feature-1 .icon-wrapper:before, .person .icon-wrapper:before {
    top: -33.94px; }
  .feature-1 .icon-wrapper:after, .person .icon-wrapper:after {
    bottom: -33.94px; }

.feature-1 .feature-1-content, .person .feature-1-content {
  padding: 50px 20px 20px 20px;
  text-align: center; }
  .feature-1 .feature-1-content h2, .person .feature-1-content h2 {
    font-size: 1.3rem;
    color: #000; }

.person {
  margin-bottom: 50px !important; }
  .person img {
    width: 100px;
    height: 100px;
    margin-top: -50px;
    border-radius: 50%;
    margin-left: auto;
    margin-right: auto; }

.course-1-item {
  -webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1); }
  .course-1-item figure {
    position: relative; }
  .course-1-item .category {
    background: {{$theme_settings->head_background_color}};
    padding: 20px; }
    .course-1-item .category h3 {
      color: #fff;
      font-size: 20px;
      margin-bottom: 0; }
  .course-1-item .price {
    position: absolute;
    bottom: 0;
    right: 0;
    -webkit-transform: translatey(-100%);
    -ms-transform: translatey(-100%);
    transform: translatey(-100%);
    padding: 10px 20px;
    background: {{$theme_settings->head_background_color}};
    color: #fff; }
  .course-1-item .course-1-content {
    padding: 20px 40px;
    text-align: center; }
    .course-1-item .course-1-content h2 {
      margin: 0 0 30px 0;
      font-size: 18px;
      color: #000; }
    .course-1-item .course-1-content .rating {
      text-align: center; }
      .course-1-item .course-1-content .rating > span {
        display: inline-block;
        margin: 2px; }
    .course-1-item .course-1-content .desc {
      font-size: 15px; }

.footer {
  padding: 4rem 0;
  background: {{$theme_settings->footer_background_color}};
  font-size: 14px;
  color: #fff; }
  .footer .footer-heading {
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px; }
    .footer .footer-heading span {
      border-bottom: 3px solid #fff; }
  .footer a:hover {
    color: #fff;
    text-decoration: underline; }
  .footer .copyright {
    color: #fff;
    padding-top: 7rem;
    text-align: center; }

.ftco-subscribe-1 {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative; }
  .ftco-subscribe-1:before {
    position: absolute;
    content: "";
    background: {{$theme_settings->footer_background_color}};
    opacity: .7;
    z-index: 1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0; }
  .ftco-subscribe-1 > .container {
    position: relative;
    z-index: 2; }
    .ftco-subscribe-1 > .container h2, .ftco-subscribe-1 > .container p {
      color: #fff; }
  .ftco-subscribe-1 .form-control {
    height: auto !important; }

.video-1 {
  position: relative;
  display: block; }
  .video-1 .play {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 50px;
    height: 50px;
    background: rgba(0, 0, 0, 0.3);
    color: #fff;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    border-radius: 50%; }
    .video-1 .play > span {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
  .video-1:hover {
    -webkit-box-shadow: 0 5px 30px -10px rgba(0, 0, 0, 0.3);
    box-shadow: 0 5px 30px -10px rgba(0, 0, 0, 0.3); }

#loader {
  position: fixed;
  width: 96px;
  height: 96px;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.9);
  -webkit-box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  border-radius: 16px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity .2s ease-out, visibility 0s linear .2s;
  -o-transition: opacity .2s ease-out, visibility 0s linear .2s;
  transition: opacity .2s ease-out, visibility 0s linear .2s;
  z-index: 2000; }

#loader.fullscreen {
  padding: 0;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
  background-color: {{$theme_settings->footer_background_color}};
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none; }

#loader.show {
  -webkit-transition: opacity .4s ease-out, visibility 0s linear 0s;
  -o-transition: opacity .4s ease-out, visibility 0s linear 0s;
  transition: opacity .4s ease-out, visibility 0s linear 0s;
  visibility: visible;
  opacity: 1; }

#loader .circular {
  -webkit-animation: loader-rotate 2s linear infinite;
  animation: loader-rotate 2s linear infinite;
  position: absolute;
  left: calc(50% - 24px);
  top: calc(50% - 24px);
  display: block;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg); }

#loader .path {
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  -webkit-animation: loader-dash 1.5s ease-in-out infinite;
  animation: loader-dash 1.5s ease-in-out infinite;
  stroke-linecap: round; }

@-webkit-keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px; } }

@keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px; } }

</style>