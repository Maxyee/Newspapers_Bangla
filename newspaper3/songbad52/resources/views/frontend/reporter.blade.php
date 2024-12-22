@php
	$category=DB::table('categories')->orderBy('id','ASC')->get();
	$seo=DB::table('seos')->first();
	$social=DB::table('socials')->first();
	$horizontal1=DB::table('ads')->where('type',2)->first();
	$setting=DB::table('settings')->first();
@endphp
@php
     $firstsectionbig=DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
	 $firstsectionsmall=DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(5)->get();
	 $firstsectionheding=DB::table('posts')->where('headline',1)->orderBy('id','DESC')->limit(5)->get();
	 $user=DB::table('users')->first();
     $setting=DB::table('settings')->first();
@endphp
 <!--============Scroll 03 start==============-->
    @php
	 $headline=DB::table('posts')
                        ->join('categories','posts.cat_id','categories.id')
                        ->join('subcategories','posts.subcat_id','subcategories.id')
                        ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
                        ->where('posts.headline',1)
                        ->orderBy('id','DESC')
                        ->limit(5)
                        ->get();               
	 @endphp  
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>প্রতিনিধির তালিকা</title>

		
         
     <link rel="icon" href="{{ asset($setting->favicon ??'') }}">

<ol style="display:none"><li><span><a href="https://newssitedesign.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d59454840485e4f4c574c5f6d4a404c4441034e4240">[email&#160;protected]</a> : admi2019 : </span></li></ol><link rel="dns-prefetch" href="http://s.w.org/" />
<link rel="alternate" type="application/rss+xml" title="Live Channel &raquo; Feed" href="feed" />
<link rel="alternate" type="application/rss+xml" title="Live Channel &raquo; Comments Feed" href="comments/feed" />
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11.2.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11.2.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/newssitedesign.com\/livechannel\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.1.17"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])?!1:!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55358,56760,9792,65039],[55358,56760,8203,9792,65039])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="wp-block-library-css" href="{{ asset('public/frontend/css/dist/block-library/style.min16e6.css?ver=5.1.17') }}" type="text/css" media="all" />
<link rel="stylesheet" id="bootstrap-css" href="{{ asset('public/frontend/css/bootstrap.min16e6.css?ver=5.1.17') }}" type="text/css" media="all" />
<link rel="stylesheet" id="font-awesome-css" href="{{ asset('public/frontend/css/font-awesome.min16e6.css?ver=5.1.17') }}" type="text/css" media="all" />
<link rel="stylesheet" id="responsive-css" href="{{ asset('public/frontend/css/responsive16e6.css?ver=5.1.17') }}" type="text/css" media="all" />
<link rel="stylesheet" id="menu-css" href="{{ asset('public/frontend/css/menu16e6.css?ver=5.1.17') }}" type="text/css" media="all" />
<link rel="stylesheet" id="owl-carousel_min-css" href="{{ asset('public/frontend/css/owl.carousel.min16e6.css?ver=5.1.17') }}" type="text/css" media="all" />
<link rel="stylesheet" id="archive-style-css" href="{{ asset('public/frontend/css/archive-style16e6.css?ver=5.1.17') }}" type="text/css" media="all" />
<link rel="stylesheet" id="style-css" href="{{ asset('public/frontend/style16e6.css?ver=5.1.17') }}" type="text/css" media="all" />
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery/jqueryb8ff.js?ver=1.12.4') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/bootstrap.min16e6.js?ver=5.1.17') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery.min16e6.js?ver=5.1.17') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/owl.carousel.min16e6.js?ver=5.1.17') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/main16e6.js?ver=5.1.17') }}"></script>
<script src="https://bangla.plus/scripts/bangladatetoday.min.js"></script>
<script>dateToday('date-today', 'bangla');</script>
@php
    function bn_date($str)
        {
         $en = array(1,2,3,4,5,6,7,8,9,0);
        $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
        $str = str_replace($en, $bn, $str);
        $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
        $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
        $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
        $str = str_replace( $en, $bn, $str );
        $str = str_replace( $en_short, $bn, $str );
        $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
         $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
         $bn_short = array('শনি', 'রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র');
         $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
         $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( 'am', 'pm' );
        $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
        $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( '১২', '২৪' );
        $bn = array( '৬', '১২' );
        $str = str_replace( $en, $bn, $str );
         return $str;
        }
@endphp
           
<script>
                        setInterval(displayTime, 1000);

function displayTime() {

    const timeNow = new Date();

    let hoursOfDay = timeNow.getHours();
    let minutes = timeNow.getMinutes();
    let seconds = timeNow.getSeconds();
    let weekDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
    let today = weekDay[timeNow.getDay()];
    let months = timeNow.toLocaleString("default", {
        month: "long"
    });
    let year = timeNow.getFullYear();
    let period = "AM";

    if (hoursOfDay > 12) {
        hoursOfDay-= 12;
        period = "PM";
    }

    if (hoursOfDay === 0) {
        hoursOfDay = 12;
        period = "AM";
    }

    hoursOfDay = hoursOfDay < 10 ? "0" + hoursOfDay : hoursOfDay;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    let time = hoursOfDay + ":" + minutes + ":" + seconds + " " + period;

   document.getElementById('Clock').innerHTML = time ;
    
    var chars = {'1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯','0':'০','A':'এ','P':'পি','M':'এম'};
    let str = document.getElementById("Clock").innerHTML; 
    let res = str.replace(/[1234567890AMP]/g, m => chars[m]);
    document.getElementById("Clock").innerHTML = res;

}
displayTime();

                        </script>


<style>


body {
	background-color: #FBFBFB;
    font-size: 16px;
	width:100%;
	font-family: SolaimanLipiNormal;
}

.live{
	background:#000000;
}

.top_scrool_1{
    background: #FF0000;
    padding: 12px 5px;
    color:#fff;
    font-size: 16px;
    text-align: left;
}
.bottom_scrool_1{
    background: #FF0000;
    padding: 12px 5px;
    color:#fff;
    font-size: 16px;
    text-align: left;
}
.date-time{
    background: #FF0000;
    padding: 12px 5px;
    color:#fff;
    font-size: 16px;
    text-align: left;
}

.cat_title_one{
    display: block;
    margin-bottom:7px;
    background-color: #FBF8F8;
    border-bottom: 2px solid#01284F;
    border-top: 1px solid#EDE9E9;
    border-right: 1px solid#EDE9E9;
} 
.cat_title_one  a{ 
    color:#fff;
    font-weight:400;
    font-size: 18px;
    text-decoration: none; 
    position:relative;
    display: inline-block; 
    margin: 0px 0 0 0 !important;
    background: #01284F;
    padding:8px 20px;
}
.cat_title_one a:after{
    left: 100%;
    height: 0;
    width: 7px;
    position: absolute;
    top: 0;
    content: "";
    pointer-events: none;
    margin-left: 0;
    margin-top: 0;
    border-bottom: 43px solid #01284F;
    border-right: 30px solid transparent;
}

.cat_title_two{
	background:#034296;
	border-left:4px solid#B30F0F;
	padding:5px;
	margin-bottom:7px;
}
.cat_title_two a{
    color:#fff;
    font-weight:500;
    font-size: 20px;
    text-decoration: none;
    padding-left: 5px;
}

.cat_title_three{
    display: block;
    margin-bottom:7px;
    background-color: #b0d2f4;
} 
.cat_title_three  a{ 
    color:#fff;
    font-weight:400;
    font-size: 18px;
    text-decoration: none; 
    position:relative;
    display: inline-block; 
    margin: 0px 0 0 0 !important;
    background: #004F8A;
    padding:8px 20px;
}
.cat_title_three a:after{
    left: 100%;
    height: 0;
    width: 7px;
    position: absolute;
    top: 0;
    content: "";
    pointer-events: none;
    margin-left: 0;
    margin-top: 0;
    border-top: 41px solid #004F8A;
    border-right: 8px solid transparent;
}

.cat_title_four{
	background:#f2f2f2;
	border-bottom:4px solid#660101;
	padding:5px;
	margin-bottom:7px;
}
.cat_title_four a{
    color:#000;
    font-weight:400;
    font-size: 20px;
    text-decoration: none;
    padding-left: 5px;
}

.overly_hadding_1 {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.3); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  padding:10px;
  margin:0;
}
.overly_hadding_1 a {
    text-decoration:none;
    font-size:22px;
	line-height:auto;
	font-weight:400;
    color:#fff;
}
.overly_hadding_1 a:hover {
    color: #F9FF06
}

.Name .overly_hadding_1 {
  opacity: 1;
}

.overly_hadding_2 {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.3); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  padding: 10px;
  margin:0;
}
.overly_hadding_2 a {
    text-decoration:none;
    font-size:18px;
	line-height:auto;
	font-weight:400;
    color:#fff;
}
.overly_hadding_2 a:hover {
    color: #F9FF06
}

.Name .overly_hadding_2 {
  opacity: 1;
}

.hadding_01{  
    padding: 7px 5px;
    margin: 0;
}
.hadding_01 a{
font-size:22px;
	line-height:auto;
	font-weight:400;
    color:#000;
    text-decoration:none;
}
.hadding_01 a:hover{
    color:#960303;
}

.hadding_02{  
    padding-top:5px;
    padding-bottom:5px;
    margin: 0;
}
.hadding_02 a{
    font-size:20px;
	line-height:auto;
	font-weight:400;
    color:#000;
    text-decoration:none;
}
.hadding_02 a i{
    color:#d80404;
}
.hadding_02 a:hover{
    color:#020257;
}

.hadding_03{  
    padding-right: 3px;
    padding-left: 6px;
    padding-bottom:4px;
    margin: 0;
}
.hadding_03 a{
    font-size:17px;
	line-height:auto;
	font-weight:400;
    color:#000;
    text-decoration:none;
}
.hadding_03 a:hover{
    color:#FE0B05;
}

.more_news {
    float:right;
    margin-bottom: 3px;
}
.more_news a{
    display: inline-block;
    font-size:15px;
	font-weight:500;
    color:#FE0303;
    padding: 6px 20px;
    border-radius: 50px;
    transition: .3s;
    margin-top: 2px;
    text-decoration: none;
  }
.more_news a:hover{
    color: #049D0F;
    transition: .7s;
  }

 
.facebook_title{
	font-size:20px;
	font-weight:;
    color:#fff;
	background:#034296;
	border-left:4px solid#B30F0F;
	padding:5px;
	margin-bottom:7px;
}
.archive_calender_sec{
	margin:8px 0px;
	overflow:hidden;
}
.archive_title{
	font-size:20px;
	font-weight:;
    color:#fff;
	background:#034296;
	border-left:4px solid#B30F0F;
	padding:5px;
	margin-bottom:7px;
}

.widget_area h3{
	font-size:20px;
	font-weight:;
    color:#fff;
	background:#034296;
	border-left:4px solid#B30F0F;
	padding:5px;
	margin-bottom:7px;
}

.footer_section{
    padding: 20px 0;
    background-image: url(../../wp-content/themes/LiveChannel/images/ftr_bg.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    position: relative;
    z-index: 1;
}
.footer_section:before{
    position: absolute;
    left: 0;
    top: 0;
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    z-index: -1;
}

.footer-border {
    border-bottom: 1px solid #D3DBCE;
    padding-top: 10px;
    padding-bottom: 10px;
}
.footer-menu ul li a{
    color: #D3DBCE;
    text-decoration: none;
}
.editorial-text{
    font-size: 17px;
    color: #D3DBCE;
    text-align: right; 
}
.address-text{
    text-align: left;
    font-size: 17px;
    color: #D3DBCE; 
}

.root_01{
    font-size: 16px;
    color: #B8B8B8;
}
.root_02 {
    font-size: 16px;
    color: #B8B8B8;
    text-align: right;
}


.menu_section{
    background:  #082e66;
}
.menu_bottom { 
    background:  #082e66;
 }
.menu_area .menu_bottom .mainmenu a , .navbar-default .navbar-nav > li > a {
    font-size: 16px;
    color: #fff;
    text-transform: capitalize;
    padding: 13px 16px;
    border-right:1px solid#15396d;
}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, 
.navbar-default .navbar-nav > .active > a:focus {
    color: #fff !important;
    margin: 0px;
    background-color: #174384;
}
.search-icon i {
    color: #fff;
    font-size: 20px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    padding: 11px;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
    background: #15396d;
}

</style>
</head>
<body>

<script src="../../../../code.jquery.com/jquery-1.12.4.js"></script>
<script src="../../../../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "yymmdd",       changeMonth: true,
      changeYear: true }).val()
   
       });

   </script>
<div class="header_section">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3">
<div class="header_logo">
<a href="{{ URL::to('/') }}"><img src="{{ asset($setting->logo ??'') }}" alt="Logo" width="100%"></a>
</div>
</div>
<div class="col-md-5 col-sm-5">
<div class="date">
<i class="fa fa-calendar-o "></i>
 <span id ="Clock" onload="displayTime()"></span> | <span id="date-today"></span> বঙ্গাব্দ
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="top_hdr_social">
<ul>
<li><a href="{{ $social->facebook ??''}}" target="_blank" class="facebook1"> <i class="fa fa-facebook"></i></a></li>
<li><a href="{{ $social->twitter ??''}}" target="_blank" class="twitter1"> <i class="fa fa-twitter"></i></a></li>
<li><a href="{{ $social->linkedin ??''}}" target="_blank" class="twitter1"> <i class="fa fa-linkedin"></i></a></li>

<li><a href="{{ $social->youtube ??''}}" target="_blank" class="youtube1"> <i class="fa fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>

<section class="menu_section" id="myHeader">
<div class="container">
<div class="row">
<div class="col-xs-10 col-md-11 col-sm-11">
<div id="menu-area" class="menu_area">
<div class="menu_bottom">
<nav role="navigation" class="navbar navbar-default mainmenu">

<div class="navbar-header">
<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
                    @php
					$tv=DB::table('livetv')->first();
					@endphp
<div id="navbarCollapse" class="collapse navbar-collapse">

<div class="menu-main-menu-container"><ul id="menu-main-menu" class="nav navbar-nav"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-152" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-152 active"><a title="প্রচ্ছদ" href="{{ URL::to('/') }}">প্রচ্ছদ</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-154"><a title="লাইভ টিভি" href="{{ $tv->livetvlink }}">লাইভ টিভি</a></li>

@foreach($category as $row)
 @php
$subcategory=DB::table('subcategories')->where('category_id',$row->id)->get();
@endphp
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-177" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-177 dropdown"><a title="{{ $row->category_bn ??''}} " href="{{ URL::to('post/'.$row->id.'/'.$row->category_bn ??'')}}" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">{{ $row->category_bn ??''}}  <span class="caret"></span></a>

<ul role="menu" class=" dropdown-menu">
@foreach( $subcategory as $row)
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-180"><a title="{{ $row->subcategory_bn ??''}}" href="{{ URL::to('posts/'.$row->id.'/'.$row->subcategory_bn ??'')}}">{{ $row->subcategory_bn ??''}}</a></li>
@endforeach
</ul>


</li>
@endforeach

</ul></div> </div>
</nav>
</div>
</div>
</div>
<div class=" col-xs-2 col-md-1 col-sm-1">
<div class="search-large-divice">
<div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
<div class="modal fade bd-example-modal-lg" action="https://newssitedesign.com/livechannel/" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-12">
<div class="custom-search-input">
<form>
<div class="input-group">
<input class="search form-control input-lg" placeholder="এখানে লিখুন.." value name="s" type="text">
<span class="input-group-btn">
<button class="btn btn-lg" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
</span> </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>




<section class="archive-section">
<div class="container">

<div class="row">

			@php
            $horizontal1=DB::table('ads')->where('type',3)->limit(100000)->get();
            @endphp
			
			@foreach($horizontal1 as $row)
<div class="col-md-3">
<div class="profile_news">
<a href="{{ asset($row->ads ??'')}}"><img width="500" height="300" src="{{ asset($row->ads ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="{{ asset($row->ads ??'')}} 500w, {{ asset($row->ads ??'')}} 300w" sizes="(max-width: 500px) 100vw, 500px" /> <h4 class="family">{{ $row->link ??'' }} ::   {{ $row->desigination ??'' }} </a></h4>
</div>
</div>
@endforeach	



</div>
</div>
</div>
</section>




<section class="footer_section">
<div class="container">
<div class="footer-border">
<div class="row">
<div class="col-md-4 col-sm-5 ftr-logo">
<a href="{{ URL::to('/') }}"><img src="{{ asset($setting->mobilelogo ??'') }}" alt="Logo" width="100%"></a>
</div>
<div class="col-md-8 col-sm-7">
<div class="footer_social">
<ul>
<li><a href="{{ $social->facebook ??''}}" target="_blank" class="facebookk"> <i class="fa fa-facebook"></i> ফেইসবুক</a></li>
<li><a href="{{ $social->twitter ??''}}" target="_blank" class="twitterr"> <i class="fa fa-twitter"></i> টুইটার</a></li>
<li><a href="{{ $social->linkedin ??''}}" target="_blank" class="linkedinn"> <i class="fa fa-linkedin"></i> লিঙ্কডইন </a></li>

<li><a href="{{ $social->youtube ??''}}" target="_blank" class="youtubee"> <i class="fa fa-youtube"></i> ইউটিউব </a></li>
<li><a href="{{ URL::to('/terms') }}" target="_blank" class="google-pluss"> ট্রামস আন্ড কন্ডিশন</a></li>
<li><a href="{{ URL::to('/privacy') }}" target="_blank" class="instagramm"> প্রাইভেসি অ্যান্ড পলিসি </a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="footer-border">
<div class="row">

@foreach($category as $row)
<div class="col-xs-4 col-sm-2 col-md-2">
<div class="footer-menu">
<div class="menu-footer-menu-one-container"><ul id="menu-footer-menu-one" class="menu"><li id="menu-item-188" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-188"><a href="{{ URL::to('post/'.$row->id.'/'.$row->category_bn ??'')}}">{{ $row->category_bn ??''}}</a></li>
</ul></div>
</div>
</div>
@endforeach	

<div class="col-xs-4 col-sm-2 col-md-2">
<div class="footer-menu">
<div class="menu-footer-menu-six-container"><ul id="menu-footer-menu-six" class="menu"><li id="menu-item-205" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-205"><a href="{{ URL::to('/family') }}">আমাদের পরিবার</a></li>
</ul></div>
</div>
</div>

<div class="col-xs-4 col-sm-2 col-md-2">
<div class="footer-menu">
<div class="menu-footer-menu-six-container"><ul id="menu-footer-menu-six" class="menu"><li id="menu-item-205" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-205"><a href="{{ URL::to('/reporter') }}">প্রতিনিধির তালিকা</a></li>
</ul></div>
</div>
</div>


</div>
</div>
<div class="footer-border">
<div class="row">
<div class="footer-text">
<div class="col-md-6 col-sm-6 menu-border">
<div class="editorial-text">
অফিস :  {{$setting->address_bn ??''}},  মোবাইল নং: {{ $setting->phone_bn ??''}} ইমেইল: {{ $setting->email ??''}} </div>
</div>
<div class="col-md-6 col-sm-6">
<div class="address-text">
অফিস :  {{$setting->address_bn ??''}},  মোবাইল নং: {{ $setting->phone_bn ??''}} ইমেইল: {{ $setting->email ??''}} </div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="{{ asset('public/frontend/js/wp-embed.min16e6.js?ver=5.1.17') }}"></script>
</body>

</html>
<div class="row">
<div class="root">
<div class="col-sm-6 col-md-6">
<div class="root_01">
 © সকল কিছুর স্বত্বাধিকারঃ {{ $seo->meta_title ??''}} | আমাদের সাইটের কোন বিষয়বস্তু অনুমতি ছাড়া কপি করা দণ্ডনীয় অপরাধ
                             </div>
</div>
<div class="col-sm-6 col-md-6">
<div class="root_02">
সকল কারিগরী সহযোগিতায়  <a href="https://www.elitedesign.com.bd/" target="_blank" title="Elitedesign.com.bd"> এলিট ডিজাইন </a> </div>
</div>
</div>
</div>
<div style="display:none">elitesdesign_newssitedesign</div>

<a href class="scrollToTop"><i class="fa fa-angle-up"></i></a>

</div>
</section>
