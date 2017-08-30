<?php

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script type="text/javascript">
            var site_url = '<?php echo url('/'); ?>';
            var https_url = '<?php echo url('/'); ?>';
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
                                                    <a class="navbar-brand logo" href="<?php echo url('/'); ?>"> <img src="https://static.meraevents.com/images/static/me-logo.svg" alt="" >
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
                                                <li class="off"><a href="{{url('login')}}" target="_self">Log In</a></li>
<!--                                                                                                                                                                <li class="dropdown">
                                                        <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Help<span class="icon-downArrow"></span></a>
                                                        <ul style="margin-top: 24px;" role="menu" class="dropdown-menu">
                                                            <li><a id="printTicket" href='http://www.meraevents.com/printpass/' target='_blank'>Print Tickets</a></li>
                                                            <li><a href="http://www.meraevents.com/pricing" target='_blank'>Pricing</a></li>
                                                            <li><a href="http://support.meraevents.com/anonymous_requests/new" target='_blank'>Support</a></li>
                                                        </ul></li>-->
                                                        <li class="off"><a class="btn btn-default pinkColor colorWhite" href="<?php echo url('event/create'); ?>">Create Event</a></li>                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>
         