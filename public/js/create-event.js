var oldCity = '';
var submitValue = 'save';
$(document).ready(function () {
    $('#createEventForm').validate({
        ignore: [],
        rules: {
            title: {required: true, titlePattern: true, notonlySpecialChars: true, minlength: 5, maxlength: 255},
            description: {required: true, minlength: 50},
            order: {required: true, min: 1},
            categoryId: {required: true},
            subCategoryName: {required: true},
            startDate: {required: true},
            startTime: {required: true},
            endDate: {required: true},
            endTime: {required: true},
            url: {required: true, urlPattern: true},
            venueName: {required: true, maxlength: 255, venuePattern: true},
            country: {required: true},
            state: {required: true},
            city: {required: true},
            venueaddress1: {maxlength: 150, venuePattern: true},
            venueaddress2: {maxlength: 150},
            pincode: {maxlength: 6, number: true},
            bannerImage: {accept: 'image/*', extension: 'jpeg|jpg|png', filesize: 2000000},
            thumbImage: {accept: 'image/*', extension: 'jpeg|jpg|png', filesize: 500000},
            //"ticketName[]": {required: true, ticketNamePattern: true, minlength: 4, maxlength: 75}
        },
        messages: {
            title: {required: "Event title is required.", notonlySpecialChars: "Event title can not have only special charcters", titlePattern: "Event title can contain letters,numbers,space,comma,@, ( , ) , - , _ , ' , + , = , | , : , ; , . , /", minlength: "Event title should be at least 5 character's", maxlength: "Event title should not be more than 255 character's"},
            description: {required: "Event Description is required.", minlength: "Event Description should be at least 50 character's"},
            categoryId: {required: "Event category is required."},
            subCategoryName: {required: "Event subcategory is required."},
            url: {required: "Event Url is required.", urlPattern: "Event Url can contain  a-z , A-Z , - , _ and number's only"},
            venueName: {required: "Event Venue is required.", maxlength: "Event Venue is of maximum 100 characters", venuePattern: "At least one alpha numeric characters required."},
            venueaddress1: {maxlength: "Event Address1 is of maximum 100 characters", venuePattern: "Atleast one alpha numeric characters required."},
            venueaddress2: {maxlength: "Event Address2 is of maximum 100 characters"},
            startDate: {required: "Event State Date is required."},
            startTime: {required: "Event Start Time is required."},
            endDate: {required: "Event End Date is required."},
            endTime: {required: "Event End Time is required."},
            country: {required: "Country is required."},
            state: {required: "State is required."},
            city: {required: "City is required."},
            pincode: {maxlength: "Pincode is  maximum 6 characters.", number: "Pincode should be a number."},
            bannerImage: {required: "Event banner is required", accept: 'choose file of type image', extension: "choose image of type jpg,jpeg,png", filesize: "Image size should be less than 2 MB"},
            thumbImage: {required: "Event thumb is required", accept: 'choose file of type image', extension: "choose image of type jpg,jpeg,png", filesize: "Image size should be less than 500 KB"},
            //"ticketName[]":{required: "Ticket name is required", ticketNamePattern: "Name can contain a-z,A-Z,0-9, _,-,*,@,+,(,),&,%,$,# and comma characters", minlength: "Name should be at least 4 characters", maxlength: "Name should be at most 75 characters"},
        },
        errorPlacement: function (error, element) {
            if (element.attr('id') == 'event_tags') {
                $('#event_tags_error').html(error);
            } else if (element.attr('id') == 'categoryId') {
                $('#categoryError').html(error);
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            if ($('#' + form.id).find('.create-event-error').is(':visible').length > 0) {
                return false;
            }
            //alert(form);
            // check to make sure the form is completely valid
            var eventType = $('input[name="registrationType"]:checked').val();
            //var eventaction = $('#eventedit').val();
//                var errorMessage = "";
//                var bannerErrorMessage = "";
//                var logoErrorMessage = "";
//                var bannerError = 0;
//                var logoError = 0;
            var isValid = true;
            //   if (eventType != 3) {
            isValid = ticketValidations();
            if (isValid == false) {
                return false;
            }
            //}
            if (!urlAvailable) {
                $('#eventUrl').focus();
                return false;
            }
            if ($(form).valid() && isValid && urlAvailable)
            {
                // $scope.submitForm = function (isValid, submitValue) {
                $('#' + submitValue).addClass("loading");
                $('.createeventbuttons').attr("disabled", "disabled");
                $('#' + submitValue).attr("disabled", "disabled");
                $('#eventDataErrors').html('');
                $('#eventDataSuccess').html('');
                var subCategoryName = $.trim($('input[name="subCategoryName"]').val());

                var thumbSrc = $('#thumbImage').attr('thumb-theme-src');

                var bannerSrc = $('#bannerImage').attr('banner-theme-src');

                $('#submitValue').val(submitValue);
                //removing dummy ticket count;
                $('#ticketCount').val($('input[name^="ticketName"]').length - 1);

                var fd = new FormData();
                fd.append('acceptmeeffortcommission', $('#acceptmeeffortcommission').val());
                fd.append('private', $('input[name=private]:checked').val());
                $.each($('#thumbImage')[0].files, function (i, file) {
                    fd.append('thumbImage', file);
                });
                $.each($('#bannerImage')[0].files, function (i, file) {
                    fd.append('bannerImage', file);
                });
                var dummyhtml = $("#dummy-ticket").html();
                //Remove the dummy ticket details
                $("#dummy-ticket").html('');

                var other_data = $('#createEventForm').serializeArray();
                $.each(other_data, function (key, input) {
                    fd.append(input.name, input.value);
                });
                /*var description = tinymce.get('event-desc').getContent();
                 console.log(description);*/
                var description = $('#event-desc').val();
                fd.append("subCategoryName", subCategoryName);
                fd.append("subcategoryId", subCategoryName);
                //Pick a theme related funcitons
                var bannerSrc = $('#bannerImage').attr('banner-theme-src');
                var thumbSrc = $('#thumbImage').attr('thumb-theme-src');
                if (bannerSrc !== undefined) {
                    fd.append('bannerSource', bannerSrc);
                }
                if (thumbSrc !== undefined) {
                    fd.append('thumbSource', thumbSrc);
                }
                var bannerRemove = $('#bannerImage').attr('remove-banner');
                var thumbRemove = $('#thumbImage').attr('remove-thumb');
                if (bannerRemove == 1) {
                    fd.append('removebannerSource', bannerRemove);
                }
                if (thumbRemove == 1) {
                    fd.append('removethumbSource', thumbRemove);
                }
                var tags = $("#event_tags").tagsinput('items');
                var submitURL = api_eventCreate;
                if ($('#eventId').val() > 0) {
                    submitURL = api_eventEdit;
                }
                var url = submitURL;

                $.ajax({
                    method: 'POST',
                    url: url,
                    data: fd,
                    headers: {'Authorization': 'bearer ' + client_ajax_call_api_key},
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: false,
                }).success(function (data, status, headers, config) {
                    if (submitValue == 'save') {

                        $('#eventDataErrors').html('');
                        $("#dummy-ticket").html(dummyhtml);
                        if (typeof (data) != 'undefined') {
                            //    $('#eventDataSuccess').html(data.response.messages[0] || '');
                        }
                        if (typeof (data.response.id) != 'undefined') {
//                    	window.location.href = site_url+'dashboard/event/edit/' +data.response.id;
                            window.location.href = site_url + 'dashboard';
                        } else {
                            return false;
                            //  window.location.reload();
                        }
                    } else if (submitValue == 'golive') {
                        /* Start of Wizrocket Push Code*/
                        var eventTypeVal = $('.event_type .selected input[name="registrationType"]').val();
                        var eventIdVal = data.response.id;
                        var privateval = $("#private1").val() || 0;
                        var eventTitleVal = $('#eventTitle').val();
                        var categoryVal = $('.selectCategory').text();
                        var subcategoryVal = $('#subCategoryName').val();
                        var webinarval = $("#webinar").val() || 0;
                        var cityVal = $('#city').val();
                        var countryVal = $('#country').val();
                        var stateVal = $('#state').val();
                        var pincodeVal = '';
                        wizrocket.event.push("Event Created", {
                            "Event Id": eventIdVal,
                            "Event Type": eventTypeVal,
                            "Event Title": eventTitleVal,
                            "Private Event": privateval,
                            "Category": categoryVal,
                            "Sub Category": subcategoryVal,
                            "Is Webinar": webinarval,
                            "City": cityVal,
                            "Country": countryVal,
                            "State": stateVal

                        });
                        /* End of Wizrocket Push Code*/
                        window.location.href = site_url + 'dashboard';
                    } else if (submitValue == 'preview') {
                        url = site_url + 'previewevent?view=preview&eventId=' + data.response.id;
                        var editurl = site_url + 'dashboard/event/edit/' + data.response.id;
                        //var win = window.open(url, '_blank');
                        //win.focus();
                        // $('#previewEventURL').attr('href', url);
                        // $('#previewEventURL')[0].click();
                        var previewWindow = window.open(url, 'mywindow', 'menubar=1,width=1100,height=600,resizable=yes,scrollbars=yes');
                        previewWindow.focus();
                        $('#' + submitValue).removeAttr("disabled");
                        window.location.href = editurl;

                    } else {
                        window.location.href = site_url;
                    }


                }).error(function (data, status, headers, config) {
                    $('#' + submitValue).removeClass("loading");
                    $('#' + submitValue).removeAttr("disabled");
                    $('.createeventbuttons').removeAttr("disabled");
                    $('#eventDataErrors').html('');
                    $('#eventDataSuccess').html('');
                    if (typeof data.responseJSON.response.messages !== 'undefined') {
                        $.each(data.responseJSON.response.messages, function (key, value) {
                            $('#eventDataErrors').append("<li>" + value + "</li>");
                        });
                        $('html, body').animate({
                            scrollTop: 0}, 100);
                    } else if (typeof data.responseJSON.response.ticketmessages !== 'undefined') {
                        $('html, body').animate({scrollTop: $('.create_eve_tickets').eq(0).position().top}, 'slow');
                        var openTabNotReq = ["ticketType", "ticketName", "order", "price"];
                        $.each(data.responseJSON.response.ticketmessages, function (key, value) {
                            $.each(value, function (key1, value1) {
                                $('.' + key1 + 'Error').eq(key).text(value1);
                                $('.' + key1 + 'Error').eq(key).show();
                                if ($.inArray(key1, openTabNotReq) == -1 && !$('#setting_content' + key).is(":visible")) {
                                    $('#setting_content' + key).slideToggle('slow')
                                }
                            });
                            //  $('#eventDataErrors').append("<li>" + value + "</li>");
                        });
                    }
                    $("#dummy-ticket").html(dummyhtml);

                });
            }
            return false; // prevent normal form posting
        },
        invalidHandler: function (form, validator) {
            var errors = validator.numberOfInvalids();
            var errs = [];
            $.each($(validator.errorList), function (k, v) {
                errs.push(v.element.id);
                if (v.element.id == 'state' || v.element.id == 'city' || v.element.id == 'country') {
                    $('#address').css('display', 'block');
                }

            });
            if (errors) {
                var firstInvalidElement = $(validator.errorList[0].element);
                if (firstInvalidElement.attr('name') == 'categoryId') {
                    firstInvalidElement = $(validator.errorList[1].element);
                }
                if (firstInvalidElement.attr('name') == 'description') {
                    tinyMCE.activeEditor.focus();
                    $('html, body').animate({scrollTop: $('#eventTitle').position().top}, 'slow');
                } else if (firstInvalidElement.attr('name') == 'title') {
                    //tinyMCE.activeEditor.focus();
                    $('html, body').animate({scrollTop: $('#eventTitle').position().top}, 'slow');
                    firstInvalidElement.focus();
                } else if (firstInvalidElement.attr('name') == 'city' || firstInvalidElement.attr('name') == 'state' || firstInvalidElement.attr('name') == 'country') {
                    //tinyMCE.activeEditor.focus();
                    $('#address').css('display', 'block');
                    var errorId = $('.error:visible:first').siblings('input').attr('id');
                    $('#' + errorId).focus();
                    firstInvalidElement.focus();
                    $('html, body').animate({scrollTop: $('#address').position().top}, 'slow');
                } else {
                    if (firstInvalidElement.attr('name') == 'url') {
                        $('#checkUrlAvail').hide();
                    }
                    //   var errorId = $('.error:visible:first').attr('id');
                    $('html, body').animate({scrollTop: $('#' + firstInvalidElement.attr('id')).offset().top - 100}, 'slow');
                    /*     var errorId = $('.error:visible:first').siblings('input').attr('id');
                     $('#'+errorId).focus();
                     $('html, body').animate({scrollTop: $('#' + errorId).offset().top - 100}, 'slow');*/
                }


            }
        },
    });

    $.validator.addMethod("titlePattern", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9@()-\\'_+=\s|:;./]+$/.test(value);
    }, 'Please enter a valid value.');

    $.validator.addMethod("urlPattern", function (value, element) {
        return this.optional(element) || /^[0-9a-zA-Z\_\-]+$/.test(value);
    }, 'Please enter a valid value.');

    $.validator.addMethod("venuePattern", function (value, element) {
        return this.optional(element) || /^(?=.*[a-zA-z0-9]).+$/.test(value);
    }, 'Please enter a valid value.');

    $.validator.addMethod('filesize', function (value, element, param) {
        // param = size (en bytes) 
        // element = element to validate (<input>)
        // value = value of the element (file name)
        return this.optional(element) || (element.files[0].size <= param);
    });
    //descRequired
    $.validator.addMethod('ticketNamePattern', function (value, element) {
        return this.optional(element) || /^[0-9a-zA-Z \$\%\#\&\_\-\*\@\+\,\(\)]+$/.test(value);
    });

    //only special chars not allowed in textbox/textarea
    $.validator.addMethod("notonlySpecialChars", function (value, element) {
        if (value == '') {
            return true;
        } else {
            var regEx = /[0-9a-zA-Z]/;
            if (regEx.test(value)) {
                return true;
            } else {
                return false;
            }
        }
    }, "Please enter valid input");



    $('#acceptmeeffortcommission').change(function () {
        additionalCommission();
    });
});
$('#bannerImage').on('click', function () {
    this.files = null;
    this.value = '';
    // $("#bannerImage").removeAttr('banner-theme-src');
    setTimeout(function () {
        $(this).trigger('change');
    }, 10);

});
$('#thumbImage').on('click', function () {
    // $("#bannerImage").removeAttr('banner-theme-src');
    this.files = null;
    this.value = '';
    setTimeout(function () {
        $(this).trigger('change');
    }, 10);
    ;

});
$('#bannerImage').on('change', function () {
    var files = !!this.files ? this.files : [];
    if (!files.length || !window.FileReader) {
        return; // no file selected, or no FileReader support
    }
    if (/^image/.test(files[0].type)) {
        // only image file
        if (files[0].type == 'image/jpeg' || files[0].type == 'image/jpg' || files[0].type == 'image/png') {
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                //	alert('hgsfhg');
                $("#bannerImageDiv").css("background-image", "url(" + this.result + ")");
                $("#bannerImage").removeAttr('banner-theme-src');
                $("#bannerImage").removeAttr('remove-banner');
                $('.upload_image,.upload_image_text').hide();
                $('#bannerImage').valid();
            };
            //   $(this).removeAttr('banner-theme-src');
            $('#eventBannerErrors').hide();
        }

    }

});
$('#thumbImage').on('change', function () {
    var files = !!this.files ? this.files : [];
    if (!files.length || !window.FileReader)
        return; // no file selected, or no FileReader support

    if (/^image/.test(files[0].type)) { // only image file
        if (files[0].type == 'image/jpeg' || files[0].type == 'image/jpg' || files[0].type == 'image/png') {
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#thumbImageDiv").css("background-image", "url(" + this.result + ")");
                $("#thumbImage").removeAttr('thumb-theme-src');
                $("#thumbImage").removeAttr('remove-thumb');
                $('.upload_image2,.upload_image_text2').hide();
                $('#thumbImage').valid()
            };
            // $(this).removeAttr('thumb-theme-src');
            $('#eventLogoErrors').hide();
        }
    }
    //$('#thumbImageDiv').css('background-image', "url(" + this.value + ")");
});
function categoryChanged(catId, catName, catstatus, themeColor) {
    //   $scope.selectedCategoryId = catId;
    $('#categoryId').val(catId);
    // var result = $filter('filter')($scope.categoryList, catName);
    //     var themeColor = result[0].themecolor;
    $('#categoryError').text('');
    $('#categoryId').val(catId);
    $('#event_tags').tagsinput('add', catName.toLowerCase());
    var addedCategories = $('#addedCategories').val();
    if (addedCategories != '' && catName != addedCategories) {
        $('#event_tags').tagsinput('remove', addedCategories.toLowerCase());
        $('#event_tags').tagsinput('remove', addedCategories.toLowerCase());
    }
    addedCategories = catName;
    $('#addedCategories').val(addedCategories);
    $('.subselectCategory').text('Select a Sub Category').append('<span class="icon-downArrow"></span>');
    $('.selectCategory').text(catName).append('<span class="icon-downArrow"></span>');
    var ele = $('.create_eve_dropdowns a.dropdown-togglep');
    ele.css('background', themeColor);
    var bg = $('.design_event .Upload_Thumb').css('background-image');
    bg = bg.replace('url("', '').replace('")', '');
    if ($('.design_event .Upload_Thumb').css('background-image') == "none" || bg == window.location.href || bg == $('#cloudPath').val()) {
        var ele = $('.design_event .Upload_Thumb');
        ele.css('background', themeColor);
    }
    var bg = $('.design_event .upload').css('background-image');
    bg = bg.replace('url("', '').replace('")', '');
    if ($('.design_event .upload').css('background-image') == "none" || bg == window.location.href || bg == $('#cloudPath').val()) {
        var ele = $('.design_event .upload');
        ele.css('background', themeColor);
    }

    var oldSubcatLength = oldSubcat.length;
    for (var osc = 0; osc < oldSubcatLength; osc++) {
        $('#event_tags').tagsinput('remove', oldSubcat[osc].toLowerCase());
    }
    $('#subCategoryName').val('');
    $('#subCategoryName').focus();

}
$(function () {
    oldCity = $('#city').val();
    initialize();
    //    customCheckbox();


    $("body").on("click", ".settingsIcosn", function (e) {

        var countryName = $('#country').val();
        var stateName = $('#state').val();
        var cityName = $('#city').val();
        $(this).parents("ul").find("div.setting_content").slideToggle('slow');
    });

    $('#div_ticketwidget').on('change', '.soldoutCheckbox', function () {

        if ($(this).is(':checked')) {
            $(this).next().remove();
            $(this).parent().addClass("selected");
        } else {
            $(this).parent().removeClass("selected");
            var elementType = $(this).next().attr('type');
        }

    });
    $('#div_ticketwidget').on('change', '.nottodisplayCheckbox', function () {
        if ($(this).is(':checked')) {
            $(this).next().remove();
            $(this).parent().addClass("selected");
        } else {
            $(this).parent().removeClass("selected");
            var elementType = $(this).next().attr('type');

        }

    });
    $('#div_ticketwidget').on('change', '.taxCheckBox', function () {
        if (typeof ($(this).attr('ticketsold')) == 'undefined') {
            if ($(this).is(':checked')) {
                $(this).attr('checked', 'checked');
                $(this).parent().addClass("selected");
            } else {
                $(this).removeAttr('checked');
                $(this).parent().removeClass("selected");
                return false;
            }
        } else {
            return false;
        }
    });

    //setting the tags on changes of subcategory, city
    $("#subCategoryName").blur(function () {

        if ($(this).val() != '') {
            var subcatNewTitleArray = [$.trim($(this).val())];
//            if ($(this).val().indexOf('-') > -1) {
//                subcatNewTitleArray = $(this).val().split("-");
//            } else 
            if ($(this).val().indexOf('&') > -1 || $(this).val().indexOf(',') > -1) {
                //subcatNewTitleArray = $(this).val().split("&");
                var subcatNewTitleArray = [];
                $.each($(this).val().replace(",", "&").split("&"), function (key, value) {
                    if (value.indexOf(',') > -1) {
                        $.each(value.split(","), function (key1, value1) {
                            subcatNewTitleArray.push($.trim(value1));
                        });
                    } else {
                        subcatNewTitleArray.push($.trim(value));
                    }
                });
            }
            var oldSubcatLength = oldSubcat.length;
            for (var osc = 0; osc < oldSubcatLength; osc++) {
                if ($('#addedCategories').val() != oldSubcat) {
                    $('#event_tags').tagsinput('remove', oldSubcat[osc].toLowerCase());
                }
            }
            if ($.isArray(subcatNewTitleArray)) {
                var tagLength = subcatNewTitleArray.length;
                for (var tg = 0; tg < tagLength; tg++) {
                    $('#event_tags').tagsinput('add', subcatNewTitleArray[tg].toLowerCase());
                }
            } else {
                $('#event_tags').tagsinput('add', subcatNewTitleArray.toLowerCase());
            }
            oldSubcat = subcatNewTitleArray;
            var readonly = $('#eventUrl').attr('readonly');
            if (typeof readonly === typeof undefined && readonly === false) {
                $('#eventUrl').focus();
            } else {

            }

        }
    });
    $('#eventUrl').keyup(function () {
        $(this).valid();
        if ($(this).hasClass('error')) {
            $('#checkUrlAvail').hide();
        }
    });
    $('#city').blur(function () {
        var countryValid = $('#country').valid();
        var stateValid = $('#state').valid();
        if ($(this).val().toLowerCase().length > 0) {
            $('#event_tags').tagsinput('remove', oldCity.toLowerCase());
            $('#event_tags').tagsinput('remove', oldCity.toLowerCase());
            $('#event_tags').tagsinput('add', $(this).val().toLowerCase());
        }
        oldCity = $(this).val();
        if ($('#country').val() == '') {
            $('#state').val();
            $(this).val('');
            $('#country').focus();
        } else if ($('#state').val() == '') {
            $(this).val('');
            $('#state').focus();
        } else {
            if ($(this).val() != '') {
                $('#pincode').val('');
                $('#pincode').focus();
            }
        }
        /*if ($('#start_date').is(':disabled')) {
         $('#end_date').focus();
         } else {
         $('#start_date').focus();
         }*/
    });

    $("#subCategoryName").keyup(function (e) {
        var subCatvValu = $(this).val();
        subCatvValu = subCatvValu.replace(/[0-9]/g, "");
        subCatvValu = subCatvValu.replace(/[!@#$^#()$~%'":*?<>{}=]/g, '');
        $('#subCategoryName').val(subCatvValu);

    });

    if ($('#eventId').val() == 0) {
        var eventDate = jqNowDate();
        $('#start_date').val(eventDate);
        $('#end_date').val(eventDate);
    }

    //$('#event_tags').tagsinput();
});//Main function
$(document).on('click', '#clearVenue', function (e) {
    e.preventDefault();
    var empty = ''
    document.getElementById('eventVenue').value = empty;
    document.getElementById('eventAddress1').value = empty;
    document.getElementById('eventAddress2').value = empty;
    document.getElementById('city').value = empty;
    document.getElementById('state').value = empty;
    document.getElementById('country').value = empty;
    $('#event_tags').tagsinput('remove', oldCity.toLowerCase());
    $('#eventVenue').focus();
    oldCity = '';
    if ($('.addAdd').html() == '-') {
        $('.addAdd').html('+');
        $('.add_address').toggle('fast');
    }
});
$(function () {

    $("#editurl").hide();
    $("#eventVenue").delay(800).css({backgroundColor: 'none !important;'});

    $('#start_date').datepicker({
        minDate: new Date(),
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "mm/dd/yy",
        onClose: function (selectedDate) {
            $('.setting_content').hide();
            $('#start_date').datepicker("setDate", selectedDate);
            $('#end_date').datepicker("option", "minDate", selectedDate);
            $('.event_end_date,.edit_event_end_date').datepicker('option', 'maxDate', $('#end_date').val());
            changeTicketEndDate(selectedDate);
        }
    });
    $('#end_date').datepicker({
        minDate: new Date(),
        defaultDate: "0",
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "mm/dd/yy",
        onClose: function (selectedDate) {
            $('#end_date').datepicker("setDate", selectedDate);
            $('.event_end_date,.edit_event_end_date').datepicker('option', 'maxDate', selectedDate);
            var defdate = defaultDates();
            var eventstartdatetime = new Date(Date.parse($('#start_date').val() + " " + $('#event_start').val()));
            var eventenddatetime = new Date(Date.parse(defdate.currentdate + " " + defdate.defaultstarttime));
            if (eventstartdatetime < eventenddatetime) {
                changeTicketEndDate(selectedDate);
            }
        }
    });

    if ($('#eventId').val() == 0) {
        initailizeDates();
        $('#event_start').timepicker().on('changeTime.timepicker', function (e) {
            $('.event_end_time').timepicker('setTime', e.time.value);
        });
        $('.ticketType option[value="2"]').attr('selected', 'selected');

    }
    //edit event
    if ($('#eventId').val() > 0) {
        if ($('#userType').val() !== 'undefined' && $('#userType').val() != "superadmin") {
            $("#end_date").datepicker("option", "minDate", new Date());
        }
        $("#event_end, .event_end_time, #event_start,.event_start_time").timepicker();
        /* //change ticket end time based on event start time 
         $('#event_start').timepicker().on('changeTime.timepicker', function (e) {
         $('.event_end_time').timepicker('setTime', e.time.value);
         });*/
        $('.event_start_date').datepicker({
            minDate: new Date(),
            defaultDate: new Date(),
            onClose: function (selectedDate) {
                var id = $(this).attr('id');
                $('#' + id).datepicker("setDate", selectedDate);
                var enddateId = id.split('startdate');
                $('#enddate' + enddateId[1]).datepicker("option", "minDate", selectedDate);
            }
        });
        $(".edit_event_end_date").datepicker({minDate: new Date(), defaultDate: new Date(), maxDate: $('#end_date').val()});
        var eventstartdate = $('#start_date').val();
        //   var eventstartTime = $('#event_start').val();
        if (new Date(eventstartdate) < new Date()) {
            $("#start_date").datepicker("option", "minDate", eventstartdate);
        }
        // $("#start_date").datepicker('setDate', eventstartdate);
        //  $("#event_start").val(eventstartTime);

        //  var eventenddate = $('#end_date').val();
        // var eventendtime = $('#event_end').val();
        // $("#end_date").datepicker('setDate', eventenddate);
        //   $("#event_end").val(eventendtime);


        if (eventStatus == 1) {
            $('input[name="url"]').attr("readonly", "readonly");
            $("#editurl").show();
        }
//        $('.event_start_date').datepicker('option', 'onClose', function (selectedDate) {
//            var id = $(this).attr('id');
//            $('#' + id).datepicker("setDate", selectedDate);
//            var enddateId = id.split('startdate');
//            $('#enddate' + enddateId[1]).datepicker("option", "minDate", selectedDate);
//        });

        $('.event_type .custom-radio').each(function () {
            if ($(this).hasClass('selected')) {
                var seltypeval = $(this).children(".selecteventtype").val();
                if (seltypeval == 3) {
                    $("#div_ticketwidget").hide();
                    $("#ticketsalebtn").hide();
                    $('#addnewticket').hide();
                } else {
                    $("#div_ticketwidget").show();
                    $("#ticketsalebtn").show();
                    $('#addnewticket').show();
                }
                if (seltypeval == 1) {
                    $(".taxCheckBox").hide();
                } else {
                    $(".taxCheckBox").show();
                }
            }
        });
        $('#subCategoryName').trigger('blur');
        //edit event set event min end date to event start date 
        $('#end_date').datepicker('option', 'minDate', eventstartdate);
    }


});
function  changeTicketEndDate(selectedDate) {
    $('.event_end_date').datepicker('setDate', selectedDate);
}
function initailizeDates() {

    $("#event_start").timepicker({
        defaultTime: "9:00 AM",
    });
    $("#event_end").timepicker({
        defaultTime: "6:00 PM"
    });

    var $datepicker = $('#startdate0');
    var eventstartdate = $('#start_date').val();
    //var d = new Date();
    $('#enddate0').datepicker();
    $('#enddate0').datepicker("option", "minDate", new Date());
    $('#enddate0').datepicker('setDate', eventstartdate);
    $datepicker.datepicker();
    $datepicker.datepicker('option', 'minDate', new Date());
    $datepicker.datepicker('setDate', new Date());
    $datepicker.datepicker('option', 'onClose', function (selectedDate) {
        //  $('.setting_content').hide();
        $('#startdate0').datepicker("setDate", selectedDate);
        $('#enddate0').datepicker("option", "minDate", selectedDate);
        // changeTicketEndDate(selectedDate);
    });
    $('#starttime0').timepicker();
    $('#endtime0').timepicker();
}

/* Functions for Filling google address */

var placeSearch, autocomplete;
var componentForm = {
    neighborhood: 'long_name',
    premise: 'long_name',
    route: 'long_name',
    sublocality_level_1: 'long_name',
    sublocality_level_2: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'long_name',
    country: 'long_name'
};

function initialize() {
    // Create the autocomplete object, restricting the search
    // to geographical location types.

    var map = new google.maps.Map(document.getElementById('eventVenue'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var input = (document.getElementById('eventVenue'));

    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var autocomplete = new google.maps.places.Autocomplete((input));

    /* autocomplete = new google.maps.places.Autocomplete(
     (document.getElementById('locationInputField')),
     { types: ['geocode'] });*/
    // When the user selects an address from the dropdown,
    // populate the address fields in the form.
    google.maps.event.addListener(autocomplete, 'place_changed', function () {

        var place = autocomplete.getPlace();
        fillInAddress(place);
        setTimeout(function () {
            $('#address').show();
            $('.addAdd').html('-');
            $('#eventAddress1').focus();

        }, 500);
    });

}

// [START region_fillform]
function fillInAddress(place) {
    $('.add_address').toggle('fast');
    $('.setting_content').hide();
    if ($('.addAdd').html() == '+') {
        $('.addAdd').html('-');
    } else {
        $('.addAdd').html('+');
    }

    for (var component in componentForm) {
        //console.log(component);
        if ($.inArray(component, ignoreArray) > -1) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }
    }
    if (place.length == 0) {
        return;
    }
    var ignoreArray = ['route', 'sublocality_level_2', 'premise'];

    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    var pincode = place.address_components[place.address_components.length - 1].long_name;
    var adddressObj = {};
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            adddressObj[addressType] = val;
        }
    }
//    console.dir(adddressObj);
    var venue = '';
    var addr1 = '';
    var addr2 = '';
    var state = '';
    var city = '';
    venue = place.name;
    if (adddressObj.administrative_area_level_1) {
        state = adddressObj.administrative_area_level_1;
    }

    if (adddressObj.locality) {
        city = adddressObj.locality;
    }

    if (adddressObj.premise && venue == '') {
        venue = adddressObj.premise;
    }

    if (adddressObj.route) {
        addr1 += adddressObj.route + ', ';
        if (venue == '') {
            venue = adddressObj.route;
        }
    }
    if (adddressObj.neighborhood) {
        addr1 += adddressObj.neighborhood + ', ';
        if (venue == '') {
            venue = adddressObj.neighborhood;
        }
    }

    if (adddressObj.sublocality_level_1) {
        addr2 += adddressObj.sublocality_level_1 + ', ';
        if (venue == '') {
            venue = adddressObj.sublocality_level_1;
        }
    }
    if (adddressObj.sublocality_level_2) {
        addr2 += adddressObj.sublocality_level_2 + ', ';
        if (venue == '') {
            venue = adddressObj.sublocality_level_2;
        }
    }

    if (addr1.length > 0) {
        addr1 = addr1.substr(0, addr1.length - 2);
    }
    if (addr2.length > 0) {
        addr2 = addr2.substr(0, addr2.length - 2);
    }

    if ($.trim(venue) == '') {
        venue = city;
        if ($.trim(addr1) != '') {
            venue = addr1;
        }
    }
    if ($.trim(addr1) == '') {
        addr1 = city;
        if ($.trim(addr2) != '') {
            addr1 = addr2;
            addr2 = "";
        }
    }
    if (pincode && !isNaN(pincode)) {
        document.getElementById('pincode').value = pincode;
    }
    document.getElementById('eventVenue').value = venue;
    document.getElementById('eventAddress1').value = addr1;
    document.getElementById('eventAddress2').value = addr2;
//    document.getElementById('city_value').value = city;
//    document.getElementById('state_value').value = state;
//    document.getElementById('country_value').value = adddressObj.country;
    document.getElementById('city').value = city;
    document.getElementById('state').value = state;
    document.getElementById('country').value = adddressObj.country;
    $('#event_tags').tagsinput('remove', oldCity.toLowerCase());
    $('#event_tags').tagsinput('add', city.toLowerCase());
    $('#eventAddress1').focus();
    $('#city').valid();
    $('#country').valid();
    $('#state').valid();
    var latitude = place.geometry.location.lat();
    var longitude = place.geometry.location.lng();
    $('#latitude').val(latitude);
    $('#longitude').val(longitude);

    oldCity = city;
    var country = adddressObj.country;
    var data = {};
    data.keyWord = country;
    url = api_countrySearch;
    $.ajax({
        method: 'GET',
        url: url,
        data: data,
        headers: {'Content-Type': 'application/x-www-form-urlencoded',
            'Authorization': 'bearer 930332c8a6bf5f0850bd49c1627ced2092631250'}
    }).success(function (data) {
        gettaxes();
        if (data.response.total > 0) {
            var countryId = data.response.countryList[0].id;
            var data = {};
            data.countryId = countryId;
            url = api_countryDetails;
            $.ajax({
                method: 'GET',
                url: url,
                data: data,
                headers: {'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': 'bearer 930332c8a6bf5f0850bd49c1627ced2092631250'}
            }).success(function (data) {
                var timeZoneId = data.response.timezoneId;
                if (timeZoneId) {
                    $("#timeZoneId > [value=" + timeZoneId + "]").attr("selected", "true");
                } else {
                    alert('No TimeZone');
                }

            }).error(function (data) {
                alert('Something went wrong please try again');
            });
        } else {
            alert('No Country');
        }
    }).error(function (data) {
        alert('Something went wrong please try again');
    });



}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = new google.maps.LatLng(
                    position.coords.latitude, position.coords.longitude);
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}

