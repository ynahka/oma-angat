<script type="text/javascript">
$(function() {
    $(".fixTable").tableHeadFixer();

    $("#txtorderlistPageCount").val("1");
    $("#txtsearchorder").keyup(function(e) {
        if ($('#txtsearchorder').val() == "") {
            $("#txtorderlistPageCount").val("1");
            displayorderslist();
        } else {
            $("#txtorderlistPageCount").val("1");
            displayorderslist();
        }
    });
    displayorderslist();
    $(".contactnum").inputmask("+63 999-999-9999");

    $(".date-picker").datepicker({
        autoHide: true,
        format: 'mm/dd/yyyy',
        todayHighlight: true
    });
});

function reqField1(classN) {
    var isValid = 1;
    $('.' + classN).each(function() {
        if ($(this).val() == '') {
            $(this).css('border', '1px #a94442 solid');
            $(this).addClass('lala');
            isValid = 0;
        } else {
            $(this).css('border', '');
            $(this).removeClass('lala');
        }
    });

    return isValid;
}

function displayorderslist() {
    var srchprod = $("#txtsearchorder").val();
    var page = $("#txtorderlistPageCount").val();
    var orderstat = $("#filterselectorderstat").val();
    var datefrom = $("#txtsearchfilterdatefrom").val();
    var dateto = $("#txtsearchfilterdateto").val();
    $.ajax({
        type: 'POST',
        url: 'orders/class.php',
        data: 'srchprod=' + srchprod + '&page=' + page + '&orderstat=' + orderstat + '&datefrom=' + datefrom +
            '&dateto=' + dateto + '&form=displayorderslist',
        success: function(data) {
            var arr = data.split("|");
            $("#tblorderlist").html(arr[0]);
            $("#txttotorders").text(arr[1]);
            loadorderslistPagination();
        }
    })
}

function loadorderslistPagination() {
    var srchprod = $("#txtsearchorder").val();
    var page = $("#txtorderlistPageCount").val();
    var orderstat = $("#filterselectorderstat").val();
    var datefrom = $("#txtsearchfilterdatefrom").val();
    var dateto = $("#txtsearchfilterdateto").val();
    $.ajax({
        type: 'POST',
        url: 'orders/class.php',
        data: 'srchprod=' + srchprod + '&page=' + page + '&orderstat=' + orderstat + '&datefrom=' + datefrom +
            '&dateto=' + dateto + '&form=loadorderslistPagination',
        success: function(data) {
            var arr = data.split("|");
            if (arr[1] != 1) {
                $("#uporderlistPageList").html(arr[0]);
            } else {
                $("#uporderlistPageList").html("");
            }
        }
    })
}

function orderlistPageFunc(page, pagenums) {
    $(".pgnumorderlistPageFunc").removeClass("active");
    $("#pgorderlistPageFunc" + pagenums).addClass("active");
    $("#txtorderlistPageCount").val(page);
    displayorderslist();
}



// $('.closebtn').click(function(){
//     location.reload()
// })

function modalopenorderdet(product_id, order_id, customer_id) {
    $("#mdlopenorderdet").modal('show');

    $.ajax({
        type: 'POST',
        url: 'orders/class.php',
        data: 'product_id=' + product_id + '&order_id=' + order_id + '&customer_id=' + customer_id +
            '&form=fncdsplyorderinfo',
        success: function(data) {
            var arr = data.split("|");
            $("#prodbuynowimg").html(arr[0]);
            $("#txtprodbuynowname").text(arr[1]);
            $("#txtprodbuynowqty").text(arr[6]);
            $("#txtprodbuynowprice").text(arr[7]);
            $("#txtprodcommonname").text(arr[2]);
            $("#txtprodlatinname").text(arr[3]);
            $("#txtprodtype").text(arr[4]);
            $("#txtprodfamilyname").text(arr[5]);

            $("#txtprodbuynowuser").text(arr[11]);
            $("#txtprodbuynowphone").text(arr[12]);
            $("#txtprodbuynowadd").text(arr[13]);
            $("#txtLat").val(arr[14]);
            $("#txtLong").val(arr[15]);

            if (arr[10] == "CASH") {
                $("#txtorddetpaymenttype").text("Cash On Delivery");
                $("#txtpaymentcaption").text("Recieve payment when orders are delivered.");
                $(".gcashpayment").addClass("hide");
            } else if (arr[10] == "COP") {
                $("#txtorddetpaymenttype").text("Cash On Pick-Up");
                $("#txtpaymentcaption").text("Recieve payment when orders are picked-up.");
                $(".gcashpayment").addClass("hide");
            } else {
                $("#txtorddetpaymenttype").text("GCASH");
                $("#txtpaymentcaption").text("Check your GCASH Account.");
                $(".gcashpayment").removeClass("hide");
            }

            var textprodprice = (arr[7]).replace(/,/g, "");
            var subtotamt = (textprodprice * arr[6]);

            $("#txtprodbuynowsubtotal").text(parseFloat(subtotamt).toFixed(2).replace(
                /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            $("#txtprodbuynowshipfee").text(arr[8]);
            $("#txtprodbuynowtotal").text(arr[9]);

            $("#dsplybuttonfooter").html(arr[16]);

            $("#prodbuynowgcashimg").html(arr[18]);
            $("#txtprodbuynowrefnum").text(arr[17]);

            //alert(arr[19])
            $('.order-track-text-sub1').text(arr[20])
            $('.order-track-text-sub3').text(arr[21])
            $('.order-track-text-sub4').text(arr[22])
            $('.order-track-text-sub5').text(arr[23])
            // Function Tracking Delivery Status

            $('.courierdata').text(arr[24])
            $('.trackingnumberdata').text(arr[25])


            // Check if courier and tracking number are already present
            var existingCourier = $('.courierdata').text();
            var existingTrackingNumber = $('.trackingnumberdata').text();

            if (existingCourier !== '' && existingTrackingNumber !== '') {
                // Update the status directly
                if (arr[10] == "CASH" || arr[10] == "COP") {
                    $('.order-track-text-statstatus').text('Pending');
                    $('.order-track-text-stat1, .order-track-text-stat3, .order-track-text-stat4, .order-track-text-stat5')
                        .css('color', 'red');
                    $('.couriercontainer, .readytodeliver').css('display', 'none');
                    $('.dsplybuttonfooter').css('display', 'unset');
                } else {
                    $('.order-track-text-statstatus').text('To Pay');
                    $('.order-track-text-stat1').css('color', 'red');
                    $('.couriercontainer, .readytodeliver').css('display', 'none');
                    $('.dsplybuttonfooter').css('display', 'unset');
                }


            } else {
                // If courier and tracking number are not present, continue with the existing logic
                if (arr[10] == "CASH") {
                    $('.order-track-text-statstatus').text('Pending')

                    if (arr[19] == 'PENDING') {
                        $('.order-track-text-stat1').css('color', 'red')

                        $('.couriercontainer').css('display', 'none')
                        $('.readytodeliver').css('display', 'none')
                        $('.dsplybuttonfooter').css('display', 'unset')

                    } else if (arr[19] == 'TOSHIP') {
                        $('.order-track-text-stat1').css('color', 'red')
                        $('.order-track-text-stat3').css('color', 'red')

                        $('.couriercontainer').css('display', 'unset')
                        $('.readytodeliver').css('display', 'unset')
                        $('.dsplybuttonfooter').css('display', 'none')

                    } else if (arr[19] == 'TODELIVER') {
                        $('.order-track-text-stat1').css('color', 'red')
                        $('.order-track-text-stat3').css('color', 'red')
                        $('.order-track-text-stat4').css('color', 'red')

                        $('.couriercontainer').css('display', 'none')
                        $('.readytodeliver').css('display', 'none')
                        $('.dsplybuttonfooter').css('display', 'unset')


                    } else if (arr[19] == 'COMPLETED') {
                        $('.order-track-text-stat1').css('color', 'red')

                        $('.order-track-text-stat3').css('color', 'red')
                        $('.order-track-text-stat4').css('color', 'red')
                        $('.order-track-text-stat5').css('color', 'red')

                        $('.couriercontainer').css('display', 'none')
                        $('.readytodeliver').css('display', 'none')
                        $('.dsplybuttonfooter').css('display', 'unset')
                    }
                } else {
                    $('.order-track-text-statstatus').text('To Pay')

                    if (arr[19] == 'TOPAY') {

                        $('.order-track-text-stat1').css('color', 'red')

                        $('.couriercontainer').css('display', 'none')
                        $('.readytodeliver').css('display', 'none')
                        $('.dsplybuttonfooter').css('display', 'unset')

                    } else if (arr[19] == 'TOSHIP') {
                        $('.order-track-text-stat1').css('color', 'red')

                        $('.couriercontainer').css('display', 'unset')
                        $('.readytodeliver').css('display', 'unset')
                        $('.dsplybuttonfooter').css('display', 'none')

                        $('.order-track-text-stat3').css('color', 'red')
                    } else if (arr[19] == 'TODELIVER') {
                        $('.order-track-text-stat1').css('color', 'red')

                        $('.order-track-text-stat3').css('color', 'red')
                        $('.order-track-text-stat4').css('color', 'red')

                        $('.couriercontainer').css('display', 'none')
                        $('.readytodeliver').css('display', 'none')
                        $('.dsplybuttonfooter').css('display', 'unset')




                    } else if (arr[19] == 'COMPLETED') {
                        $('.order-track-text-stat1').css('color', 'red')

                        $('.order-track-text-stat3').css('color', 'red')
                        $('.order-track-text-stat4').css('color', 'red')
                        $('.order-track-text-stat5').css('color', 'red')

                        $('.couriercontainer').css('display', 'none')
                        $('.readytodeliver').css('display', 'none')
                        $('.dsplybuttonfooter').css('display', 'unset')
                    }
                }
            }
        },
        complete: function() {
            geocodesearching();
        }
    })
}



// function inputrequired() {
//     if ($('.courier').val() == '' || $('.trackingnumber').val() == '') {
//         $('.dsplybuttonfooter').css('display', 'none')
//         $('.readytodeliver').css('display', 'unset')
//     } else {
//         $('.dsplybuttonfooter').css('display', 'unset')
//         $('.readytodeliver').css('display', 'none')
//     }
// }

function inputrequired() {
    var courierValue = $('.courier').val();
    var trackingNumberValue = $('.trackingnumber').val();

    if (courierValue === '' || trackingNumberValue === '') {
        $('.dsplybuttonfooter').css('display', 'none');
        $('.readytodeliver').css('display', 'unset');
    } else {
        $('.dsplybuttonfooter').css('display', 'unset');
        $('.readytodeliver').css('display', 'none');
    }
}

function geocodesearching() {
    var geocoder = new google.maps.Geocoder();
    if ($("#txtprodbuynowadd").text() == "" || $("#txtprodbuynowadd").text() == null) {
        var address = "";
    } else {
        var address = $("#txtprodbuynowadd").text();
    }
    var lat = document.getElementById("txtLat").value;
    var lng = document.getElementById("txtLong").value;
    geocoder.geocode({
        'address': address
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
            initialize(lat, lng);
            // $("#txtLat").val(latitude);
            // $("#txtLong").val(longitude);
        } else {
            initialize(lat, lng);
        }
    });
}

function initialize(latitude, longitude) {
    var latlng = new google.maps.LatLng(latitude, longitude);
    var myOptions = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        draggable: true
    });

    google.maps.event.addListener(marker, 'dragend', function(evt) {
        $("#txtLat").val(evt.latLng.lat());
        $("#txtLong").val(evt.latLng.lng());
    });

    google.maps.event.addListener(marker, 'drag', function(evt) {
        console.log("marker is being dragged");
    });
}

function viewvalidIDphoto(payimg) {
    $("#mdlviewpaymentphoto").modal('show');
    $('#viewpaymentimg').attr("src", payimg);
}

function pendingapprove(order_id) {
    $(".preloader").show().css('background', 'rgba(255,255,255,0.5)');
    $.ajax({
        type: 'POST',
        url: 'orders/class.php',
        data: 'order_id=' + order_id + '&form=pendingapprove',
        success: function(data) {
            setTimeout(function() {
                $(".preloader").hide().css('background', '');
                $("#mdlopenorderdet").modal('hide');
                displayorderslist();
            }, 1500);
        }
    })
}

function topayapprove(order_id, paymentstat) {
    if (paymentstat == "FORAPPROVAL") {
        Swal.fire(
            'ALERT!',
            'Payment still for approval. Cannot Proceed.',
            'warning'
        )
    } else {
        $(".preloader").show().css('background', 'rgba(255,255,255,0.5)');
        $.ajax({
            type: 'POST',
            url: 'orders/class.php',
            data: 'order_id=' + order_id + '&form=topayapprove',
            success: function(data) {
                setTimeout(function() {
                    $(".preloader").hide().css('background', '');
                    $("#mdlopenorderdet").modal('hide');
                    displayorderslist();
                }, 1500);
            }
        })
    }
}

// function toshipapprove(order_id) {
//     $(".preloader").show().css('background', 'rgba(255,255,255,0.5)');

//     courier = $('.courier').val();
//     trackingnumber = $('.trackingnumber').val();
//     $.ajax({
//         type: 'POST',
//         url: 'orders/class.php',
//         data: 'order_id=' + order_id + '&form=toshipapprove&courier=' + courier + '&trackingnumber=' +
//             trackingnumber,
//         success: function(data) {
//             setTimeout(function() {
//                 $(".preloader").hide().css('background', '');
//                 $("#mdlopenorderdet").modal('hide');
//                 displayorderslist();
//             }, 1500);
//         }
//     })
// }
function toshipapprove(order_id) {
    $(".preloader").show().css('background', 'rgba(255,255,255,0.5)');

    // Fetch courier and tracking number from the database
    var existingCourier = $('.courierdata').text();
    var existingTrackingNumber = $('.trackingnumberdata').text();

    // Check if courier and tracking number are already present in the database
    if (existingCourier !== '' && existingTrackingNumber !== '') {
        // If present, proceed to the next step (complete order)
        $.ajax({
            type: 'POST',
            url: 'orders/class.php',
            data: 'order_id=' + order_id + '&form=todeliverapprove',
            success: function(data) {
                setTimeout(function() {
                    $(".preloader").hide().css('background', '');
                    $("#mdlopenorderdet").modal('hide');
                    displayorderslist();
                }, 1500);
            }
        });
    } else {
        // If not present, proceed with the AJAX request for "toshipapprove"
        var courier = $('.courier').val();
        var trackingnumber = $('.trackingnumber').val();

        $.ajax({
            type: 'POST',
            url: 'orders/class.php',
            data: 'order_id=' + order_id + '&form=toshipapprove&courier=' + courier + '&trackingnumber=' +
                trackingnumber,
            success: function(data) {
                setTimeout(function() {
                    $(".preloader").hide().css('background', '');
                    $("#mdlopenorderdet").modal('hide');
                    displayorderslist();
                }, 1500);
            }
        });
    }
}


function todeliverapprove(order_id) {
    $(".preloader").show().css('background', 'rgba(255,255,255,0.5)');
    $.ajax({
        type: 'POST',
        url: 'orders/class.php',
        data: 'order_id=' + order_id + '&form=todeliverapprove',
        success: function(data) {
            setTimeout(function() {
                $(".preloader").hide().css('background', '');
                $("#mdlopenorderdet").modal('hide');
                displayorderslist();
            }, 1500);
        }
    })
}

// var imgsrc = document.getElementById("imageId").src;
</script>