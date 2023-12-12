<?php
include("connection/connect.php");
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <link rel="manifest" href="/manifest.json" />
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/register.css">
    <?php
    include('header.php');
    ?>
    <link rel="stylesheet" href="css/login.css">
    <script src="/script.js"></script>
</head>

<body>
    <div class="loadload">
        <div class="spinner-border text-secondary" role="status"></div>
    </div>
    <!--offcanvas menu area end-->
    <datalist id="mylist">
        <option value="Albay">
        <option value="Camarines Norte">
        <option value="Camarines Sur">
        <option value="Catanduanes">
        <option value="Masbate">
        <option value="Sorsogon">
    </datalist>


    <!--contact area start-->
    <div class="contact_area" style="margin-top: 30px;">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="regtitle">Create an Account</p>
                            <p class="" style="margin-bottom: 10px;">Shop now and support Albayano Farmers!</p>
                        </div>

                        <!-- GUEST DETAILS -->
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="contact_message form">
                                    <h4>Customer Details</h4>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>First Name</label>
                                        <input class="reqresinfo" type="text" id="txtregFname">
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Middle Name</label>
                                        <input class="" type="text" id="txtregMname">
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Last Name</label>
                                        <input class="reqresinfo" type="text" id="txtregLname">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact_message form">
                                        <p>
                                            <label>Contact Number</label>
                                            <input class="reqresinfo numonly contactnum" type="text"
                                                id="txtregcontactphone">
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="contact_message form">
                                        <p>
                                            <label>Email</label>
                                            <input class="reqresinfo" type="text" id="txtregemail">
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact_message form">
                                        <div class="contact_textarea">
                                            <label>Address</label>
                                            <textarea class="reqresinfo form-control2" id="txtregfulladdress" readonly
                                                style="cursor:pointer;height: 60px;margin-bottom: 10px;"
                                                onclick="openmdlsearchaddress();"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact_message form">
                                        <div class="contact_textarea" style="margin-bottom: 20px;">
                                            <div id="map_canvas2"
                                                style="height: 250px; width:100% !important; border-radius: 0px !important;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="txtreghousenum">
                            <input type="hidden" id="txtregstreet">
                            <input type="hidden" id="txtregsubdi">
                            <input type="hidden" id="txtregbarangay">
                            <input type="hidden" id="txtregcity">
                            <input type="hidden" id="txtregpostalcode">
                            <input type="hidden" id="txtregprovince">
                            <input type="hidden" id="txtreglat">
                            <input type="hidden" id="txtreglong">

                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="contact_message form">
                                        <h4>Account Credentials</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact_message form">
                                            <p>
                                                <label>Username</label>
                                                <input type="text" id="txtregusername" class="reqresinfo">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="contact_message form">
                                            <label>Password</label>
                                            <div class="input-group" style="margin-top: 0px;margin-bottom: 20px">
                                                <input type="Password" class="form-control reqresinfo passwordclass"
                                                    id="txtadduserconfirmpass">
                                                <div class="input-group-prepend" style="cursor: pointer;"
                                                    onclick="fncaddpassattribunHash2();" id="inputaddusereye2">
                                                    <span class="input-group-text"
                                                        style="height: 45px;border-radius: 0rem;"><i
                                                            class="fa fa-eye-slash" id="addusereye2"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 30px;">
                                        <div class="contact_message form">
                                            <div class="contact_textarea">
                                                <label>Profile Image</label>
                                                <form method="post" action="#" enctype="multipart/form-data"
                                                    id="frmUploadvalidPic">
                                                    <div class="row">
                                                        <div class="col-md-12" style="display: none;">
                                                            <img src="assets/images/noimage5.png" width="200"
                                                                height="250"
                                                                style="border: 2px solid #bdc3c7; margin-bottom: 10px;"
                                                                id="updatevalidImage"><br>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="file" class="dropify clearinfo reqresinfo"
                                                                id="txtvalidImagefile" name="txtvalidImagefile"
                                                                onchange="fncShowvalidPic();" accept="image/*"
                                                                data-height="300">
                                                            <input type="hidden" class="clearinfo"
                                                                name="txtvalidimageID" id="txtvalidimageID">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="contact_message form">
                                    <button type="button" onclick="registeruseraccount();"> Submit</button>
                                </div>
                                <div class="contact_message form text-center" style="margin-top: 10px; ">
                                    <a href="login.php">Already have an account?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact area end-->

        <!-- modal area start-->
        <div class="modal fade" id="mdlsearchaddress" tabindex="-1" role="dialog" data-bs-backdrop="static"
            data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" style="min-width:400px;">
                <div class="modal-content" style="border-radius: 10px;">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="clearsearchaddress();" style="left: 92%;">
                        <span aria-hidden="true"><i class="icon-x"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">

                            <div class="product_details mb-4">
                                <div class="row">
                                    <!--
                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>House Number</label>
                                        <input class="" type="text" id="txtreghousenum2">
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Street Name</label>
                                        <input class="" type="text" id="txtregstreet2">
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Subdivision/Village</label>
                                        <input class="" type="text" id="txtregsubdi2">
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Barangay</label>
                                        <input class="reqresinfo2" type="text" id="txtregbarangay2" required>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>City/Municipality</label>
                                        <input class="reqresinfo2" type="text" id="txtregcity2" required>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Postal Code/Zip Code</label>
                                        <input class="reqresinfo2" type="text" id="txtregpostalcode2" required>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Province</label> -->
                                    <!--<select  id="txtregprovince2" class ="reqresinfo2" type="text" name = "Provinces">
                                        <option value = "Albay" selected>Albay</option>
                                        <option value = "Camarines Norte">Camarines Norte</option>
                                        <option value = "Camarines Sur" selected>Camarines Sur</option>
                                        <option value = "Catanduanes">Catanduanes</option>
                                        <option value = "Masbate" selected>Masbate</option>
                                        <option value = "Sorsogon">Sorsogon</option>
                                        </select> -->
                                    <form class="dropdown-group">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_message form">
                                                <p>
                                                    <label>Province</label><br>
                                                <form class="dropdown-group">
                                                    <select class="reqresinfo2" type="text" id="txtregprovince2"
                                                        size="1">
                                                        <option value="" selected="selected">-- Select Province --
                                                        </option>
                                                    </select>
                                            </div>
                                        </div>
                                        </p>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_message form">
                                                <p>
                                                    <label>Municipality</label><br>
                                                    <select class="reqresinfo2" type="text" id="txtregcity2" required
                                                        size="1">
                                                        <option value="" selected="selected">-- Select City --</option>
                                                    </select>
                                            </div>
                                        </div>
                                        </p>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_message form">
                                                <p>
                                                    <label>Barangay</label><br>
                                                    <select class="reqresinfo2" type="text" id="txtregbarangay2"
                                                        size="1">
                                                        <option value="" selected="selected">-- Select Barangay --
                                                        </option>
                                                    </select>
                                            </div>
                                        </div>
                                        </p>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_message form">
                                                <p>
                                                    <label>Postal Code/Zip Code</label><br>
                                                    <select class="reqresinfo2" type="text" id="txtregpostalcode2"
                                                        required size="1">
                                                        <option value="" selected="selected">-- Select ZIP Code --
                                                        </option>
                                                    </select>
                                            </div>
                                        </div>
                                        </p>
                                    </form>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="contact_message form">
                                            <p>
                                                <label>House Number</label>
                                                <input class="" type="text" id="txtreghousenum2">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="contact_message form">
                                            <p>
                                                <label>Street Name</label>
                                                <input class="" type="text" id="txtregstreet2">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="contact_message form">
                                            <p>
                                                <label>Subdivision/Village</label>
                                                <input class="" type="text" id="txtregsubdi2">
                                            </p>
                                        </div>
                                    </div>


                                    <!--
                                    <h1>Select Country State City Zip</h1>
                                    <form class="dropdown-group">
                                    <select id="Country" size="1">
                                    <option value="" selected="selected">-- Select Country --</option>
                                    </select>

                                    <select id="State" size="1">
                                    <option value="" selected="selected">-- Select State --</option>
                                    </select>

                                    <select id="City" size="1">
                                    <option value="" selected="selected">-- Select City --</option>
                                    </select>

                                    <select id="Zip" size="1">
                                    <option value="" selected="selected">-- Select Zip --</option>
                                    </select>
                                    </form>
                                    -->
                                    <script src="registration.js"></script>

                                    <!--        <input class="reqresinfo2" type="text" id="txtregprovince2" list="mylist" onmousedown="value = '';" autocomplete="off" required>
                                    </p> -->
                                    <!--<p id="display"></p> for testing only -->
                                    <!--            </div>
                                    </div>
                                    -->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="contact_message form">
                                            <button onclick="btnsearchaddress();">Search</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<!-- modal area end-->
<?php include('jscripts.php'); ?>
<script>
var provinceInput = document.getElementById("txtregprovince2");
//const display = document.getElementById("display");

provinceInput.addEventListener("change", function() {
    var province = provinceInput.value.toLowerCase();
    //    display.textContent = province;
    if (province != "albay" && province != "camarines norte" && province != "camarines sur" &&
        province !=
        "catanduanes" && province != "masbate" && province != "sorsogon") {
        Swal.fire(
            'ALERT',
            'Province is out of range/Province is Invalid',
            'warning'
        )
        $(this).css('border', '1px #a94442 solid');
        $(this).addClass('lala');
    } else {
        $(this).css('border', '');
        $(this).removeClass('lala');
    }
});
</script>
<script type="text/javascript">
$(function() {
    $(".contactnum").inputmask("+63 999-999-9999");

    $(".numonly").keydown(function(event) {
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 190 || event
            .keyCode ==
            9 || event.keyCode == 188) {

        } else {
            if (event.keyCode < 48 || event.keyCode > 57 || event.keyCode == 17) {
                event.preventDefault();
            }
        }
    });

    geocodesearching2();
})

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

function geocodesearching2() {
    var geocoder = new google.maps.Geocoder();
    if ($("#txtregfulladdress").val() == "" || $("#txtregfulladdress").val() == null) {
        var address = "";
    } else {
        var address = $("#txtregfulladdress").val();
    }
    var lat = document.getElementById("txtreglat").value;
    var lng = document.getElementById("txtreglong").value;
    geocoder.geocode({
        'address': address
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
            initialize2(latitude, longitude);
            $("#txtreglat").val(latitude);
            $("#txtreglong").val(longitude);
        } else {
            initialize2(lat, lng);
        }
    });
}

function initialize2(latitude, longitude) {
    var latlng = new google.maps.LatLng(latitude, longitude);
    var myOptions = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas2"), myOptions);
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        draggable: true
    });

    google.maps.event.addListener(marker, 'dragend', function(evt) {
        $("#txtreglat").val(evt.latLng.lat());
        $("#txtreglong").val(evt.latLng.lng());
    });

    google.maps.event.addListener(marker, 'drag', function(evt) {
        console.log("marker is being dragged");
    });
}

function openmdlsearchaddress() {
    $("#mdlsearchaddress").modal('show');

    var textreghousenum = $("#txtreghousenum").val();
    var textregstreet = $("#txtregstreet").val();
    var textregsubdi = $("#txtregsubdi").val();
    var textregbarangay = $("#txtregbarangay").val();
    var textregcity = $("#txtregcity").val();
    var textregpostalcode = $("#txtregpostalcode").val();
    var textregprovince = $("#txtregprovince").val();

    $("#txtreghousenum2").val(textreghousenum);
    $("#txtregstreet2").val(textregstreet);
    $("#txtregsubdi2").val(textregsubdi);
    $("#txtregbarangay2").val(textregbarangay);
    $("#txtregcity2").val(textregcity);
    $("#txtregpostalcode2").val(textregpostalcode);
    $("#txtregprovince2").val(textregprovince);
}

function btnsearchaddress() {
    if (reqField1('reqresinfo2') == 1) {


        var textreghousenum = $("#txtreghousenum2").val();
        var textregstreet = $("#txtregstreet2").val();
        var textregsubdi = $("#txtregsubdi2").val();
        var textregbarangay = $("#txtregbarangay2").val();
        var textregcity = $("#txtregcity2").val();
        var textregpostalcode = $("#txtregpostalcode2").val();
        var textregprovince = $("#txtregprovince2").val();
        var housenum = "";
        var subdivision = "";
        var provinceInput = document.getElementById("txtregprovince2");
        var province = provinceInput.value.toLowerCase();

        if (province == "albay" || province == "camarines norte" || province == "camarines sur" || province ==
            "catanduanes" || province == "masbate" || province == "sorsogon") {
            $("#mdlsearchaddress").modal('hide');
            $("#txtreghousenum").val(textreghousenum);
            $("#txtregstreet").val(textregstreet);
            $("#txtregsubdi").val(textregsubdi);
            $("#txtregbarangay").val(textregbarangay);
            $("#txtregcity").val(textregcity);
            $("#txtregpostalcode").val(textregpostalcode);
            $("#txtregprovince").val(textregprovince);

            if (textreghousenum == "") {
                housenum = "";
            } else {
                housenum = textreghousenum + ", ";
            }

            if (textregsubdi == "") {
                subdivision = "";
            } else {
                subdivision = textregsubdi + ", ";
            }

            $("#txtregfulladdress").val(housenum + textregstreet + ", " + subdivision + textregbarangay + ", " +
                textregcity + ", " + textregpostalcode + ", " + textregprovince);

            geocodesearching2();
        } else {
            Swal.fire(
                'ALERT',
                'Province is out of range',
                'warning'
            )
            $('#txtregprovince2').css('border', '1px #a94442 solid');
            $('#txtregprovince2').addClass('lala'); //new codes haha pang red ng border
        }
    } else {
        Swal.fire(
            'ALERT',
            'Please review your entries. Ensure all required fields are filled out',
            'warning'
        )
    }
}

function clearsearchaddress() {
    $('.reqresinfo2').css('border', '');
    $('.reqresinfo2').val("");
}

// REGISTER
function registeruseraccount() {
    var textregFname = $("#txtregFname").val();
    var textregMname = $("#txtregMname").val();
    var textregLname = $("#txtregLname").val();
    var textregcontactphone = $("#txtregcontactphone").val();
    var textregemail = $("#txtregemail").val();
    var textregfulladdress = $("#txtregfulladdress").val();
    var textreghousenum = $("#txtreghousenum").val();
    var textregstreet = $("#txtregstreet").val();
    var textregsubdi = $("#txtregsubdi").val();
    var textregbarangay = $("#txtregbarangay").val();
    var textregcity = $("#txtregcity").val();
    var textregpostalcode = $("#txtregpostalcode").val();
    var textregprovince = $("#txtregprovince").val();
    var textreglat = $("#txtreglat").val();
    var textreglong = $("#txtreglong").val();

    var textregusername = $("#txtregusername").val();
    var textadduserconfirmpass = $("#txtadduserconfirmpass").val();
    var textvalidImagefile = $("#txtvalidImagefile").val();

    if (reqField1('reqresinfo') == 1) {
        if (textvalidImagefile != "") {
            $(".loadload").show();
            $.ajax({
                type: 'POST',
                url: 'registration_class.php',
                data: 'textregFname=' + textregFname + '&textregMname=' + textregMname +
                    '&textregLname=' +
                    textregLname + '&textregcontactphone=' + encodeURIComponent(textregcontactphone) +
                    '&textregemail=' + textregemail + '&textregfulladdress=' + textregfulladdress +
                    '&textreghousenum=' + textreghousenum + '&textregstreet=' + textregstreet +
                    '&textregsubdi=' + textregsubdi + '&textregbarangay=' + textregbarangay +
                    '&textregcity=' + textregcity + '&textregprovince=' + textregprovince +
                    '&textreglat=' +
                    textreglat + '&textreglong=' + textreglong + '&textregpostalcode=' +
                    textregpostalcode +
                    '&textregusername=' + textregusername + '&textadduserconfirmpass=' +
                    textadduserconfirmpass + '&form=registeruseraccount',
                success: function(data) {
                    setTimeout(function() {
                        $(".loadload").hide();
                        Swal.fire({
                            title: "Success!",
                            text: "Successfully Registered. Please Check Email To Verify",
                            type: "success",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#00fb71",
                            confirmButtonText: "Okay",
                            closeOnConfirm: false
                        }).then((result) => {
                            if (result.value) {
                                uploadvalidpicture(data);
                            }
                        });
                    }, 500);
                }
            })
        } else {
            Swal.fire(
                'ALERT',
                'Profile image is required.',
                'warning'
            )
        }
    } else {
        Swal.fire(
            'ALERT',
            'Please review your entries. Ensure all required fields are filled out',
            'warning'
        )
    }
}

function fncShowvalidPic() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("txtvalidImagefile").files[0]);
    oFReader.onload = function(oFREvent) {
        document.getElementById("updatevalidImage").src = oFREvent.target.result;
    };
}

function uploadvalidpicture(genid) {
    $("#txtvalidimageID").val(genid);
    var data = new FormData($('#frmUploadvalidPic')[0]);
    $.ajax({
        type: 'POST',
        url: 'uploadprofileImage.php',
        data: data,
        mimeType: 'multipart/form-data',
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            loginusers();
        },
    });
}

function loginusers() {
    window.location = "login.php";
}

function fncaddpassattribHash2() {
    $("#txtadduserconfirmpass").attr("type", "password");
    $("#inputaddusereye2").attr("onclick", "fncaddpassattribunHash2()");
    $("#addusereye2").removeClass("fa-eye");
    $("#addusereye2").addClass("fa-eye-slash");
}

function fncaddpassattribunHash2() {
    $("#txtadduserconfirmpass").attr("type", "text");
    $("#inputaddusereye2").attr("onclick", "fncaddpassattribHash2()");
    $("#addusereye2").addClass("fa-eye");
    $("#addusereye2").removeClass("fa-eye-slash");
}

$(function() {
    setTimeout(function() {
        $(".loadload").hide();
    }, 300);
})
if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("service-worker.js");
}
</script>