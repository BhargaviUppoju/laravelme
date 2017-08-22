<?php ?>

<div class="onScrollContainer"  >
<div class="topContainer">
<div class="wrap">
<div class="onScrollContainer__container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
</button>
<div class="logo_align">
<a class="navbar-brand onScrollContainer__site-logo" href="http://www.meraevents.com/">
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
<h6>top cities</h6>
<ul ng-init="init([{&quot;id&quot;:&quot;14&quot;,&quot;name&quot;:&quot;Mumbai&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;0&quot;,&quot;aliascityid&quot;:null},{&quot;id&quot;:&quot;37&quot;,&quot;name&quot;:&quot;Bengaluru&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;0&quot;,&quot;aliascityid&quot;:null},{&quot;id&quot;:&quot;38&quot;,&quot;name&quot;:&quot;Delhi-NCR&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;53&quot;,&quot;aliascityid&quot;:&quot;13073,409,23189,330,331,31472,383,1358,10124,324,350,1214,8982,1138,1224,581,408,32159,32160,32161,32162,32163,32164,32165,45717&quot;},{&quot;id&quot;:&quot;39&quot;,&quot;name&quot;:&quot;Chennai&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;0&quot;,&quot;aliascityid&quot;:null},{&quot;id&quot;:&quot;40&quot;,&quot;name&quot;:&quot;Ahmedabad&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;0&quot;,&quot;aliascityid&quot;:null},{&quot;id&quot;:&quot;41&quot;,&quot;name&quot;:&quot;Jaipur&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;0&quot;,&quot;aliascityid&quot;:null},{&quot;id&quot;:&quot;42&quot;,&quot;name&quot;:&quot;Kolkata&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;0&quot;,&quot;aliascityid&quot;:null},{&quot;id&quot;:&quot;47&quot;,&quot;name&quot;:&quot;Hyderabad&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;0&quot;,&quot;aliascityid&quot;:&quot;139,448,504&quot;},{&quot;id&quot;:&quot;77&quot;,&quot;name&quot;:&quot;Pune&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;0&quot;,&quot;aliascityid&quot;:null},{&quot;id&quot;:&quot;1231&quot;,&quot;name&quot;:&quot;Goa&quot;,&quot;order&quot;:&quot;1&quot;,&quot;countryid&quot;:&quot;14&quot;,&quot;splcitystateid&quot;:&quot;11&quot;,&quot;aliascityid&quot;:null}],'city')">
<li  ng-repeat="city in cityList | orderBy:'name'" id="{{city.id}}_scrollcity" ><a title="{{city.name}}" ng-click="setFilter('city',city.id,city.name, 0,city.splcitystateid)"  > <label ng-cloak>{{city.name}}
<span ng-cloak>{{city.eventCount}}</span></label></a></li>
<li><a  title="All Cities" ng-click="setFilter('city',0,'All Cities', 0,0)"> <label>All Cities  <span ng-cloak>{{allCityCount}}</span></label>
</a></li>                                                        
</ul>
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
<h6>top categories</h6>
<ul ng-init="init([{&quot;id&quot;:&quot;1&quot;,&quot;name&quot;:&quot;Entertainment&quot;,&quot;themecolor&quot;:&quot;#ba36a6&quot;,&quot;ticketsetting&quot;:&quot;single&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Entertainment1455567252.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Entertainment1455567253.jpg&quot;,&quot;value&quot;:&quot;entertainment&quot;,&quot;order&quot;:&quot;1&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/entertainment14473404211455567251.jpg&quot;},{&quot;id&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Professional&quot;,&quot;themecolor&quot;:&quot;#2ebcd1&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Professional1455800569.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Professional1455800570.jpg&quot;,&quot;value&quot;:&quot;professional&quot;,&quot;order&quot;:&quot;2&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/professional21455800569.jpg&quot;},{&quot;id&quot;:&quot;9&quot;,&quot;name&quot;:&quot;Sports&quot;,&quot;themecolor&quot;:&quot;#389155&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Sports1455567556.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Sports1455567557.jpg&quot;,&quot;value&quot;:&quot;sports&quot;,&quot;order&quot;:&quot;3&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/sports14473405641455567555.jpg&quot;},{&quot;id&quot;:&quot;3&quot;,&quot;name&quot;:&quot;Training&quot;,&quot;themecolor&quot;:&quot;#8c905e&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/training-banner1455801653.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/training-thumbnail1455801654.jpg&quot;,&quot;value&quot;:&quot;training&quot;,&quot;order&quot;:&quot;4&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/training1455801652.jpg&quot;},{&quot;id&quot;:&quot;5&quot;,&quot;name&quot;:&quot;Spiritual&quot;,&quot;themecolor&quot;:&quot;#f3b655&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Spiritual1455567391.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Spiritual1455567392.jpg&quot;,&quot;value&quot;:&quot;spiritual&quot;,&quot;order&quot;:&quot;5&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/spiritual14473404941455567391.jpg&quot;},{&quot;id&quot;:&quot;4&quot;,&quot;name&quot;:&quot;Campus&quot;,&quot;themecolor&quot;:&quot;#81568e&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/campus-banner1455567355.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/campus-thumbnail1455567356.jpg&quot;,&quot;value&quot;:&quot;campus&quot;,&quot;order&quot;:&quot;6&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/campus14473404781455567354.jpg&quot;},{&quot;id&quot;:&quot;6&quot;,&quot;name&quot;:&quot;Trade Shows&quot;,&quot;themecolor&quot;:&quot;#4b68ad&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/TradeShows1455567428.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/TradeShows1455567429.jpg&quot;,&quot;value&quot;:&quot;trade-shows&quot;,&quot;order&quot;:&quot;7&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/professional21455567427.jpg&quot;},{&quot;id&quot;:&quot;14&quot;,&quot;name&quot;:&quot;Activities&quot;,&quot;themecolor&quot;:&quot;#3fb5a6&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/activities-banner1490354907.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/activities-thumb1490354907.jpg&quot;,&quot;value&quot;:&quot;activities&quot;,&quot;order&quot;:&quot;13&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/activities-icon1490354906.jpg&quot;}],'category')">
<li ng-repeat="category in categoryList" id="{{category.id}}_scrollctg">
<a   title="{{category.name}}"  ng-click="setFilter('category',category.id,category.name, 0,0)" >
<i class="mecat-{{category.name |replaceSpaceFilter | lowercase}} col{{category.name|replaceSpaceFilter | lowercase}} "></i>   
<label ng-cloak>{{category.name}}
<span ng-cloak>{{category.eventCount}}</span>
</label>
</a></li>
<li><a href="javascript:void(0)" title="All Categories" ng-click="setFilter('category',0,'All Categories', 0,0)" > <label>All Categories<span ng-cloak>{{allCategoryCount}}</span></label>
</a></li>
<li id="subcat1" style="display:none">
<a id="showSubCategoriesAnchor" ng-click="getSubCategoryCount()" 
 class="btn collapsed showSubCategories showMore" 								   data-parent="headerDD4" href="#showMOre1"
 aria-expanded="false" aria-controls="showMore"> 
 Show Sub Categories
 </a>
</li>
</ul>
<div class="clearBoth"></div>
</div>
<div class="filterdiv" id="showMOre1"
 style="border-bottom: 1px solid #EBEBEB;">
<div class="showMoreCat">
<span ng-if="subcatErrorMessage != '' " ng-cloak>{{subcatErrorMessage}}</span>
<ul ng-init="init('','subCategoryList')" class="overflow1">
<h6>Sub Category</h6>
<hr>                 
<li ng-repeat="subcategory in subCategoryList | orderBy:'name'">
<a  title="{{subcategory.name}}" ng-click="setFilter('Subcategory',subcategory.id,subcategory.name, 0,0)">
<label ng-cloak>{{subcategory.name}}
<span ng-cloak>({{subcategory.count}})</span>
</label> 
</a></li> 
<li class="subcategorysearch"><div 
    angucomplete-alt id="subCat" 
    placeholder="Search Sub Category" pause="1" selected-object="subcategorySelected"
    remote-url="/api/subcategory/search" 
    remote-url-request-formatter="remoteRequestSubCat" 
    remote-url-data-field="response.subCategoryList" 
    title-field="name" input-class="form-control form-control-small" 
    match-class="highlight" input-changed="subCatChanged">
          </div></li>
</ul>
<div class="clearBoth"></div>
</div>
</div>
</div>
<div class="filterdiv" id="headerDD5" style="width: 100%;">
<div class="accTextCont timeList">
<span class="close_icon"> <a href="javascript:void(0)" class="btn"><img src="https://static.meraevents.com/images/static/close-icon.png"></a></span>
<h6>Dates</h6>
<ul  ng-init="init([{&quot;id&quot;:1,&quot;name&quot;:&quot;today&quot;,&quot;value&quot;:&quot;today&quot;},{&quot;id&quot;:2,&quot;name&quot;:&quot;tomorrow&quot;,&quot;value&quot;:&quot;tomorrow&quot;},{&quot;id&quot;:3,&quot;name&quot;:&quot;this week&quot;,&quot;value&quot;:&quot;this-week&quot;},{&quot;id&quot;:4,&quot;name&quot;:&quot;this weekend&quot;,&quot;value&quot;:&quot;this-weekend&quot;},{&quot;id&quot;:5,&quot;name&quot;:&quot;this month&quot;,&quot;value&quot;:&quot;this-month&quot;},{&quot;id&quot;:6,&quot;name&quot;:&quot;all time&quot;,&quot;value&quot;:&quot;all-time&quot;},{&quot;id&quot;:7,&quot;name&quot;:&quot;Custom Date&quot;,&quot;value&quot;:&quot;custom-date&quot;}],'customFilter')">
<li ng-repeat="customFilter in customFilterList " id="{{customFilter.id}}_scrolldt"><a ng-if="customFilter.id<7" title="{{customFilter.name}}"  ng-click="setFilter('CustomFilter',customFilter.id,customFilter.name, 0,0)" > <label ng-cloak>{{customFilter.name}}
<span ng-cloak>{{customFilter.eventCount}}</span>
</label>
</a>
<input ang-datepicker ng-model="customDateValue" ng-if="customFilter.id==7" type="text" id="datepicker" readonly filter-id="{{customFilter.id}}" filter-name="{{customFilter.name}}"
 class="cal_styles custom_date" style=""
 placeholder="{{customFilter.name}}" value="{{customDateValue}}" />
</li>
</ul>
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
<li><a href='http://www.meraevents.com/dashboard/event/create/'><span class='icon2-pencil'></span> Create Event</a></li><li><a href='http://www.meraevents.com/login' target='_self'><span class='icon2-sign-in' ></span> Login</a></li></ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>