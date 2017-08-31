@extends('partials.master')
@section('content')
<!--important-->
<div class="page-container">
    <div class="wrap">
        <div class="container"> 
            <div class="innerPageContainer">
                <h2 class="create_eve_title">Start here</h2>
                <div class="row">
                    <form enctype="multipart/form-data" name="createEventForm" id="createEventForm" method="POST" action="<?php echo route('create-event.store') ?>"> 
                       {{csrf_field()}}
                        <div class="col-md-8 col-xs-12 col-sm-12">
                            <div class="row create_eve_container create_eve_bg animated">
                                <div class="col-sm-12 ">
                                    <h2 class="title_1">About</h2>
                                    <div id="eventDataSuccess" style="color: #26A65B;">

                                    </div>
                                    <div class="create-event-error">
                                        <ul id="eventDataErrors"></ul>
                                    </div>
                                    <div class="form-group">
                                        <label>Event Title</label>
                                        <input autofocus="true" type="text" class="form-control eventFields" name="title" id="eventTitle" value="">
                                    </div>

                                    <div class="form-group create_eve_labelspace">
                                        <label>Description</label>
                                        <textarea style="height: 170px;" type="text" ui-tinymce ="tinymceOptions" id="event-desc"  class="form-control eventFields" name="description" ></textarea>
                                    </div>
                                    <div class="create_eve_dropdowns">
                                        <ul>
                                            <li class="dropdown fleft">
                                                <label for="Category">Category</label>
                                                <a href="javascript:;" class="dropdown-togglep selectCategory" data-toggle="dropdown" role="button" aria-expanded="false" >Select a Category<span class="icon-downArrow"></span></a>
                                                <ul class="dropdown-menu categorySelect" role="menu">
                                                    
                                                            <?php 
                                                            foreach ($category as $categid => $categArr) { ?>
                                                    <li onclick="categoryChanged('<?php echo $categArr['id']; ?>', '<?php echo $categArr['value']; ?>', 'true', '#ba36a6');">
                                                            <a><i class="mecat-entertainment colentertainment"></i>
                                                            <?php echo $categArr['name']; ?>
                                                                </a>
                                                    </li>
                                                            <?php }
                                                            ?>                                                        
                                                    
                                                </ul>
                                                <span id="categoryError" class="create-event-error error"></span>
                                            </li>

                                            <li class="dropdown ">
                                                <label for="Sub Category" class="">Sub Category</label>
                                                <input type="text" placeholder="Enter Sub Category " class="form-control eventFields" id="subCategoryName" name="subCategoryName" value=""/>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="form-group eventTags fullwidth_form">
                                        <label>Event URL </label>
                                        <span> <?php echo url('/'); ?>/event/</span>
                                        <input type="text" class="form-control eventFields tagsField " value="" name="url" id="eventUrl">

                                        <a onclick="checkUrlExists()" href="javascript:;" class="checkurl_btn">Check Availability</a>
                                        <a onclick="editUrl()" href="javascript:;" class="checkurl_btn" id="editurl">Edit</a>
                                        <span id="checkUrlAvail"></span>
                                    </div>

                                    <div >
                                        <h2 class="title_2 clearBoth">Where</h2>
                                        <div class="form-group sales">
                                            <span class='custom-checkbox'> 
                                                <input type="checkbox" id="webinar"  name="iswebinar" value="0"                                                        onclick="webinarChange(this)" /> 

                                            </span>
                                            <h5> Webinar </h5><br>

                                        </div>
                                        <div id="div_webinar" >
                                            <div class="form-group" id="locationField"  >
                                                <label>Venue</label>
                                                <input type="text" class="form-control eventFields placechange" id="eventVenue" name="venueName" value="">
                                                <button id="clearVenue" class="clear-venue"><span class="icon2-repeat"></span></button>
                                                <!--onFocus="geolocate()"-->

                                                <span class="pull-right addAdd">+</span>
                                            </div>
                                            <div class="add_address" id="address" style="display: none;">
                                                <label class="add_address_space1">Address line 1</label>
                                                <input type="text" class="form-control eventFields field" id="eventAddress1" name="venueaddress1" value="">


                                                <div class="clear"></div>

                                                <label class="add_address_space">Address line 2</label>
                                                <input type="text" class="form-control eventFields" id="eventAddress2" name="venueaddress2" value="">


                                                <div class="clear"></div>				

                                                <ul>
                                                    <li >
                                                        <label class="add_address_space" for="Country">Country</label>
                                                        <input type="text" placeholder="Enter Your Country" class="form-control eventFields countryAutoComplete locationfields" id="country" name="country" value=""/>
                                                        <label for="country" id="countryError">&nbsp;</label>
                                                    </li>
                                                    <li >
                                                        <label for="State" class="add_address_space">State</label>
                                                        <input type="text" placeholder="Enter Your State" class="form-control eventFields stateAutoComplete locationfields" id="state" name="state" value=""/>
                                                        <label for="state" id="stateError">&nbsp;</label>
                                                    </li>
                                                    <li>
                                                        <label for="city" class="add_address_space">City</label>
                                                        <input type="text" placeholder="Enter Your City" class="form-control eventFields cityAutoComplete locationfields" id="city" name="city" value=""/>
                                                        <label for="city">&nbsp;</label>
                                                    </li>
                                                    <li>
                                                        <label for="pincode" class="add_address_space">Pincode</label>
                                                        <input type="text" placeholder="Enter Your Pincode" class="form-control eventFields" id="pincode" name="pincode" value=""/>
                                                        <label for="pincode">&nbsp;</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>   
                                    </div>

                                    <h2 class="title_3 clearBoth">When</h2>

                                    <div class="create_eve_where change_currency ">
                                        <ul>
                                            <li>
                                                <label for="Start date">Start date </label>
                                                <input type="text" class="form-control eventFields" id="start_date" name="startDate" readonly="readonly" value="">

                                            </li>
                                            <li>
                                                <label for="Start time">Start time</label>
                                                <div class="input-group bootstrap-timepicker">
                                                    <input id="event_start" type="text" class="input-small" name="startTime" readonly="readonly" value=""  >
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                </div>
                                            </li>
                                            <li>
                                                <label for="End date">End date</label>
                                                <input type="text" class="form-control eventFields" id="end_date" name="endDate" value="" readonly="readonly">

                                            </li>
                                            <li>
                                                <label for="End time">End time</label>
                                                <div class="input-group bootstrap-timepicker">
                                                    <input id="event_end" type="text" class="input-small " name="endTime" value="" readonly="readonly">

                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                </div>
                                            </li>
                                        </ul>
                                      <!--  <span id="addMoretime" class="add_time">Add another time and date</span>-->
                                    </div>

                                    <div id="div_ticketwidget">
                                        <h2 class="title_3 clearBoth">Tickets</h2>


                                        <div class="create_eve_tickets"> 
                                            <input type="hidden" name="ticketscount" id="ticketscount" value="1" />
                                            <input type="hidden" name="maxArrIndex" id="maxArrIndex"  value="1"/>
                                            <div class="eventtickettype" >
                                                <ul>
                                                    <li>
                                                        <label for="Ticket type">Ticket type </label>
                                                        <div class="TicketDropdownHolder">
                                                            <input type="hidden" name="eventedit"  value="0" id="eventedit"/>
                                                            <input type="hidden" name="ticketArrIndex" class="ticketArrIndex"  value=""/>
                                                            <input type="hidden" name="ticketId[]"  value=""/>
                                                            <input type="hidden" name="indexedTicketArr[]"  value="0"/>
                                                            <select ticketcount="0" name="ticketType[]" id="ticketType0" class="ticketType selectedticket0" >
                                                                <option value="1"  >Free</option>
                                                                <option value="2"  >Paid</option>
                                                                <option value="3"  >Donation</option>
                                                                <option value="4"  >Add-on Items</option>
                                                            </select>
                                                            <span class="create-event-error ticketTypeError" id="ticketTypeError0" style="display: none;"></span>
                                                        </div>     
                                                    </li>

                                                    <li>
                                                        <label for="Ticket name">Ticket name</label>
                                                        <input  type="text" class="form-control eventFields ticketName"  id="ticketName0"  name="ticketName[]" 
                                                                value=""/>
                                                        <span class="create-event-error ticketNameError" id="ticketNameError0" style="display: none;"></span>
                                                    </li>
                                                    <li>
                                                        <label for="Quantity">Order</label>
                                                        <input type="text" class="form-control eventFields "  id="order0"  name="order[]" value="1">
                                                        <span class="create-event-error ticket orderError order" id="ticketOrderError0" style="display: none;"></span>
                                                    </li>
                                                    <li>
                                                        <label for="Price" style="display:show ;">Price</label>
                                                        <span class="form-control eventFields ticketpricespan" id="ticketpricespan0" style="display:none ;">0</span>
                                                        <input  type="text" class="form-control eventFields ticketprice"  id="price0"  name="price[]"   style="display:  " value="" />
                                                        <span class="create-event-error priceError" id= "priceError0" style="display: none;">Price is required.</span>
                                                    </li>
                                                    <li class="advsettings_new">
                                                        <a href="javascript:void(0);" class="settingsIcon"  id="settingicon0">
                                                            <img src="https://static.meraevents.com/images/static/setting_icon.png"  alt=""/>
                                                        </a>
                                                        <a href="javascript:void(0)" class="btn deletTicket" style="display:none" >
                                                            <img src="https://static.meraevents.com/images/static/close-icon.png">
                                                        </a>
                                                    <!--    <span class="add_ticket"   >+</span>   -->
                                                    </li>
                                                    <li  class="ticketNo"></li>
                                                </ul>
                                                <div class="setting_content" id="setting_content0"  style="display:none;">
                                                    <div class="adv_settings">
                                                        <span>Advanced Settings</span>
                                                    </div>
                                                    <div class="ticket_description">
                                                        <ul>
                                                            <li class="description_input">
                                                                <label for="ticketStart date">Ticket Description</label>
                                                                <input type="text" class="form-control eventFields ticketDescription"   id="ticketDescription0"   name="ticketDescription[]" value="">
                                                                <span class="create-event-error ticketDescriptionError" id= "ticketDescriptionError0" style="display: none;">Ticket description is required.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="change_ticketsettings sales float">
                                                        <ul>
                                                            <li>
                                                                <label for="Start date">Start date</label>
                                                                <input type="text" class="form-control eventFields event_start_date"  id="startdate0"  name="ticketstartDate[]" 
                                                                       value="" readonly="readonly">
                                                                <span class="create-event-error startdateError" id= "startdateError0" style="display: none;"></span>
                                                            </li>
                                                            <li>
                                                                <label for="Start time">Start time</label>
                                                                <div class="input-group bootstrap-timepicker">
                                                                    <input type="text" class="form-control eventFields event_start_time"  id="starttime0" name="ticketstartTime[]" value="" readonly="readonly">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>		
                                                                    <span class="create-event-error starttimeError" id= "starttimeError0" style="display: none;"></span>
                                                                </div>

                                                            </li>
                                                            <li>
                                                                <label for="End date">End date</label>
                                                                <input type="text" class="form-control eventFields endDate event_end_date" id="enddate0"  name="ticketendDate[]" value="" readonly="readonly">
                                                                <span class="create-event-error enddateError" id= "enddateError0" style="display: none;"></span>
                                                            </li>
                                                            <li>
                                                                <label for="End time">End time</label>
                                                                <div class="input-group bootstrap-timepicker">
                                                                    <input type="text" class="form-control eventFields event_end_time"  id="endtime0"   name="ticketendTime[]" value="" readonly="readonly">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                                    <span class="create-event-error endtimeError" id= "endtimeError0" style="display: none;"></span>
                                                                </div>

                                                            </li>
                                                            <li style=" width: 13%; ">
                                                                <label>Currency </label> 
                                                                <div class="TicketDropdownHolder">
                                                                    <select name="currencyType[]" id="currencyType0">
                                                                        <option  value="1">INR</option>
                                                                        <option  value="2">USD</option>
                                                                        <option  value="4">EUR</option>
                                                                        <option  value="7">SGD</option>
                                                                        <option  value="8">MYR</option>
                                                                        <option  value="9">AED</option>
                                                                    </select>

   <!--<input class="freeticketcurrency" type="hidden" name="currencyType[]" id="currencyType0" value="3" />-->
                                                                    <span class="create-event-error currencyTypeError" id= "currencyTypeError0" style="display: none;"></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="change_currency sales float taxList_div" style="display: none;" >
                                                        <ul class="taxList_ul"></ul>
                                                    </div>
                                                    <div id="qtyDiv0" class="create_ticket_order sales float" >
                                                        <ul>
                                                            <li >
                                                                <label for="Ticket name">Quantity</label>
                                                                <input type="text" class="form-control eventFields ticketquantity"  id="quantity0"  name="quantity[]" 

                                                                       value="9999" maxlength="10">


                                                                <span class="create-event-error quantityError ticketQtyError" id="ticketQtyError0" style="display: none;"></span>
                                                            </li>
                                                            <li >
                                                                <label for="Quantity">Min Qty</label>
                                                                <input type="text" class="form-control eventFields minquantity"   id="minquantity0"   name="minquantity[]" 
                                                                       value="1" value="">
                                                                <span class="create-event-error minquantityError minQtyError" id="minQtyError0" style="display: none;"></span>
                                                            </li>
                                                            <li>
                                                                <label for="Price">Max Qty</label>
                                                                <input type="text" class="form-control eventFields maxquantity"   id="maxquantity0"   name="maxquantity[]" 
                                                                       value="9" value=""/>
                                                                <span class="create-event-error maxquantityError maxQtyError" id="maxQtyError0" style="display: none;"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="change_sale">
                                                        <ul>

                                                            <li>

                                                                <span class='custom-checkbox'>
                                                                    <input type="checkbox"  class="soldout soldoutCheckbox" id="soldout0" name="soldOut[]" value="1">
                                                                    <input type='hidden' value='0' name='soldOut[]'>
                                                                </span>

                                                                <h5>Sold out</h5>



                                                                <span class="create-event-error soldoutError" id="soldoutError0" style="display: none;"></span>
                                                            </li>
                                                            <li>
                                                                <span class='custom-checkbox'>
                                                                    <input type="checkbox" class="soldout nottodisplayCheckbox"  id="nottodisplay0"  
                                                                           name="nottodisplay[]" value="0" >
                                                                </span>
                                                                <h5>Not to Display</h5>
                                                                <span class="create-event-error nottodisplayError" id="nottodisplayError0" style="display: none;"></span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div id="dummy-ticket" style="display:none">

                                            <div class="eventtickettype" >
                                                <ul>
                                                    <li>
                                                        <label for="Ticket type">Ticket type </label>

                                                        <div class="TicketDropdownHolder">
                                                            <input type="hidden" name="ticketArrIndex" class="ticketArrIndex"  value=""/>
                                                            <input type="hidden" name="indexedTicketArr[]" class="indexedTicketArr"  value=""/>
                                                            <select name="ticketType[]" id="ticketType" class="ticketType" ticketcount="0">
                                                                <option value="2"  >Paid</option>
                                                                <option value="1"  >Free</option>
                                                                <option value="3" >Donation</option>
                                                                <option value="4" >Add-on Items</option>
                                                            </select>
                                                            <span class="create-event-error ticketTypeError" id="ticketTypeError1" style="display: none;"></span>
                                                        </div>     
                                                    </li>
                                                    <li>
                                                        <label for="Ticket name">Ticket name</label>
                                                        <input type="text" class="form-control eventFields ticketName"  id="ticketName"  name="ticketName[]" 
                                                               value=""/>
                                                        <span class="create-event-error ticketNameError" id="ticketNameError" style="display: none;"></span>
                                                    </li>
                                                    <li>
                                                        <label for="Quantity">Order</label>
                                                        <input type="text" class="form-control eventFields ticketOrder"  id="order" maxlength="10" name="order[]" value="1">
                                                        <span class="create-event-error orderError ticketOrderError" id="ticketOrderError" style="display: none;"></span>
                                                    </li>
                                                    <li>
                                                        <label for="Price">Price</label>
                                                        <span class="form-control eventFields ticketpricespan" id="ticketpricespan" style="display:none;"></span>
                                                        <input type="text" class="form-control eventFields ticketprice"  id="price"  name="price[]" value="" />
                                                        <span class="create-event-error priceError" id="priceError" style="display: none;">Price is required.</span>
                                                    </li>
                                                    <li class="advsettings_new">
                                                        <a href="javascript:void(0);" class="settingsIcon" id="settingicon1">
                                                            <img src="https://static.meraevents.com/images/static/setting_icon.png"  alt=""/>
                                                        </a>
                                                        <a href="javascript:void(0)" class="btn deletTicket" style="display:">
                                                            <img src="https://static.meraevents.com/images/static/close-icon.png">
                                                        </a>

    <!--<span class="add_ticket"  >+</span>-->     
                                                    </li>
                                                    <li  class="ticketNo"></li>
                                                </ul>
                                                <div class="setting_content" id="setting_content"  style="display:none;">
                                                    <div class="adv_settings">
                                                        <span>Advanced Settings</span>
                                                    </div>
                                                    <div class="ticket_description">
                                                        <ul>
                                                            <li class="description_input">
                                                                <label for="ticketStart date">Ticket Description</label>
                                                                <input type="text" class="form-control eventFields ticketDescription"   id="ticketDescription"   name="ticketDescription[]" value="">
                                                                <span class="create-event-error ticketDescriptionError" id= "ticketDescriptionError" style="display: none;">Ticket description is required.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="change_ticketsettings sales float">
                                                        <ul>
                                                            <li>
                                                                <label for="Start date">Start date</label>
                                                                <input type="text" class="form-control eventFields event_start_date"  id="startdate"  name="ticketstartDate[]" readonly="readonly" />
                                                                <span class="create-event-error startdateError" id= "startdateError" style="display: none;"></span>
                                                            </li>
                                                            <li>
                                                                <label for="Start time">Start time</label>
                                                                <div class="input-group bootstrap-timepicker">
                                                                    <input type="text" class="form-control eventFields event_start_time"  id="starttime" name="ticketstartTime[]" readonly="readonly" />
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>	
                                                                    <span class="create-event-error starttimeError" id= "starttimeError" style="display: none;"></span>
                                                                </div>

                                                            </li>
                                                            <li>
                                                                <label for="End date">End date</label>
                                                                <input type="text" class="form-control eventFields endDate event_end_date" id="enddate"  name="ticketendDate[]" readonly="readonly"/>
                                                                <span class="create-event-error enddateError" id= "enddateError" style="display: none;"></span>
                                                            </li>
                                                            <li>
                                                                <label for="End time">End time</label>
                                                                <div class="input-group bootstrap-timepicker">
                                                                    <input type="text" class="form-control eventFields event_end_time"  id="endtime"   name="ticketendTime[]" readonly="readonly"/>
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>	
                                                                    <span class="create-event-error endtimeError" id= "endtimeError" style="display: none;"></span>
                                                                </div>

                                                            </li>
                                                            <li style=" width: 13%;">
                                                                <label>Currency </label> 
                                                                <div class="TicketDropdownHolder">
                                                                    <select name="currencyType[]" id="currencyType" class="currencyType">
                                                                        <option value="1">INR</option>
                                                                        <option value="2">USD</option>
                                                                        <option value="4">EUR</option>
                                                                        <option value="7">SGD</option>
                                                                        <option value="8">MYR</option>
                                                                        <option value="9">AED</option>
                                                                    </select>
                                                                    <span class="create-event-error currencyTypeError" id= "currencyTypeError" style="display: none;"></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="change_currency sales float taxList_div" style="display: none;">
                                                        <ul class="taxList_ul"></ul>
                                                    </div>
                                                    <div class="create_ticket_order sales float">
                                                        <ul>
                                                            <li >
                                                                <label for="Ticket name">Quantity</label>
                                                                <input type="text" class="form-control eventFields ticketquantity"  id="quantity"  name="quantity[]" 
                                                                       value="9999" maxlength="10">

                                                                <span class="create-event-error quantityError ticketQtyError" id="ticketQtyError" style="display: none;"></span>
                                                            </li>
                                                            <li >
                                                                <label for="Quantity">Min Qty</label>
                                                                <input type="text" class="form-control eventFields minquantity"   id="minquantity"   name="minquantity[]" 
                                                                       value="1" >
                                                                <span class="create-event-error minquantityError minQtyError" id="minQtyError" style="display: none;"></span>
                                                            </li>
                                                            <li>
                                                                <label for="Price">Max Qty</label>
                                                                <input type="text" class="form-control eventFields maxquantity"   id="maxquantity"   name="maxquantity[]" 
                                                                       value="9" />
                                                                <span class="create-event-error maxquantityError maxQtyError" id="maxQtyError" style="display: none;"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="change_sale">
                                                        <ul>

                                                            <li>
                                                                <span class='custom-checkbox'>
                                                                    <input type="checkbox"  class="soldout soldoutCheckbox" id="soldout" name="soldOut[]" value="1">
                                                                    <input type='hidden' value='0' name='soldOut[]'>
                                                                </span>

                                                                <h5>Sold out</h5>
                                                                <span class="create-event-error soldOutError" id="soldOutError" style="display: none;"></span>
                                                            </li>
                                                            <li>
                                                                <span class='custom-checkbox'>
                                                                    <input type="checkbox" class="soldout nottodisplayCheckbox"  id="nottodisplay"  name="nottodisplay[]" value="0">
                                                                    <input type='hidden' value='1' name='nottodisplay[]'>
                                                                </span>
                                                                <h5>Not to Display</h5>
                                                                <span class="create-event-error nottodisplayError" id="nottodisplayError" style="display: none;"></span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div> <!--Entire Ticket Div-->
                                    <div class="create_sub">
                                        <button type="button" id="addnewticket" class="addmoretickets btn btn-default btn-md gobtn createeventbuttons add_ticket">Add Ticket</button>
                                    </div>

                                    <div class="form-group" style="padding:35px 0 0 0;margin: 0;">                                     
                                        <h5 style="font-size: 14px;margin-left:25px;line-height: normal;color: #777;">By clicking <b>Save & Exit or Go Live</b>, you agree to our <a href="http://www.meraevents.com/terms" target="_blank">Terms</a> and conditions of MeraEvents.
                                        </h5>
                                    </div>
                                </div>
                                <!--End Step1--> 
                            </div>  
                        </div>
                        <div class="col-xs-12 col-md-4 design_event" >
                            <img src="bannerImageSrc" id="hiddenImg" style="display: none;">

                            <h2 class="title">Design your event</h2>
                            <div class="create-event-error">
                                <ul id="eventBannerErrors"></ul>
                            </div>
                            <div id="bannerImageDiv" class="upload" style="background-image: url('');background-repeat:no-repeat;background-size:300px 100px;">

                                <input type="file" name="bannerImage" id="bannerImage" class="unused"/>
                                <span class="upload_image"  ></span>
                                <span class="upload_image_text"  >Upload Header Image<br>1170 x 370px</span>
                                <div id="removeBanner" style="float:right; width:auto; text-align:right; padding:2px 5px 5px 5px;"> <i class="icon2-times-circle"></i></div>
                            </div>

                            <div class="create-event-error">
                                <ul id="eventLogoErrors"></ul>
                            </div>	  
                            <div id="thumbImageDiv" class="Upload_Thumb" style="background-image: url('  ');background-repeat:no-repeat;background-size:178px 103px;">
                                <input type="file" name="thumbImage" id="thumbImage" class="unused2"/>
                                <span class="upload_image2 "  ></span>
                                <span class="upload_image_text2 "  >Upload Thumbnail<br>350x 200px</span>
                                <div id="removeThumb" style="float:right; width:auto; text-align:right; padding:2px 5px 5px 5px;"><i class="icon2-times-circle"></i></div>
                            </div>

                        </div>
                        <div class="create_eve_btns">
                            <ul>
                                <li>
                                    <button type="submit" id="save" class="btn btn-default btn-md savebtn createeventbuttons">SAVE & EXIT</button>
                                </li>
                                <li>
                                    <button type="submit" id="preview" class="btn btn-default btn-md perviewbtn createeventbuttons">PREVIEW</button>
                                </li>
                                <li>
                                    <button type="submit" id="golive" class="btn btn-default btn-md gobtn createeventbuttons">GO LIVE</button>
                                </li>
                            </ul>
                        </div>                    </form>

                </div>
                <!-- wrap --> 
            </div>   </div>
        <script src="/js/create-event.js"></script>
        <script src="https://static.meraevents.com/js/public/bootstrap-tagsinput.min.js.gz"></script>
        <!--<script src="https://static.meraevents.com/js/public/tags-custom.min.js.gz"></script>-->
        <script src="https://static.meraevents.com/js/public/bootstrap-timepicker.min.js.gz"></script>
        <script src="https://static.meraevents.com/js/public/tinymce/tinymce.min.js.gz"></script>
        <script src="https://static.meraevents.com/js/public/bootstrap-select.min.js.gz"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAn4IGHT0Rtru5-28_g6LOwTfAqCHCk4lM"></script>

@endsection





