         <div class="backdrop"></div>
         <a class="backtop fas fa-arrow-up" href="#"></a>

         <!--=====================================
                    HEADER TOP PART START
        =======================================-->
         <div class="header-top">
             <div class="container">
                 <div class="row">
                     <div class="col-md-7 col-lg-8">
                         <div class="header-top-welcome">
                             <p>Welcome to Agri-Market for Local Farmers!</p>
                         </div>
                     </div>
                     <div class="col-md-7 col-lg-4">
                         <ul class="header-top-list">
                             <li><a href="about.php">About Us</a></li>
                             <li><a href="faq.php">FAQs</a></li>
                             <li><a href="contact.php">Contact</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         <!--=====================================
                    HEADER TOP PART END 
        =======================================-->

         <!--=====================================
                    HEADER PART START
        =======================================-->
         <header class="header-part">
             <div class="container">
                 <div class="header-content">
                     <div class="header-media-group">
                         <button class="header-user"> <i class="far fa-user"></i></button>
                         <a href="buyer-landing.php"><img src="images/Oma-Angat-Logo-text.svg" alt="logo"></a>
                         <button class="header-src"><i class="fas fa-search"></i></button>
                     </div>

                     <a href="index.php" class="header-logo">
                         <img src="images/Oma-Angat-Logo-text.svg" alt="logo">
                     </a>

                     <!-- <button class="header-widget header-user-1" title="Account">
                         <i class="icofont-ui-user"></i>
                         <span>Account</span>
                     </button> -->

                     <!-- Update the search form in the header -->
                     <form class="header-form" action="products.php" method="GET">
                         <button type="submit"><i class="fas fa-search"></i></button>
                         <input type="text" name="search" placeholder="Search for products" id="txtsearchspecproduct">
                     </form>


                     <div class="header-widget-group">
                         <a href="cart.php" class="header-widget" title="cart">
                             <i class="fas fa-shopping-basket"></i>
                         </a>

                         <a href="chat.php" class="header-widget" title="chat">
                             <i class="fas fa-paper-plane"></i>
                         </a>
                         <button class="header-widget header-user-1" title="Account">
                             <i class="icofont-ui-user"></i>
                             <?php
                                $query = mysqli_query($connection, "select * from users_table where user_id='" . $_SESSION['user_id'] . "'");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                 <span><?php echo $row['username']; ?></span>

                             <?php
                                }
                                ?>
                         </button>

                     </div>
                 </div>
             </div>
         </header>
         <!--=====================================
                    HEADER PART END
        =======================================-->


         <!--=====================================
                    NAVBAR PART START
        =======================================-->
         <nav class="navbar-part">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="navbar-content">
                             <ul class="navbar-list">
                                 <li class="navbar-item dropdown">
                                     <a href="#0"><i class="fa fa-house"></i></a>
                                     <a class="navbar-link" href="buyer-landing.php">Home</a>
                                 </li>
                                 <li class="navbar-item dropdown ">
                                     <a href="#0"><i class="fa-solid fa-comments"></i></a>
                                     <a class="navbar-link" href="community.php">Community</a>
                                 </li>
                                 <li class="navbar-item dropdown">
                                     <a href=""><i class="fa-solid fa-store"></i></a>
                                     <a class="navbar-link dropdown-arrow" href="products.php">Shop</a>
                                     <ul class="dropdown-position-list">
                                         <li><a href="all-farmer-shop.php">Farmer's Market</a></li>
                                         <li><a href="products.php">All products</a></li>
                                     </ul>
                                 </li>
                             </ul>
                             <!-- <div class="navbar-info-group">
                                 <div class="navbar-info">
                                     <a href="#0"><i class="fas fa-calendar-check"></i></a>
                                     <p>
                                         <small><a href="#" title="Reserve Product">Harvesting Calendar</a></small>
                                     </p>
                                 </div>
                                 <div class="navbar-info">
                                     <a href="#0"><i class="fa-solid fa-hand-holding-heart"></i></a>
                                     <p>
                                         <small><a href="#" title="Help a Farmer">Donation</a></small>
                                     </p>
                                 </div>
                             </div> -->
                         </div>
                     </div>
                 </div>
             </div>
         </nav>
         <!--=====================================
                    NAVBAR PART END
        =======================================-->

         <script type="text/javascript">
             $(function() {
                 $("#products").addClass('active');
                 fncdisplaylistofproducts();

                 $(".wawa").click(function() {
                     $(".wawa").css("color", "#79a206");
                     $(this).css("color", "#FEB954");
                 })

                 $(".numonly").keydown(function(event) {
                     if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 190 || event.keyCode ==
                         9 ||
                         event.keyCode == 188) {

                     } else {
                         if (event.keyCode < 48 || event.keyCode > 57 || event.keyCode == 17) {
                             event.preventDefault();
                         }
                     }
                 });

                 $(".focus").focus(function() {
                     this.select();
                 });

                 $("#txtsearchspecproduct").keyup(function(e) {
                     if ($('#txtsearchspecproduct').val() == "") {
                         fncdisplaylistofproducts();
                     } else {
                         fncdisplaylistofproducts();
                     }
                 });

                 dsplylistoffiltercategory();
             })

             function fncdisplaylistofproducts() {
                 var srchprod = $("#txtsearchspecproduct").val();
                 var filteracc = $("#filteraccomodation").val();
                 // alert("wawa");
                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'srchprod=' + srchprod + '&filteracc=' + filteracc + '&form=fncdisplaylistofproducts',
                     success: function(data) {
                         $("#displaylistofrooms").html(data);
                     }
                 });
             }

             function fncdisplaylistofproducts() {
                 var pricerange = $("#pricerange").val();
                 var srchprod = $("#txtsearchspecproduct").val();
                 var filteracc = $("#filteraccomodation").val();
                 // alert("wawa");
                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'srchprod=' + srchprod + '&filteracc=' + filteracc + '&pricerange=' + pricerange +
                         '&form=fncdisplaylistofproducts',
                     success: function(data) {
                         $("#displaylistofrooms").html(data);
                     }
                 });


             }



             // DISPLAYING OF CATEGORIES
             function dsplylistoffiltercategory() {
                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'form=dsplylistoffiltercategory',
                     success: function(data) {
                         $("#filteraccomodation").html(data);
                     }
                 });
             }

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

             function openproductdetails(product_id) {
                 $("#modal_productdet").modal('show');

                 $("#txtmdlprodID").val(product_id);
                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'product_id=' + product_id + '&form=fncdisplayproddet',
                     success: function(data) {
                         var show = data.split("|");
                         $("#mdlprodimage1").html(show[4]);
                         $("#mdlprodimage2").html(show[5]);

                         $("#txtmdlprodname").text(show[0]);
                         $("#txtmdlprodrates").html(show[1]);
                         $("#txtmdlprodprice").text(show[2]);
                         $("#txtmdlproddesc").text(show[3]);
                         $("#txtmdlprodcategory").text(show[6]);

                         $("#txtmdlprodunit").text(show[7]);
                         $("#txtmdlprodavailat").text(show[8]);
                         $("#txtmdlprodavailuntil").text(show[9]);
                         $("#txtmdlprodfamily").text(show[10]);

                         $("#txtmdlprodlight").text(show[11]);
                         $("#txtmdlprodfrost").text(show[12]);
                         $("#txtmdlprodsoil").text(show[13]);
                         $("#txtmdlprodwater").text(show[14]);
                         $("#txtmdlprodfulldimen").text(show[15]);
                         $("#txtmdlprodsource").text(show[16]);
                         $("#txtmdlprodcomment").html(show[17]);

                         $("#txtmdlprodsellerID").val(show[18]);
                         $("#txtmdlprodsellername").text(show[19]);
                         $('#shopseller_id').val(show[18])
                         $("#txtmdlprodsellername2").val(show[19]);

                         // if (show[20] <= 0) {
                         //     $("#txtstock").text('Out Of Stock');
                         //     $('.contact_message button').attr('disabled', true)
                         // }else{
                         //     $("#txtstock").text(show[20]);
                         //     $('.contact_message button').attr('disabled', false)
                         // }
                         if (show[20] <= 0) {
                             $("#txtstock").text('Out Of Stock');
                             $('.contact_message button').attr('disabled', true)
                             $('.soldout').addClass('soldout_show')
                         } else {
                             $("#txtstock").text(show[20]);
                             $('.contact_message button').attr('disabled', false)
                             $('.soldout').removeClass('soldout_show')
                         }

                     }
                 });
             }

             function clearmdl_productdet() {
                 $("#txtmdlprodnumberofrating").val("");
                 $("#txtmdlprodquantity").val("1");
                 $("#txtmdlprodinputcomment").val("");
                 $(".wawa").css("color", "#79a206");

                 $("#tabdesc").addClass("active");
                 $("#tabplantcare").removeClass("active");
                 $("#tabreviews").removeClass("active");
                 $("#info").addClass("show active");
                 $("#sheet").removeClass("show active");
                 $("#reviews").removeClass("show active");
             }

             function fncselectrating(rate) {
                 $("#txtmdlprodnumberofrating").val(rate);
             }

             function quantityvalidation() {
                 var textmdlprodquantity = $("#txtmdlprodquantity").val();
                 var textmdlprodID = $("#txtmdlprodID").val();

                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'textmdlprodquantity=' + textmdlprodquantity + '&textmdlprodID=' + textmdlprodID +
                         '&form=checkquantityindb',
                     success: function(data) {

                         if (data == 1) {
                             if (textmdlprodquantity <= 100) {

                             } else {
                                 Swal.fire(
                                     'ALERT',
                                     'Quantity cannot exceed 100.',
                                     'warning'
                                 )
                                 $("#txtmdlprodquantity").val(1);
                             }
                         } else {
                             Swal.fire(
                                 'ALERT',
                                 'Out of stock.',
                                 'warning'
                             )
                             $("#txtmdlprodquantity").val(1);
                         }

                     }
                 })
             }

             // SUBMIT COMMENT
             function btnsubmitcomment() {
                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'form=checkifloggedin',
                     success: function(data) {
                         if (data == 1) {
                             window.location = "../buyer/login.php";
                         } else {
                             btnsubmitsavecomment();
                         }
                     }
                 });
             }

             function btnsubmitsavecomment() {
                 var textmdlprodID = $("#txtmdlprodID").val();
                 var textmdlprodnumberofrating = $("#txtmdlprodnumberofrating").val();
                 var textmdlprodinputcomment = $("#txtmdlprodinputcomment").val();

                 if (textmdlprodnumberofrating != "") {
                     if (textmdlprodinputcomment != "") {
                         $.ajax({
                             type: 'POST',
                             url: 'products_class.php',
                             data: 'textmdlprodnumberofrating=' + textmdlprodnumberofrating +
                                 '&textmdlprodinputcomment=' +
                                 textmdlprodinputcomment + '&textmdlprodID=' + textmdlprodID +
                                 '&form=btnsubmitsavecomment',
                             success: function(data) {
                                 var show = data.split("|");
                                 $("#txtmdlprodrates").html(show[0]);
                                 $("#txtmdlprodcomment").html(show[1]);
                                 $("#txtmdlprodnumberofrating").val("");
                                 $("#txtmdlprodinputcomment").val("");
                             }
                         })
                     } else {
                         Swal.fire(
                             'ALERT',
                             'Please enter your comment.',
                             'warning'
                         )
                     }
                 } else {
                     Swal.fire(
                         'ALERT',
                         'Please enter your rate.',
                         'warning'
                     )
                 }
             }

             // ADD TO CART
             function btnaddtocart() {
                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'form=checkifloggedin',
                     success: function(data) {
                         if (data == 1) {
                             window.location = "../buyer/login.php";
                         } else {
                             btnsaveaddtocart();
                         }
                     }
                 });
             }

             function btnsaveaddtocart() {
                 var textmdlprodID = $("#txtmdlprodID").val();
                 var textmdlprodquantity = $("#txtmdlprodquantity").val();
                 var textmdlprodprice = ($("#txtmdlprodprice").text()).replace(/,/g, "");

                 if (textmdlprodquantity == 0 || textmdlprodquantity == "") {
                     Swal.fire(
                         'ALERT',
                         'Please enter a quantity.',
                         'warning'
                     )
                 } else {
                     $(".loadload").show();
                     $.ajax({
                         type: 'POST',
                         url: 'products_class.php',
                         data: 'textmdlprodID=' + textmdlprodID + '&textmdlprodquantity=' + textmdlprodquantity +
                             '&textmdlprodprice=' + textmdlprodprice + '&form=btnsaveaddtocart',
                         success: function(data) {
                             setTimeout(function() {
                                 $(".loadload").hide();
                                 Swal.fire({
                                     title: "Success!",
                                     text: "Successfully added to cart.",
                                     type: "success",
                                     icon: "success",
                                     showCancelButton: false,
                                     confirmButtonColor: "#2778c4",
                                     confirmButtonText: "Okay",
                                     closeOnConfirm: false
                                 }).then((result) => {
                                     if (result.value) {
                                         window.location = "cart.php";
                                     }
                                 });
                             }, 500);

                         }
                     })
                 }

             }

             // BUY NOW BUTTON
             function btnbuynow() {
                 var textmdlprodquantity = $("#txtmdlprodquantity").val();

                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'form=checkifloggedin',
                     success: function(data) {
                         if (data == 1) {
                             window.location = "../buyer/login.php";
                         } else {
                             if (textmdlprodquantity == "" || textmdlprodquantity == 0) {
                                 Swal.fire(
                                     'ALERT',
                                     'Please enter a quantity.',
                                     'warning'
                                 )
                             } else {
                                 openproductbuynowdet();
                             }
                         }
                     }
                 });
             }

             function openproductbuynowdet() {
                 $("#modal_productbuynow").modal('show');

                 var textmdlprodID = $("#txtmdlprodID").val();
                 var textmdlprodquantity = $("#txtmdlprodquantity").val();

                 $("#txtmdlprodID2").val(textmdlprodID);
                 $("#txtmdlbuynowproductquantity").text(textmdlprodquantity);

                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'textmdlprodID=' + textmdlprodID + '&textmdlprodquantity=' + textmdlprodquantity +
                         '&form=fncdisplaybuynowproddet',
                     success: function(data) {
                         var show = data.split("|");
                         $("#txtmdlcheckoutname").text(show[0]);
                         $("#txtmdlcheckoutphone").text(show[1]);
                         $("#txtmdlcheckoutaddress").text(show[2]);

                         $("#txtmdlbuynowproductname").text(show[3]);
                         $("#txtmdlbuynowproductprice").text(show[4]);
                         $("#txtmdlbuynowproductsubtotal").text(show[5]);

                         $("#txtmdlbuynowsubtotal").text(show[5]);
                         $("#txtmdlbuynowshiptotal").text(show[6]);
                         $("#txtmdlbuynowpaymenttotamt").text(show[7]);
                         $("#txtmdlbuynowproductimage").attr("src", show[8]);
                     }
                 });
             }

             function clearbuynowmodal() {
                 $("#txtmdlbuynowpaymentmethod").val("");
                 $("#txtmdlprodID2").val("");
                 $(".paymentmethcash").addClass('hoverpaymentmeth');
                 $(".paymentmethcash").removeClass('hoverpaymentmeth2');
                 $(".paymentmethgcash").addClass('hoverpaymentmeth');
                 $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
             }

             function paymentcash() {
                 $("#txtmdlbuynowpaymentmethod").val("CASH");
                 $(".paymentmethcash").addClass('hoverpaymentmeth2');
                 $(".paymentmethcash").removeClass('hoverpaymentmeth');

                 $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
                 $(".paymentmethgcash").addClass('hoverpaymentmeth');
             }

             function paymentgcash() {
                 $("#txtmdlbuynowpaymentmethod").val("GCASH");
                 $(".paymentmethgcash").addClass('hoverpaymentmeth2');
                 $(".paymentmethgcash").removeClass('hoverpaymentmeth');

                 $(".paymentmethcash").removeClass('hoverpaymentmeth2');
                 $(".paymentmethcash").addClass('hoverpaymentmeth');
             }

             function btnplaceorder() {
                 var product_id = $("#txtmdlprodID2").val();
                 var productQuantity = $("#txtmdlbuynowproductquantity").text();
                 var productPrice = ($("#txtmdlbuynowproductprice").text()).replace(/,/g, "");
                 var ProductShipping = ($("#txtmdlbuynowshiptotal").text()).replace(/,/g, "");
                 var Producttotalamount = ($("#txtmdlbuynowpaymenttotamt").text()).replace(/,/g, "");
                 var productpaymentmeth = $("#txtmdlbuynowpaymentmethod").val();

                 if (productpaymentmeth != "") {
                     if (productpaymentmeth == "CASH") {
                         $(".loadload").show();
                         $.ajax({
                             type: 'POST',
                             url: 'products_class.php',
                             data: 'product_id=' + product_id + '&productQuantity=' + productQuantity +
                                 '&productPrice=' +
                                 productPrice + '&ProductShipping=' + ProductShipping + '&Producttotalamount=' +
                                 Producttotalamount + '&productpaymentmeth=' + productpaymentmeth +
                                 '&form=btnplaceordercash',
                             success: function(data) {
                                 setTimeout(function() {
                                     $(".loadload").hide();
                                     Swal.fire({
                                         title: "Success!",
                                         text: "Successfully ordered.",
                                         type: "success",
                                         icon: "success",
                                         showCancelButton: false,
                                         confirmButtonColor: "#2778c4",
                                         confirmButtonText: "Okay",
                                         closeOnConfirm: false
                                     }).then((result) => {
                                         if (result.value) {
                                             window.location = "purchases.php";
                                         }
                                     });
                                 }, 500);

                             }
                         })
                     } else {
                         loadpaymentgcashmodal();
                     }
                 } else {
                     Swal.fire(
                         'ALERT',
                         'Please select payment method.',
                         'warning'
                     )
                 }
             }

             function loadpaymentgcashmodal() {
                 $("#modal_paymentupload").modal('show');
                 var product_id = $("#txtmdlprodID2").val();

                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'product_id=' + product_id + '&form=fncloadpaymentgcashmodal',
                     success: function(data) {
                         var show = data.split("|");
                         $("#txtsellergcashname").text(show[0]);
                         $("#txtsellergcashnumber").text(show[1]);
                         $("#txtsellergcashimage").attr("src", show[2]);
                     }
                 });
             }

             function submitpayment() {
                 var product_id = $("#txtmdlprodID2").val();
                 var productQuantity = $("#txtmdlbuynowproductquantity").text();
                 var productPrice = ($("#txtmdlbuynowproductprice").text()).replace(/,/g, "");
                 var ProductShipping = ($("#txtmdlbuynowshiptotal").text()).replace(/,/g, "");
                 var Producttotalamount = ($("#txtmdlbuynowpaymenttotamt").text()).replace(/,/g, "");
                 var productpaymentmeth = $("#txtmdlbuynowpaymentmethod").val();
                 var textpaymentmethrefnum = $("#txtpaymentmethrefnum").val();

                 $(".loadload").show();
                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'product_id=' + product_id + '&productQuantity=' + productQuantity + '&productPrice=' +
                         productPrice + '&ProductShipping=' + ProductShipping + '&Producttotalamount=' +
                         Producttotalamount +
                         '&productpaymentmeth=' + productpaymentmeth + '&textpaymentmethrefnum=' +
                         textpaymentmethrefnum +
                         '&form=btnplaceordergcash',
                     success: function(data) {
                         setTimeout(function() {
                             $(".loadload").hide();

                             Swal.fire({
                                 title: "Success!",
                                 text: "Successfully ordered.",
                                 type: "success",
                                 icon: "success",
                                 showCancelButton: false,
                                 confirmButtonColor: "#2778c4",
                                 confirmButtonText: "Okay",
                                 closeOnConfirm: false
                             }).then((result) => {
                                 if (result.value) {
                                     uploadpaymentpicture(data)
                                 }
                             });

                         }, 500);
                     }
                 })
             }

             function fncShowvalidPic() {
                 var oFReader = new FileReader();
                 oFReader.readAsDataURL(document.getElementById("txtvalidImagefile").files[0]);
                 oFReader.onload = function(oFREvent) {
                     document.getElementById("updatevalidImage").src = oFREvent.target.result;
                 };
             }

             function uploadpaymentpicture(genid) {
                 $("#txtvalidimageID").val(genid);
                 var data = new FormData($('#frmUploadvalidPic')[0]);
                 $.ajax({
                     type: 'POST',
                     url: 'uploadpaymentimage.php',
                     data: data,
                     mimeType: 'multipart/form-data',
                     contentType: false,
                     cache: false,
                     processData: false,
                     success: function(data) {
                         window.location = "purchases.php";
                     }
                 });
             }

             function openproductsellerchat() {
                 $("#modal_chat").modal('show');
             }

             function clearchat() {
                 $("#txtsendchatmessage").val("");
             }

             function sendchattoseller() {
                 var textmdlprodsellerID = $("#txtmdlprodsellerID").val();
                 var textsendchatmessage = $("#txtsendchatmessage").val();

                 $(".loadload").show();
                 $.ajax({
                     type: 'POST',
                     url: 'products_class.php',
                     data: 'textmdlprodsellerID=' + textmdlprodsellerID + '&textsendchatmessage=' + textsendchatmessage +
                         '&form=sendchattoseller',
                     success: function(data) {
                         setTimeout(function() {
                             $(".loadload").hide();

                             Swal.fire({
                                 title: "Success!",
                                 text: "Successfully sent message.",
                                 type: "success",
                                 icon: "success",
                                 showCancelButton: false,
                                 confirmButtonColor: "#2778c4",
                                 confirmButtonText: "Okay",
                                 closeOnConfirm: false
                             }).then((result) => {
                                 if (result.value) {
                                     $("#modal_chat").modal('hide');
                                     clearchat();
                                 }
                             });

                         }, 500);
                     }
                 })
             }
         </script>