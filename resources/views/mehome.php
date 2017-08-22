<?php
include("partials/header.php");
?>                                           
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
                        <?php include("partials/homeFilter.blade.php"); ?>	
                        <!--carousal-->
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
<a target="_self" href="http://www.meraevents.com/event/young-india-challenge-yic-2017-mumbai"><img src="https://static.meraevents.com/content/images/banners/young1489577511.png" width="1280" height="370" alt="Young India Challenge (YIC) 2017 - Mumbai" title="Young India Challenge (YIC) 2017 - Mumbai" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="https://www.meraevents.com/event/corporate-badminton-championship"><img src="https://static.meraevents.com/content/images/banners/Gamepoint1502879904.jpeg" width="1280" height="370" alt="Netplay-PPSM Corporate Badminton Championship" title="Netplay-PPSM Corporate Badminton Championship" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="http://www.meraevents.com/event/tedxbangalore-2017-unbreakable"><img src="https://static.meraevents.com/content/images/banners/yy11499857823LMjXS1499858954.jpg" width="1280" height="370" alt="TEDxBangalore 2017 - UNBREAKABLE" title="TEDxBangalore 2017 - UNBREAKABLE" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="https://www.meraevents.com/event/the-aeonian-2017-startup-expo-pitch-conf-awards?ucode=organizer"><img src="https://static.meraevents.com/content/images/banners/banner1502266426sxVQc1502368681.jpg" width="1280" height="370" alt="https://www.meraevents.com/event/the-aeonian-2017-" title="https://www.meraevents.com/event/the-aeonian-2017-" /></a>
<div class="carousel-caption">
</div>
</div>
<div class="item ">
<a target="_self" href="https://www.meraevents.com/event/adani-ahmedabad-marathon?ucode=organizer"><img src="https://static.meraevents.com/content/images/banners/banner1503058391i0zWY1503299867.jpg" width="1280" height="370" alt="https://www.meraevents.com/event/adani-ahmedabad-m" title="https://www.meraevents.com/event/adani-ahmedabad-m" /></a>
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
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_101655"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/world-congress-on-drug-discovery-and-development-summit-2017" itemprop="url" class="thumbnail">
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
</a> <a href="http://www.meraevents.com/event/world-congress-on-drug-discovery-and-development-summit-2017" class="category">
<span class="mecat-training coltraining"></span> <span
class="catName"><em>Training</em></span>
</a>
<span   event_id="101655"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_131648"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/national-achievers-conference-sep-2017" itemprop="url" class="thumbnail">
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
</a> <a href="http://www.meraevents.com/event/national-achievers-conference-sep-2017" class="category">
<span class="mecat-training coltraining"></span> <span
class="catName"><em>Training</em></span>
</a>
<span   event_id="131648"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_136929"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/the-run-drops" itemprop="url" class="thumbnail">
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
</a> <a href="http://www.meraevents.com/event/the-run-drops" class="category">
<span class="mecat-sports colsports"></span> <span
class="catName"><em>Sports</em></span>
</a>
<span   event_id="136929"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_135993"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/nlp-practitioner-certification-program-nwy" itemprop="url" class="thumbnail">
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
</a> <a href="http://www.meraevents.com/event/nlp-practitioner-certification-program-nwy" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="135993"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_134393"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/yourstory-techsparks-2017" itemprop="url" class="thumbnail">
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
</a> <a href="http://www.meraevents.com/event/yourstory-techsparks-2017" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="134393"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_131085"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/tedxhyderabad-2017" itemprop="url" class="thumbnail">
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
</a> <a href="http://www.meraevents.com/event/tedxhyderabad-2017" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="131085"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_135362"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/millionaire-mind-intensive-mumbai-oct-2017" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/135362/Milli-t_thumb14671112501498893460.png" width="" height=""
alt="Millionaire Mind Intensive, Mumbai - Oct 2017" title="Millionaire Mind Intensive, Mumbai - Oct 2017"  onError="this.src='https://static.meraevents.com/content/categorylogo/training-thumbnail1455801654.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">Millionaire Mind Intensive, Mumbai - Oct 2017</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-10-06 08:00:00">October 06, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Mumbai</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://www.meraevents.com/event/millionaire-mind-intensive-mumbai-oct-2017" class="category">
<span class="mecat-training coltraining"></span> <span
class="catName"><em>Training</em></span>
</a>
<span   event_id="135362"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_138368"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/brahmotsav-2017" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/138368/thumbnail1503304475COe6z.png" width="" height=""
alt="Brahmotsav 2017 " title="Brahmotsav 2017 "  onError="this.src='https://static.meraevents.com/content/categorylogo/campus-thumbnail1455567356.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">Brahmotsav 2017 </span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-10-07 18:00:00">October 07, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Mumbai</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://www.meraevents.com/event/brahmotsav-2017" class="category">
<span class="mecat-campus colcampus"></span> <span
class="catName"><em>Campus</em></span>
</a>
<span   event_id="138368"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_135661"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/tedxbangalore-2017-unbreakable" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/135661/TEDx-Unbreakable-Thumb1499764579gk2y5.jpg" width="" height=""
alt="TEDxBangalore 2017 - UNBREAKABLE" title="TEDxBangalore 2017 - UNBREAKABLE"  onError="this.src='https://static.meraevents.com/content/categorylogo/Professional1455800570.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">TEDxBangalore 2017 - UNBREAKABLE</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-10-08 10:00:00">October 08, 2017</span> 
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
</a> <a href="http://www.meraevents.com/event/tedxbangalore-2017-unbreakable" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="135661"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_135120"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/infosec-intelligence-conclave-2017" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/135120/thumbnail-1-1500641368Q8owZ.jpg" width="" height=""
alt="INFOSEC INTELLIGENCE CONCLAVE 2017" title="INFOSEC INTELLIGENCE CONCLAVE 2017"  onError="this.src='https://static.meraevents.com/content/categorylogo/Professional1455800570.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">INFOSEC INTELLIGENCE CONCLAVE 2017</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-10-12 08:00:00">October 12, 2017</span> 
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
</a> <a href="http://www.meraevents.com/event/infosec-intelligence-conclave-2017" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="135120"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_120950"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/stress-management-lab-for-agile-workforce" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/120950/Icsm-t_thumb1487314379.png" width="" height=""
alt="Stress Safety Net (SSN) Implementation for Agile Workforce" title="Stress Safety Net (SSN) Implementation for Agile Workforce"  onError="this.src='https://static.meraevents.com/content/categorylogo/Professional1455800570.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">Stress Safety Net (SSN) Implementation for Agile Workforce</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-11-02 09:00:00">November 02, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Goa</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://www.meraevents.com/event/stress-management-lab-for-agile-workforce" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="120950"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li><script type="text/javascript">
var dashboard_eventhome="http://www.meraevents.com/dashboard/home/";
var add_bookmark = "http://www.meraevents.com/api/bookmark/saveBookmark";
var remove_bookmark = "http://www.meraevents.com/api/bookmark/removeBookmark";

//variable fro detecting page of bookmark view
var bookmark_page="";

var page= parseInt("1");
var bookmark_count= parseInt("649");
</script>


<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_120951"  itemscope itemtype="http://schema.org/Event">
<a href="http://www.meraevents.com/event/cognitive-behavioural-therapy-cbt-for-stress-counseling" itemprop="url" class="thumbnail">
<div class="eventImg">
<img itemprop="image" src="https://static.meraevents.com/content/eventlogo/120951/hands1494219077s32h9.jpg" width="" height=""
alt="Cognitive Behavioural Therapy (CBT) for Stress Counseling" title="Cognitive Behavioural Therapy (CBT) for Stress Counseling"  onError="this.src='https://static.meraevents.com/content/categorylogo/Professional1455800570.jpg'" />
</div>
<h2>
<span class="eveHeadWrap" itemprop="name">Cognitive Behavioural Therapy (CBT) for Stress Counseling</span>
</h2>
<div class="info">
<span itemprop="startDate" content="2017-11-02 10:00:00">November 02, 2017</span> 
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="eventCity" style='position: absolute;
    right: 0;
    bottom: -22px;display: block ;'>
<span itemprop="address">Panjim</span>
</div>
<div class="overlay">
<div class="overlayButt">
<div class="overlaySocial">
<span class="icon-fb"></span> <span class="icon-tweet"></span>
<span class="icon-google"></span>
</div>
</div>
</div>
</a> <a href="http://www.meraevents.com/event/cognitive-behavioural-therapy-cbt-for-stress-counseling" class="category">
<span class="mecat-professional colprofessional"></span> <span
class="catName"><em>Professional</em></span>
</a>
<span   event_id="120951"  class='icon2-bookmark-o add_bookmark'  rel='add' title='Add bookmark'  >          
</span>
</li>   
                                	
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
<p id="totalCount" class="totalCount">649</p>
<h1 id="eventHappeningCity" ng-cloak >Events in {{selectedCityName}}</h1>  
<div class="eventsCat">
<ul ng-init="eventsData=[{&quot;id&quot;:&quot;1&quot;,&quot;name&quot;:&quot;Entertainment&quot;,&quot;themecolor&quot;:&quot;#ba36a6&quot;,&quot;ticketsetting&quot;:&quot;single&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Entertainment1455567252.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Entertainment1455567253.jpg&quot;,&quot;value&quot;:&quot;entertainment&quot;,&quot;order&quot;:&quot;1&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/entertainment14473404211455567251.jpg&quot;,&quot;eventCount&quot;:30},{&quot;id&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Professional&quot;,&quot;themecolor&quot;:&quot;#2ebcd1&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Professional1455800569.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Professional1455800570.jpg&quot;,&quot;value&quot;:&quot;professional&quot;,&quot;order&quot;:&quot;2&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/professional21455800569.jpg&quot;,&quot;eventCount&quot;:153},{&quot;id&quot;:&quot;9&quot;,&quot;name&quot;:&quot;Sports&quot;,&quot;themecolor&quot;:&quot;#389155&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Sports1455567556.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Sports1455567557.jpg&quot;,&quot;value&quot;:&quot;sports&quot;,&quot;order&quot;:&quot;3&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/sports14473405641455567555.jpg&quot;,&quot;eventCount&quot;:66},{&quot;id&quot;:&quot;3&quot;,&quot;name&quot;:&quot;Training&quot;,&quot;themecolor&quot;:&quot;#8c905e&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/training-banner1455801653.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/training-thumbnail1455801654.jpg&quot;,&quot;value&quot;:&quot;training&quot;,&quot;order&quot;:&quot;4&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/training1455801652.jpg&quot;,&quot;eventCount&quot;:180},{&quot;id&quot;:&quot;5&quot;,&quot;name&quot;:&quot;Spiritual&quot;,&quot;themecolor&quot;:&quot;#f3b655&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Spiritual1455567391.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/Spiritual1455567392.jpg&quot;,&quot;value&quot;:&quot;spiritual&quot;,&quot;order&quot;:&quot;5&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/spiritual14473404941455567391.jpg&quot;,&quot;eventCount&quot;:79},{&quot;id&quot;:&quot;4&quot;,&quot;name&quot;:&quot;Campus&quot;,&quot;themecolor&quot;:&quot;#81568e&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/campus-banner1455567355.jpg&quot;,&quoquot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/campus-thumbnail1455567356.jpg&quot;,&quot;value&quot;:&quot;campus&quot;,&quot;order&quot;:&quot;6&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/campus14473404781455567354.jpg&quot;,&quot;eventCount&quot;:2},{&quot;id&quot;:&quot;6&quot;,&quot;name&quot;:&quot;Trade Shows&quot;,&quot;themecolor&quot;:&quot;#4b68ad&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/TradeShows1455567428.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/TradeShows1455567429.jpg&quot;,&quot;value&quot;:&quot;trade-shows&quot;,&quot;order&quot;:&quot;7&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/professional21455567427.jpg&quot;,&quot;eventCount&quot;:12},{&quot;id&quot;:&quot;14&quot;,&quot;name&quot;:&quot;Activities&quot;,&quot;themecolor&quot;:&quot;#3fb5a6&quot;,&quot;ticketsetting&quot;:&quot;multiple&quot;,&quot;categorydefaultbannerid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/activities-banner1490354907.jpg&quot;,&quot;categorydefaultthumbnailid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/activities-thumb1490354907.jpg&quot;,&quot;value&quot;:&quot;activities&quot;,&quot;order&quot;:&quot;13&quot;,&quot;imagefileid&quot;:&quot;https:\/\/static.meraevents.com\/content\/categorylogo\/activities-icon1490354906.jpg&quot;,&quot;eventCount&quot;:127}];" id="eventsHappening">
<li class="col-lg-2 col-md-2 col-sm-4 col-xs-6" ng-repeat="data in eventsData|orderBy:'-eventCount'|limitTo:6">
<span style="cursor: pointer;" onclick="eventsHappeningRedirect('http://www.meraevents.com/search', this)" id="{{data.id}}" > 
<img ng-src="{{data.imagefileid}}" alt="{{data.name}}" title="{{data.name}}" style="border-bottom: 4px solid {{data.themecolor}}" ng-cloak> <span class="eventsCount colorWhite" ng-cloak>{{data.eventCount}}</span>
<h6 class="eventName colorWhite" ng-cloak>{{data.name}}</h6>
</span></li>
</ul>
<div class="clearBoth"></div>
<br>
<div class="alignCenter">
<div class="collapse" id="viewMore" aria-expanded="false">
<div class="showMoreCat">
<ul id="eventsMoreHappening" ng-init="subcatEventsData=[]"> 
<li ng-repeat="data in subcatEventsData|orderBy:'-count'" onclick="eventsHappeningSubcategoryRedirect('http://www.meraevents.com/search', this)" id="{{data.id}}" catid="{{data.categoryId}}" subcatname="{{data.name}}"><a href="javascript:void(0)" title="{{data.name}}"> <label ng-cloak>{{data.name}}</label>
<span ng-cloak>({{data.count}})</span></a></li>
</ul>
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
				<a href="http://www.meraevents.com/dashboard/event/create/" class="btn btn-success borderWhite"
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
                        <?php include('partials/home_scroll_filter.blade.php');?>

</div>
<!-- END OF  on scroll code-->				</div>
			</div>
<!-- Modal -->
<script>
   var api_commonRequestProcessRequest = "http://www.meraevents.com/api/common_requests/processRequest";
   var api_subcategoryEventsCount = "http://www.meraevents.com/api/subcategory/eventsCount";
   var api_cityEventsCount = "http://www.meraevents.com/api/city/eventCount";
   var api_categoryEventsCount = "http://www.meraevents.com/api/category/eventCount";
   var api_filterEventsCount = "http://www.meraevents.com/api/filter/eventCount";
   var api_categorycityEventsCount = "http://www.meraevents.com/api/category/cityEventsCount";
   var api_subcategorycityEventsCount = "http://www.meraevents.com/api/subcategory/cityEventsCount";
   var api_bannerList = "http://www.meraevents.com/api/banner/list";
   var api_eventList = "http://www.meraevents.com/api/event/list";
   var api_blogBloglist = "http://www.meraevents.com/api/blog/blogList";
   var api_catgBlogData = "http://www.meraevents.com/dashboard";
</script>
<?php include('partials/footer.php');?>
<script>
var api_commonrequestsUpdateCookie = "http://www.meraevents.com/api/common_requests/updateCookie";
 </script>
</body>
</html>
