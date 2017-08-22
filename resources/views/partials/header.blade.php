<?php

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1026.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
        <script type="text/javascript">
            var site_url = 'http://www.meraevents.com/';
            var https_url = 'https://www.meraevents.com/';
            var cookie_expiration_time = "2592000";
            var api_path = 'http://www.meraevents.com/api/';
            var images_static_path = 'https://static.meraevents.com/images/static/';
            var api_getProfileDropdown = "http://www.meraevents.com/api/user/getProfileDropdown";
			var uploadUrl ="http://www.meraevents.com/js/public/tinymce/plugins/jbimages/dialog-v4.php";
        </script>
        <script>
            var api_searchSearchEventAutocomplete = "http://www.meraevents.com/api/search/searchEventAutocomplete";
            var api_commonRequestProcessRequest = "http://www.meraevents.com/api/common_requests/processRequest";
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
                                                    <a class="navbar-brand logo" href="http://www.meraevents.com/"> <img src="https://static.meraevents.com/images/static/me-logo.svg" alt="" >
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
                                                <!--<li class="toppromobanner"><a href="http://www.meraevents.com/holi" target="_blank"><img src="https://static.meraevents.com/images/static/top-promo-holi-banner.gif" style="width: 350px; border-radius: 0;"></a></li>-->
                                                                                                                                                                        <li class="off"><a href="http://www.meraevents.com/login" target="_self">Log In</a></li>
                                                                                                                                                                <li class="dropdown">
                                                        <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Help<span class="icon-downArrow"></span></a>
                                                        <ul style="margin-top: 24px;" role="menu" class="dropdown-menu">
                                                            <li><a id="printTicket" href='http://www.meraevents.com/printpass/' target='_blank'>Print Tickets</a></li>
                                                            <li><a href="http://www.meraevents.com/pricing" target='_blank'>Pricing</a></li>
                                                            <li><a href="http://support.meraevents.com/anonymous_requests/new" target='_blank'>Support</a></li>
                                                        </ul></li>
                                                        <li class="off"><a class="btn btn-default pinkColor colorWhite" href="http://www.meraevents.com/dashboard/event/create/">Create Event</a></li>                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>
         