
				  
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1026.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
        <script type="text/javascript">
            var site_url = 'http://laravelproj.com/';
            var cookie_expiration_time = "2592000";
            var api_path = 'http://laravelproj.com/api/';
            var images_static_path = 'https://static.meraevents.com/images/static/';
            var api_getProfileDropdown = "http://laravelproj.com/api/user/getProfileDropdown";
			var uploadUrl ="http://laravelproj.com/js/public/tinymce/plugins/jbimages/dialog-v4.php";
        </script>
        <script>
            var api_searchSearchEventAutocomplete = "http://laravelproj.com/api/search/searchEventAutocomplete";
            var api_commonRequestProcessRequest = "http://laravelproj.com/api/common_requests/processRequest";
            var recommendationsEnable="0";
        </script>
        <script src="https://static.meraevents.com/js/public/jQuery.min.js.gz?v=25"></script>        
                        <title>Book tickets online for music concerts, live shows and professional events. Be informed about upcoming events in India.</title> 
                <meta name="viewport" content="width=device-width,initial-scale=1.0">
                <meta name="apple-mobile-web-app-capable" content="yes">
                                    <meta name="description" http-equiv="description" content="MeraEvents.com is India's largest portal solely dedicated to Online Event promotions Upcoming Events Professional conferences Professional Events It offers many unique features.post your event and brand in front of a highly targeted audience with massive influence.">
                    <meta name="keywords" http-equiv="keywords" content="Current Events, Corporate Events Online Portals, Event Solutions, Event Management, Cultural, Event Management in Companies, Events, Meeting and Conferences, Special Event ticket booking, seminars, conferences, concert, upcoming events , today, weekend" />
                                    <meta name="author" content="MeraEvents" />
                    <meta name="rating" content="general" />          
<!--Twitter Card data-->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="MeraEvents.com">
<meta name="twitter:title" content="Book tickets online for music concerts, live shows and professional events. Be informed about upcoming events in India.">
<meta name="twitter:description" content="Buy tickets & passes online for upcoming events in All Cities, live concerts, and events happening in All Cities. Book latest events at MeraEvents.com">
<meta name="twitter:creator" content="MeraEvents">
<meta name="twitter:image" content="http://static.meraevents.com/images/static/me-logo-200.png">
<!-- Open Graph data -->
<meta property="og:title" content="Book tickets online for music concerts, live shows and professional events. Be informed about upcoming events in India." />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://laravelproj.com/" />
<meta property="og:image" content="http://static.meraevents.com/images/static/me-logo-200.png" />
<meta property="og:description" content="Buy tickets & passes online for upcoming events in All Cities, live concerts, and events happening in All Cities. Book latest events at MeraEvents.com" />
<meta property="og:site_name" content="MeraEvents.com" />
<meta property="fb:admins" content="125923692046" />
                <link rel="shortcut icon" href="https://static.meraevents.com/images/static/favicon.ico">
<link rel="stylesheet" type="text/css" href="https://static.meraevents.com/css/public/me_custom.min.css.gz?v=25">

                    <script type="text/javascript">
                    var defaultCountryId = '14';
                    var defaultCityName = 'All Cities';
                    var defaultCityId = '0';
                    var defaultSplCityStateId = '0';
                    var defaultSubCategoryId = '0';
                    var defaultSubCategoryName = 'All SubCategories';
                    var defaultCountryName = 'India';
                    var label_nomore_events = 'Please move on ';
                    var client_ajax_call_api_key = '930332c8a6bf5f0850bd49c1627ced2092631250';
                    var _paq=[];
                    var selectedSubcategoryId = '0';
                </script>
<!--truesemantic feedback form -->

                    <link rel="stylesheet" href="https://static.meraevents.com/css/public/jquery-ui.min.css.gz?v=25">

                </head>
                <body class="single-winner" ng-app=homeModule>
                    <div id="dvLoading" class="loadingopacity" style="display:none;"><img src="https://static.meraevents.com/images/static/loading.gif" class="loadingimg" /></div>
                    <div id="menudvLoading" class="menuloadingopacity" style="display:none;"><img src="https://static.meraevents.com/images/static/loading.gif" class="menuloadingimg" /></div>
                  
                                            <div class="site-container">
                        <!-- global header -->
                        <header class="site-header" role="banner">
                            <div class="site-header__wrap">
                                <div class="wrap">
                                    <div class="topContainer">
                                        <div role="navigation" class="navbar navbar-default">
                                            <div class="navbar-header">
                                                <button data-target=".navbar-collapse" id="nav-toggle2" data-toggle="collapse" class="navbar-toggle" type="button" onClick="getProfileLink('header');">
                                                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                                                </button>
                                                <a href="javascript:void(0)" id="settingsBtn" class=" onscroll ">
                                                    <span class="icon-set"></span>
                                                </a>
                                                <div class="logo_align">
                                                    <a class="navbar-brand logo" href="http://laravelproj.com/"> <img src="https://static.meraevents.com/images/static/me-logo.svg" alt="" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-group ddCustom selCountry">
                                                                                                        <a href="javascript:void(0)" class="btn headerDD">
                                                            <span class="status">
                                                                <span class="country-flag"><img src="https://static.meraevents.com/content/country/india_flag.png"></span>
                                                                <span class="country-code">IND</span>
                                                            </span>
                                                        </a>
                                                                                                        <ul class="dropdown-menu dropdown-inverse countryList  ddBG headerDD" id="countryMainHeaderDrpdwn" >
                                                                                                            <li onClick="setCookieCustom('countryId', '14', '2592000')" value="14">
                                                            <a href="javascript:void(0);">
                                                                   <span class="country-flag">
                                                                       <img src="https://static.meraevents.com/content/country/india_flag.png">
                                                                   </span>
                                                                <span class="country-code">IND</span>
                                                            </a></li>
                                                                                                                <li onClick="setCookieCustom('countryId', '18', '2592000')" value="18">
                                                            <a href="javascript:void(0);">
                                                                   <span class="country-flag">
                                                                       <img src="https://static.meraevents.com/content/country/sin-flag1485212972.png">
                                                                   </span>
                                                                <span class="country-code">SGP</span>
                                                            </a></li>
                                                                                                                <li onClick="setCookieCustom('countryId', '137', '2592000')" value="137">
                                                            <a href="javascript:void(0);">
                                                                   <span class="country-flag">
                                                                       <img src="https://static.meraevents.com/content/country/malaysia-icon14834386341485213300.png">
                                                                   </span>
                                                                <span class="country-code">MYS</span>
                                                            </a></li>
                                                                                                                <li onClick="setCookieCustom('countryId', '264', '2592000')" value="264">
                                                            <a href="javascript:void(0);">
                                                                   <span class="country-flag">
                                                                       <img src="https://static.meraevents.com/content/country/usa-flag1499954221.png">
                                                                   </span>
                                                                <span class="country-code">USA</span>
                                                            </a></li>
                                                                                                        </ul>
                                                <a data-toggle="dropdown" type="button" class="btn  btn-lg btn-sm btn-md dropdown-toggle"> 
                                                    <span class="icon-downArrow"></span>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 mobileNavSelector">
                                                <ul>
                                                    <li class="col-xs-4"><a href="javascript:void(0)">hyd</a></li>
                                                    <li class="col-xs-4"><a href="javascript:void(0)">All</a></li>
                                                    <li class="col-xs-4"><a href="javascript:void(0)">Today</a></li>
                                                </ul>
                                            </div>
                                            <div class="navbar-collapse collapse" aria-expanded="false" style="height: 0px;"> 
                                             
                                                <ul class="nav navbar-nav navbar-right">
                                                <!--<li class="toppromobanner"><a href="http://laravelproj.com/holi" target="_blank"><img src="https://static.meraevents.com/images/static/top-promo-holi-banner.gif" style="width: 350px; border-radius: 0;"></a></li>-->
                                                                                                                                                                        <li class="off"><a href="http://laravelproj.com/login" target="_self">Log In</a></li>
                                                                                                                                                                <li class="dropdown">
                                                        <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Help<span class="icon-downArrow"></span></a>
                                                        <ul style="margin-top: 24px;" role="menu" class="dropdown-menu">
                                                            <li><a id="printTicket" href='http://laravelproj.com/printpass/' target='_blank'>Print Tickets</a></li>
                                                            <li><a href="http://laravelproj.com/pricing" target='_blank'>Pricing</a></li>
                                                            <li><a href="http://support.meraevents.com/anonymous_requests/new" target='_blank'>Support</a></li>
                                                        </ul></li>
                                                        <li class="off"><a class="btn btn-default pinkColor colorWhite" href="http://laravelproj.com/dashboard/event/create/">Create Event</a></li>                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>

<!--important-->
<div ng-controller="filterController">
<div class="page-container" >
	<div class="wrap">
		<div class="container HomeContainer">
			<!-- Main component for a primary marketing message or call to action -->
			<div class="search-container searchABC">
				<input class="search form-control searchExpand icon-me_search"
					   id="searchId" type="search"
					   placeholder="Search by Event Name , Event ID , Kyey Words">
<a class="search icon-me_search"></a>
			</div>
                        <!-- Start of top filter   - D -->
<div id="locationContainer" class="locSearchContainer"  >
<span class="hiddenfilter-lg hiddenfilter-md hiddenfilter-sm">Filters</span><span class="CloseFilter">
<img src="https://static.meraevents.com/images/static/icon-check.png">
</span>
<a class="btn collapsed city collapse_bt hiddenfilter-lg hiddenfilter-md hiddenfilter-sm"
 href="#headerDD" aria-expanded="false" aria-controls="collapseOne"  ng-click="getEventCount('','city')" ng-init="defaultFilter()"> <span class="icon_city hiddenfilter-lg hiddenfilter-md"></span><span  id="selectedCity"  class="cityClass" >All Cities</span>
<span class="icon-downArrowH"></span>
</a>
<div class="SearchFilter_Holder hiddenfilter-xs hiddenfilter-md "   >
You are in  <a class="btn collapsed city collapse_bt" href="#headerDD" aria-expanded="false" aria-controls="collapseOne" ng-click="getEventCount('','city')" ng-init="defaultFilter()"><span  id="selectedCity"  class="cityClass" >India</span>
<span class="icon-downArrowH"></span>
</a> looking for <a class="btn collapsed categories collapse_bt" href="#headerDD1" aria-expanded="false"
 aria-controls="collapseTwo" ng-click="getEventCount('','category')" ng-init="selectedCategoryId=0"  ><span class="categoryClass"  >All</span> <span class="icon-downArrowH"></span></a>
events happening <a class="btn time collapsed collapse_bt"
 href="#headerDD2" aria-expanded="false"
 aria-controls="collapseThree" ng-init="selectedCustomFilterId=6 ; selectedCustomFilterName='all time'" ng-click="getEventCount('','customFilter')"><span   class="CustomFilterClass"    >all time</span> <span
 class="icon-downArrowH"></span></a><span id="resetInput"  ng-click="reset()" class="icon-refresh"></span>
</div>
<a class="btn collapsed categories collapse_bt hiddenfilter-lg hiddenfilter-md hiddenfilter-sm"
  href="#headerDD1" aria-expanded="false"
  aria-controls="collapseTwo" ng-click="getEventCount('','category')" ng-init="selectedCategoryId=0"  ><span class="icon_cat hiddenfilter-lg hiddenfilter-md"></span><span class="categoryClass"  >All Categories</span> <span class="icon-downArrowH"></span></a>
<a class="btn time collapsed collapse_bt hiddenfilter-lg hiddenfilter-md hiddenfilter-sm"
  href="#headerDD2" aria-expanded="false"
  aria-controls="collapseThree" ng-init="selectedCustomFilterId=6 ; selectedCustomFilterName='all time'" ng-click="getEventCount('','customFilter')"><span class="icon_date hiddenfilter-lg hiddenfilter-md"> </span><span   class="CustomFilterClass"    >all time</span>
<span class="icon-downArrowH"></span></a>
<div class="filterdiv hiddenfilter-lg hiddenfilter-md  city-search-list" id="headerDD" style="width: 100%;">  
<div class="accTextCont cityList">
<span class="floatR locSearchContainer  btnClass"><a
  href="javascript:void(0)" class="btn"><img
  src="https://static.meraevents.com/images/static/close-icon.png"></a> </span>

<div angucomplete-alt id="ex5" 
 placeholder="Enter Your City" 
 pause="1" selected-object="citySelected" 
 remote-url="/api/city/list" remote-url-request-formatter="remoteRequestCity" 
 remote-url-data-field="response.cityList" title-field="name" 
 input-class="form-control form-control-small" match-class="highlight" 
 input-changed="cityChanged">
</div>
<div class="clearBoth"></div>
</div>
</div>
<div class="filterdiv hiddenfilter-sm hiddenfilter-xs  city-search-list" id="headerDD" style="width: 100%;">    
<div class="accTextCont cityList">
<span class="floatR locSearchContainer  btnClass"><a
  href="javascript:void(0)" class="btn"><img
  src="https://static.meraevents.com/images/static/close-icon.png"></a> </span>

<div angucomplete-alt id="ex5" 
 placeholder="Enter Your City" 
 pause="1" selected-object="citySelected" 
 remote-url="/api/city/list" remote-url-request-formatter="remoteRequestCity" 
 remote-url-data-field="response.cityList" title-field="name" 
 input-class="form-control form-control-small" match-class="highlight" 
 input-changed="cityChanged">
</div>
<div class="clearBoth"></div>
</div>
</div> 

<div class="filterdiv hiddenfilter-lg hiddenfilter-md category-search-list" id="headerDD1" style="width: 100%; margin-bottom : 150px;">
<div class="accTextCont categoryList">
<span class="floatR locSearchContainer btnClass"> <a
 href="javascript:void(0)" class="btn"><img
 src="https://static.meraevents.com/images/static/close-icon.png"></a>
</span>
<div class="clearBoth"></div>
</div>
<div class="filterdiv" id="showMOre"
 style="border-bottom: 1px solid #EBEBEB;">
 <div class="showMoreCat">
<div class="clearBoth"></div>
</div>
</div>
</div>
<div class="filterdiv hiddenfilter-sm hiddenfilter-xs category-search-list" id="headerDD1" style="width: 100%;">
<div class="accTextCont categoryList">
<span class="floatR locSearchContainer btnClass"> <a
 href="javascript:void(0)" class="btn"><img
 src="https://static.meraevents.com/images/static/close-icon.png"></a>
</span>
<div class="clearBoth"></div>
</div>
<div class="filterdiv" id="showMOre"
 style="border-bottom: 1px solid #EBEBEB;">
<div class="showMoreCat">

<div class="clearBoth"></div>
</div>
</div>
</div>  
<div class="filterdiv search-timelist" id="headerDD2" style="width: 100%;">
<div class="accTextCont timeList">
<span class="floatR locSearchContainer btnClass hiddenfilter-xs">
<a href="javascript:void(0)" class="btn">
<img src="https://static.meraevents.com/images/static/close-icon.png">
</a>
</span>
<div class="clearBoth"></div>
</div>
</div>
</div>
<!-- End of top filter   - D -->			<!--carousal-->
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
<div class="item active">
<a target="_self" href="https://www.meraevents.com/event/tedxhyderabad-2017"><img src="https://static.meraevents.com/content/images/banners/tedx-hyderabad1501060116.png" width="1280" height="370" alt="TEDxHyderabad 2017" title="TEDxHyderabad 2017" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="https://www.meraevents.com/event/agritex-2017"><img src="https://static.meraevents.com/content/images/banners/Agritex-Conferece2017Banner11499841319.png" width="1280" height="370" alt="Agritex 2017 India" title="Agritex 2017 India" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="https://www.meraevents.com/event/nlp-practitioner-certification-program-nwy?ucode=organizer"><img src="https://static.meraevents.com/content/images/banners/Sept-Banner1499748788YJHSo1500011945.jpg" width="1280" height="370" alt="NLP Practitioner Certification Program" title="NLP Practitioner Certification Program" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="http://laravelproj.com/event/young-india-challenge-yic-2017-mumbai"><img src="https://static.meraevents.com/content/images/banners/young1489577511.png" width="1280" height="370" alt="Young India Challenge (YIC) 2017 - Mumbai" title="Young India Challenge (YIC) 2017 - Mumbai" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="https://www.meraevents.com/event/corporate-badminton-championship"><img src="https://static.meraevents.com/content/images/banners/Gamepoint1502879904.jpeg" width="1280" height="370" alt="Netplay-PPSM Corporate Badminton Championship" title="Netplay-PPSM Corporate Badminton Championship" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="http://laravelproj.com/event/tedxbangalore-2017-unbreakable"><img src="https://static.meraevents.com/content/images/banners/yy11499857823LMjXS1499858954.jpg" width="1280" height="370" alt="TEDxBangalore 2017 - UNBREAKABLE" title="TEDxBangalore 2017 - UNBREAKABLE" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="https://www.meraevents.com/event/the-aeonian-2017-startup-expo-pitch-conf-awards?ucode=organizer"><img src="https://static.meraevents.com/content/images/banners/banner1502266426sxVQc1502368681.jpg" width="1280" height="370" alt="https://www.meraevents.com/event/the-aeonian-2017-" title="https://www.meraevents.com/event/the-aeonian-2017-" /></a>
<div class="carousel-caption">
</div>
</div>
	
</div>
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="icon-prevArrow" aria-hidden="true"></span></a> 											  
<a class="right carousel-control" 																						href="#carousel-example-generic" role="button" data-slide="next">
<span class="icon-nextArrow" aria-hidden="true"></span>
</a>
                        </div>
			<!--EO carousal-->
			<div class="clearfix"></div>
			<div class="row">
				<h3 class="subHeadingFont" id="eventCaption" >
					<span>Upcoming Events </span>
				</h3>
				<div id="selectedFilter" class="hidden-lg hidden-md hidden-sm row">
					<div class="tags filterCity col-xs-4"><span class="pull-right">X</span>Bengaluru </div>
					<div class="tags filterCat col-xs-4"><span class="pull-right">X</span>Professional </div>
					<div class="tags filterDate col-xs-4"><span class="pull-right">X</span> Tomorrow </div>
				</div>
				 <ul id="eventThumbs" class="eventThumbs">
                                                                        <script type="text/javascript">
var dashboard_eventhome="http://laravelproj.com/dashboard/home/";
var add_bookmark = "http://laravelproj.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://laravelproj.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("643");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_101655"  itemscope itemtype="http://schema.org/Event">
<a href="http://laravelproj.com/event/world-congress-on-drug-discovery-and-development-summit-2017" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/101655/DrugDiscovery-Thumb1492584022YNgzD.png" width="" height=""
alt="World Congress on Drug Discovery and Development Summit - 2017" title="World Congress on Drug Discovery and Development Summit - 2017"  onError="this.src='https://static.meraevents.com/content/categorylogo/training-thumbnail1455801654.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">World Congress on Drug Discovery and Development Summit - 2017</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-09-20 21:00:00">September 20, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Kolkata</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://laravelproj.com/event/world-congress-on-drug-discovery-and-development-summit-2017" class="category">
<span class="mecat-training coltraining"></span> <span
class="catName"><em>Training</em></span>
</a>
<span   event_id="101655"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://laravelproj.com/dashboard/home/";
var add_bookmark = "http://laravelproj.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://laravelproj.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("643");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_131648"  itemscope itemtype="http://schema.org/Event">
<a href="http://laravelproj.com/event/national-achievers-conference-sep-2017" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/131648/thumbanil-1316481502262009lqxTt.jpg" width="" height=""
alt="SUCCESS ATTRACTION SUMMIT - Sep 2017 " title="SUCCESS ATTRACTION SUMMIT - Sep 2017 "  onError="this.src='https://static.meraevents.com/content/categorylogo/training-thumbnail1455801654.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">SUCCESS ATTRACTION SUMMIT - Sep 2017 </span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-09-03 08:30:00">September 03, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Chennai</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://laravelproj.com/event/national-achievers-conference-sep-2017" class="category">
<span class="mecat-training coltraining"></span> <span
class="catName"><em>Training</em></span>
</a>
<span   event_id="131648"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://laravelproj.com/dashboard/home/";
var add_bookmark = "http://laravelproj.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://laravelproj.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("643");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_136929"  itemscope itemtype="http://schema.org/Event">
<a href="http://laravelproj.com/event/the-run-drops" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/136929/TRD_FB_event_dp_170x170_F1501049563957fi.png" width="" height=""
alt="The RUN Drops" title="The RUN Drops"  onError="this.src='https://static.meraevents.com/content/categorylogo/Sports1455567557.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">The RUN Drops</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-09-10 05:30:00">September 10, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Pune</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://laravelproj.com/event/the-run-drops" class="category">
<span class="mecat-sports colsports"></span> <span
class="catName"><em>Sports</em></span>
</a>
<span   event_id="136929"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://laravelproj.com/dashboard/home/";
var add_bookmark = "http://laravelproj.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://laravelproj.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("643");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_135993"  itemscope itemtype="http://schema.org/Event">
<a href="http://laravelproj.com/event/nlp-practitioner-certification-program-nwy" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/135993/NLP-Practitioner-Certification-Program1500021981Zg0o1.png" width="" height=""
alt="NLP Practitioner Certification Program " title="NLP Practitioner Certification Program "  onError="this.src='https://static.meraevents.com/content/categorylogo/Professional1455800570.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">NLP Practitioner Certification Program </span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-09-16 09:00:00">September 16, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Bengaluru</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://laravelproj.com/event/nlp-practitioner-certification-program-nwy" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="135993"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://laravelproj.com/dashboard/home/";
var add_bookmark = "http://laravelproj.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://laravelproj.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("643");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_134393"  itemscope itemtype="http://schema.org/Event">
<a href="http://laravelproj.com/event/yourstory-techsparks-2017" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/134393/Ticketing-platform-banners_weekend-06150124824016yZV.png" width="" height=""
alt="YourStory - TechSparks 2017" title="YourStory - TechSparks 2017"  onError="this.src='https://static.meraevents.com/content/categorylogo/Professional1455800570.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">YourStory - TechSparks 2017</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-09-22 09:00:00">September 22, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Bengaluru</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://laravelproj.com/event/yourstory-techsparks-2017" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="134393"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://laravelproj.com/dashboard/home/";
var add_bookmark = "http://laravelproj.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://laravelproj.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("643");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_131085"  itemscope itemtype="http://schema.org/Event">
<a href="http://laravelproj.com/event/tedxhyderabad-2017" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/131085/Meraevents_DP-011494258421bAauj.png" width="" height=""
alt="TEDxHyderabad 2017" title="TEDxHyderabad 2017"  onError="this.src='https://static.meraevents.com/content/categorylogo/Professional1455800570.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">TEDxHyderabad 2017</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-09-24 08:00:00">September 24, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Hyderabad</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://laravelproj.com/event/tedxhyderabad-2017" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="131085"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://laravelproj.com/dashboard/home/";
var add_bookmark = "http://laravelproj.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://laravelproj.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("643");
</script>


                                	
                                   </ul>   
                                <div id="noRecords"></div>
				<div class="clearBoth"></div>
                                <div class="alignCenter" style="position: relative;">
					<a ng-click="getMoreEvents()" id="viewMoreEvents"
					   class="btn btn-primary borderGrey collapsed"
					   data-wipe="View More Events" style="position: relative; display:inline-block"
					   data-toggle="collapse" href="#popularEvents"
					   aria-expanded="false" aria-controls="popularEvents">
						More Events </a>
				</div>
                                <div id="noMoreEvents" style="position: relative;  text-align: center;display: none;"  >
						<a id="returnToTop" href="javascript:;"
						   style="font-size: 20px;  font-weight: normal;" style="display:block">Please return to top</a>
					</div>
									   <input type="hidden" id="currentPage" value="2">
                                        <input type="hidden" id="currentLimit" value="12">
			</div>
		</div>
		<!--Eventa happening-->
<div class="container eventsHappening">
<p id="totalCount" class="totalCount">643</p>
<div class="clearBoth"></div>
<br>
<div class="alignCenter">
<div class="collapse" id="viewMore" aria-expanded="false">
<div class="showMoreCat">
<div class="clearBoth"></div>
</div>
</div>
<a id="viewMoreCat" ng-click = "viewMoreSubcategories()" class="btn btn-primary borderGrey collapsed"
 style="position: relative" data-toggle="collapse"
 href="#viewMore" aria-expanded="false" aria-controls="viewMore">
View more </a>
</div>
</div>
</div>		 <div id="bottomBanner" class="container well" >
             
                        </div>
            </div>
		<!--Create Event-->
		<div class="container-fluid bgRed colorWhite createEvent">
			<h3>host your event and turn your passion into business</h3>
			<div class="alignCenter">
				<!--<button class="btn btn-primary borderWhite">create event now</button>-->
				<a href="http://laravelproj.com/dashboard/event/create/" class="btn btn-success borderWhite"
				   data-wipe="create event now" style="position: relative">
					create event </a>
			</div>
		</div>
		<!--EO Create Event -->
		<!-- blog -->
        <div class="container blogContainer">
</div>		<!-- EO blog-->
        
                
</div>
                        <!-- on scroll code-->
<div class="onScrollContainer"  >
<div class="topContainer">
<div class="wrap">
<div class="onScrollContainer__container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
</button>
<div class="logo_align">
<a class="navbar-brand onScrollContainer__site-logo" href="http://laravelproj.com/">
<img src="https://static.meraevents.com/images/static/me-logo.svg" alt="" />
</a>
</div>
</div>
<div class="btn-group ddCustom selCountry countryhome">
<a class="btn headerDD" href="javascript:void(0)">
<span class="status">
<span class="country-flag"><img src="https://static.meraevents.com/content/country/india_flag.png"></span>
<span class="country-code">IND</span>
</span>
</a>
<!--append class "ddBG" if you wnat bg color-->
<ul class="dropdown-menu menu dropdown-inverse countryList ddBG headerDD" >
<li onclick="setCookieCustom('countryId', '14', '2592000')" value="14">
<a href="javascript:void(0);"> 
<span class="country-flag">
<img src="https://static.meraevents.com/content/country/india_flag.png">
</span>
<span class="country-code">IND</span>
</a>
</li>
<li onclick="setCookieCustom('countryId', '18', '2592000')" value="18">
<a href="javascript:void(0);"> 
<span class="country-flag">
<img src="https://static.meraevents.com/content/country/sin-flag1485212972.png">
</span>
<span class="country-code">SGP</span>
</a>
</li>
<li onclick="setCookieCustom('countryId', '137', '2592000')" value="137">
<a href="javascript:void(0);"> 
<span class="country-flag">
<img src="https://static.meraevents.com/content/country/malaysia-icon14834386341485213300.png">
</span>
<span class="country-code">MYS</span>
</a>
</li>
<li onclick="setCookieCustom('countryId', '264', '2592000')" value="264">
<a href="javascript:void(0);"> 
<span class="country-flag">
<img src="https://static.meraevents.com/content/country/usa-flag1499954221.png">
</span>
<span class="country-code">USA</span>
</a>
</li>
</ul> 
<a class="btn  btn-lg btn-sm btn-md dropdown-toggle" type="button" data-toggle="dropdown">
<span class="icon-downArrow"></span>
</a>
</div>
<div class="locSearchContainer filterScrollSearch">
You are in  <a class="btn collapsed city collapse_bt"
 href="#headerDD3" aria-expanded="false"
 aria-controls="collapseOne" ng-click="getEventCount('','city')" ng-init="defaultFilter()" > <span class="cityClass" >India</span> <span
 class="icon-downArrowH"></span></a> looking for <a
 class="btn collapsed categories collapse_bt" href="#headerDD4"
 aria-expanded="false" aria-controls="collapseTwo" ng-click="getEventCount('','category')" ng-init="selectedCategoryId=0"  ><span class="categoryClass"  >All</span> <span
 class="icon-downArrowH"></span></a> events happening
 <a class="btn time collapsed collapse_bt" href="#headerDD5"
  aria-expanded="false" aria-controls="collapseThree"
  ng-init="selectedCustomFilterId=6; selectedCustomFilterName='all time'"
  ng-click="getEventCount('','customFilter')">
<span class="CustomFilterClass" >all time</span>
<span class="icon-downArrowH"></span>
</a>
<span id="resetInput"  ng-click="reset()" class="icon-refresh resetInput" ></span>
<div class="filterdiv" id="headerDD3">
<div class="accTextCont cityList">
<span class="close_icon"><a href="javascript:void(0)" class="btn"><img src="https://static.meraevents.com/images/static/close-icon.png"></a> </span>
<div angucomplete-alt id="ex5" 
 placeholder="Enter Your City" 
 pause="1" selected-object="citySelected" 
 remote-url="/api/city/list" remote-url-request-formatter="remoteRequestCity" 
 remote-url-data-field="response.cityList" title-field="name" 
 input-class="form-control form-control-small" match-class="highlight" 
 input-changed="cityChanged">
</div>
<div class="clearBoth"></div>
</div>
</div>
<div class="filterdiv" id="headerDD4">
<div class="accTextCont categoryList">
<span class="close_icon"> <a href="javascript:void(0)" class="btn"> <img src="https://static.meraevents.com/images/static/close-icon.png"></a></span>

<div class="clearBoth"></div>
</div>
<div class="filterdiv" id="showMOre1"
 style="border-bottom: 1px solid #EBEBEB;">
<div class="showMoreCat">
<div class="clearBoth"></div>
</div>
</div>
</div>
<div class="filterdiv" id="headerDD5" style="width: 100%;">
<div class="accTextCont timeList">
<span class="close_icon"> <a href="javascript:void(0)" class="btn"><img src="https://static.meraevents.com/images/static/close-icon.png"></a></span>
<div class="clearBoth"></div>
</div>
</div>
</div>
<div class="search-container">
<input class="search form-control searchExpand icon-me_search"
 type="search" id="searchId" placeholder="Hi there! Let's search events"> <a
 class="search icon-me_search"></a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle"
data-toggle="dropdown" role="button" aria-expanded="false"
 id="nav-toggle">
<span class="icon-set"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li><a href="javascript:void(0);"><span class="icon2-question-circle"></span>Help</a></li>
<li><a href='http://laravelproj.com/dashboard/event/create/'><span class='icon2-pencil'></span> Create Event</a></li><li><a href='http://laravelproj.com/login' target='_self'><span class='icon2-sign-in' ></span> Login</a></li></ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- END OF  on scroll code-->				</div>
			</div>
<!-- Modal -->
<script>
   var api_commonRequestProcessRequest = "http://laravelproj.com/api/common_requests/processRequest";
   var api_subcategoryEventsCount = "http://laravelproj.com/api/subcategory/eventsCount";
   var api_cityEventsCount = "http://laravelproj.com/api/city/eventCount";
   var api_categoryEventsCount = "http://laravelproj.com/api/category/eventCount";
   var api_filterEventsCount = "http://laravelproj.com/api/filter/eventCount";
   var api_categorycityEventsCount = "http://laravelproj.com/api/category/cityEventsCount";
   var api_subcategorycityEventsCount = "http://laravelproj.com/api/subcategory/cityEventsCount";
   var api_bannerList = "http://laravelproj.com/api/banner/list";
   var api_eventList = "http://laravelproj.com/api/event/list";
   var api_blogBloglist = "http://laravelproj.com/api/blog/blogList";
   var api_catgBlogData = "http://laravelproj.com/dashboard";
</script><footer>
	<div class="container ftr_container">
		<nav class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<ul class="col-md-3 col-sm-4 col-xs-3 col-lg-3">
                            <li><a href="javascript:void(0)"><h4>Categories</h4></a></li>
                                              <li value="1">
                    <a class="footerCategorySearch" id="1"  href ="http://laravelproj.com/entertainment" >Entertainment</a>
                </li>
                               <li value="2">
                    <a class="footerCategorySearch" id="2"  href ="http://laravelproj.com/professional" >Professional</a>
                </li>
                               <li value="9">
                    <a class="footerCategorySearch" id="9"  href ="http://laravelproj.com/sports" >Sports</a>
                </li>
                               <li value="3">
                    <a class="footerCategorySearch" id="3"  href ="http://laravelproj.com/training" >Training</a>
                </li>
                               <li value="5">
                    <a class="footerCategorySearch" id="5"  href ="http://laravelproj.com/spiritual" >Spiritual</a>
                </li>
                               <li value="4">
                    <a class="footerCategorySearch" id="4"  href ="http://laravelproj.com/campus" >Campus</a>
                </li>
                               <li value="6">
                    <a class="footerCategorySearch" id="6"  href ="http://laravelproj.com/trade-shows" >Trade Shows</a>
                </li>
                               <li value="14">
                    <a class="footerCategorySearch" id="14"  href ="http://laravelproj.com/activities" >Activities</a>
                </li>
                               <!-- <li class="bugbounty_img"><a href="<?php// echo $bugBountyLink; ?>" target="_blank"><img src="<?php//  echo $imgStaticPath; ?>bugbounty.png"></a></li> -->
			</ul>
			<ul class="col-md-3 col-sm-4 col-xs-3 col-lg-3">
				<li><a href="javascript:void(0)">
					<h4>Services</h4>
				</a></li>
				<li><a href="http://laravelproj.com/eventregistration">Free Events Registration</a></li>
				<li><a href="http://laravelproj.com/selltickets">Sell Tickets Online</a></li>
				<li><a href="http://laravelproj.com/dashboard/event/create/">Create Event</a></li>
				<!--<li><a href="discount.html">Discount</a></li> -->
				<li><a id="eventFind" href="http://laravelproj.com/search">Find Event</a></li>
				<li><a href="http://laravelproj.com/pricing" target="_blank">Fees & Pricings</a></li>
                <!--
                <li><a href="http://laravelproj.com/apidevelopers" target="_blank">Developers</a></li>
				-->
				<li><a href="http://laravelproj.com/globalaffiliate/home" target="_blank">Global Affiliate Marketing</a></li>
                <li><a href="http://laravelproj.com/features" target="_blank">Organizer Features</a></li>
			</ul>
			<ul class="col-md-3 col-sm-4 col-xs-3 col-lg-3">
				<li><a href="javascript:void(0)">
					<h4>Need Help?</h4>
				</a></li>
				<li><a href="http://laravelproj.com/aboutus">About Us</a></li>
<!--				<li><a href="<?php// echo $footerCareerLink; ?>">Careers</a></li>-->
				<li><a href="http://blog.meraevents.com/" target="_blank">Blog</a></li>
				<li><a href="http://laravelproj.com/faq">FAQs</a></li>
<!--				<li><a href="http://laravelproj.com/apidevelopers">Developers</a></li>  This link's href needs to be changed after developing api developer page - Sai Sudheer-->
				<li><a href="http://laravelproj.com/news">News</a></li>
				<li><a href="http://laravelproj.com/mediakit">Media Kit</a></li>
<!--				<li><a href="">Client's Feedback</a></li>-->
				<li><a href="http://laravelproj.com/terms" target="_blank">Terms of use</a></li>
				<li><a href="http://laravelproj.com/privacypolicy" target="_blank">Privacy Policy</a></li>
				<li><a href="http://laravelproj.com/mesitemap">Site Map</a></li>
<!--				<li><a href="">Team</a></li>-->
			</ul>
			<ul class="col-md-3 col-sm-4 col-xs-3 col-lg-3">
				<li><a href="javascript:void(0)"><h4>Products</h4></a></li>
                <li><a href="http://www.planica.in/" target="_blank">planica</a></li>
				<li><a href="http://www.moozup.com/" target="_blank">moozup</a></li>
                <li><a href="http://www.easytag.in/" target="_blank">EasyTag</a></li>
            </ul>
		</nav>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mobileVer">
			<ul>
				<li><a href="http://laravelproj.com/aboutus">About Us</a></li>
				<li><a href="http://blog.meraevents.com/" target="_blank">Blog</a></li>
				<li><a href="http://laravelproj.com/faq">Help</a></li>
<!--				<li><a href="">Careers</a></li>-->
				<!--<li><a href="discount.html">Discount</a></li>-->
				<!-- <li><a href="" target="_blank">Support</a></li> -->
				<li><a href="http://laravelproj.com/support" target="_blank">Support</a></li>
				<li><a href="http://laravelproj.com/printpass/">Print Ticket</a></li>
				<li><a href="http://laravelproj.com/globalaffiliate/home" target="_blank">Global Affiliate Marketing</a></li>
                <li><a href="http://laravelproj.com/features" target="_blank">Organizer Features</a></li>
			</ul>
			<ul>
<!--				<li><a href="#">Privacy</a></li>-->
				<li><a href="http://laravelproj.com/faq">FAQs</a></li>
				<li><a href="http://laravelproj.com/pricing">Pricing</a></li>
				<li><a href="http://laravelproj.com/news">News & Press</a></li>
				<li><a href="http://laravelproj.com/terms">Terms of Use</a></li>
				<li><a href="http://laravelproj.com/privacypolicy">Privacy Policy</a></li>
				<li><a href="http://laravelproj.com/mesitemap">Site Map</a></li>
<!--				<li><a href="">Clients Feedback</a></li>-->
				<!-- <li><a href="http://laravelproj.com/bugbounty" target="_blank">Bug Bounty Program</a></li> -->
			</ul>
			<ul>
				<li><a href="http://www.planica.in/" target="_blank">planica</a></li>
				<li><a href="http://www.moozup.com/" target="_blank">moozup</a></li>
                <li><a href="http://www.easytag.in/" target="_blank">EasyTag</a></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerRight">
		<div class="row">
				<h4>Follow Us</h4>
				<ul>
                     <li><a href="http://www.facebook.com/meraevents" target="_blank" class="icon-fb fb" ></a></li>
					<li><a href="http://twitter.com/#!/meraeventsindia" target="_blank" class="icon-tweet tweet" ></a></li>
					<li><a href="https://www.linkedin.com/company/meraevents" target="_blank" class="icon-in in"></a></li>
					<li>  <a href="https://plus.google.com/114189418356737609354/about" target="_blank" class="icon-google google" ></a></li>
				</ul>
			</div>
			<!--<div class="row socialIcons">
				<h4>Get Weekly Updates On Events</h4>
                                <form action="https://meraevents.us12.list-manage.com/subscribe/post?u=f96a2420628d423aab0d3cbaa&amp;id=e85e25c728" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <span class="icon-nextArrow" style="top:68% !important;" onclick="document.getElementById('mc-embedded-subscribe-form').submit()"></span> 
                                    <input type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Email ID" class="form-control require email">
                                </form>
			</div>-->
			<div class="row" style="margin-top:20px;">	
				<p><!-- <i class="icon2-phone"></i> --> <a href="http://laravelproj.com/support" target="_blank" style="font-size:18px; color:#fff;padding:5px 10px;">@ Contact Us</a></p>			 
				<!-- <p style="font-size:18px; color:#fff;padding:5px 10px;"><i class="icon2-phone"></i> +91-9396555888  (Mon-Sun 10AM to 7PM)</p>			 
				<p style="font-size:18px; color:#fff;padding:5px 10px;"><i class="icon2-envelope-o"></i> <a href="mailto:support@meraevents.com">support@meraevents.com</a></p> -->
			</div>
		</div>
	</div>
	<div class="container" id="FooterCategories">
		<div class="col-lg-12 col-md-12 col-sm-12 f-padd">
		<div class="footercat-links col-lg-12 col-md-12 col-sm-4 col-xs-4">
			<ul class="footerlinks-list">
				<li class="footercat-heading">Cities <span class="f-sep">:</span> </li>
                                                                    <li>
                                        <a id="14" href="http://laravelproj.com/mumbai-events">Mumbai</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="37" href="http://laravelproj.com/bengaluru-events">Bengaluru</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="38" href="http://laravelproj.com/delhi-ncr-events">Delhi-NCR</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="39" href="http://laravelproj.com/chennai-events">Chennai</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="40" href="http://laravelproj.com/ahmedabad-events">Ahmedabad</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="41" href="http://laravelproj.com/jaipur-events">Jaipur</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="42" href="http://laravelproj.com/kolkata-events">Kolkata</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="47" href="http://laravelproj.com/hyderabad-events">Hyderabad</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="77" href="http://laravelproj.com/pune-events">Pune</a>
                                                                                 <span class="f-sep">|</span>
                                                                      </li>
                                                                    <li>
                                        <a id="1231" href="http://laravelproj.com/goa-events">Goa</a>
                                                                            </li>
                                			</ul>
		</div>
		</div>
	</div>
	<p class="text-center" style="color:#7e7e7e;"><span>&copy; 2009-2017, Copyright @ Versant Online Solutions. All Rights Reserved</span></p>
</footer>
<script>
var api_commonrequestsUpdateCookie = "http://laravelproj.com/api/common_requests/updateCookie";
 </script>
<script>
    var wizrocket_id = 'ZW9-8K4-ZZ4Z';
    var wizrocket = {event:[], profile:[], account:[]};
    wizrocket.account.push({"id": wizrocket_id});
    (function () {
        var wzrk = document.createElement('script');
        wzrk.type = 'text/javascript';
        wzrk.async = true;
        wzrk.src = ('https:' == document.location.protocol ? 'https://d2r1yp2w7bby2u.cloudfront.net' : 'http://static.clevertap.com') + '/js/a.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wzrk, s);
    })();
   // wizrocket.event.push("user registered", {"Event Name":"'my event'","Event Category":"Professional" });
</script>
	<script src="https://static.meraevents.com/js/angular/angular.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/public/combined.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/public/common.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/angular/user/homeModule.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/angular/user/controllers/homeControllers.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/angular/user/filters/homeFilters.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/angular/user/directives/homeDirectives.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/angular/common/commonModule.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/angular/autocomplete/angucomplete-alt.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/public/jquery.validate.min.js.gz?v=25"></script>
<script src="https://static.meraevents.com/js/public/home.min.js.gz?v=25"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41640740-1', 'auto');
  ga('send', 'pageview');

</script> <!-- Start of Adroll Tag -->
<script type="text/javascript"> adroll_adv_id = "J5UVQXZLAJANJKXSVXWV6L"; adroll_pix_id = "3RHCKYLKVBEDBNEAG7BO63"; /* OPTIONAL: provide email to improve user identification */ /* adroll_email = "username@example.com"; */ (function () { var _onload = function(){ if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return} if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return} var scr = document.createElement("script"); var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com"); scr.setAttribute('async', 'true'); scr.type = "text/javascript"; scr.src = host + "/j/roundtrip.js"; ((document.getElementsByTagName('head') || [null])[0] || document.getElementsByTagName('script')[0].parentNode).appendChild(scr); }; if (window.addEventListener) {window.addEventListener('load', _onload, false);} else {window.attachEvent('onload', _onload)} }()); </script>
<!-- End of Adroll Tag -->

<!--removed old FB pixel code--><!-- <script type="text/javascript" >
    document.getElementById('dvLoading').style.display = 'none';
</script> -->
<!--Start of Zopim Live Chat Script--> 
<script type="text/javascript">
var Eventurl = "http://laravelproj.com/dashboard/event/create/";
var EventEditurl = "http://laravelproj.com/dashboard/event/edit/";
var winloc = window.location.href + "/";
if( winloc.indexOf(Eventurl) != -1|| winloc.indexOf(EventEditurl) != -1 ){
	loadtinyMce();
}
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?re1Tn1zzg8om9TaoaKDzgaN1esPgyzg7';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script> 
<!--End of Zopim Live Chat Script-->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"d9b9b3fee9","applicationID":"25939837","transactionName":"ZgAEYBQEV0RSVkVdC19KJ1cSDFZZHH1eWQEeDAhQAx0=","queueTime":0,"applicationTime":45,"atts":"SkcHFlweREo=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
