<?php
include("connect.php");
session_start();
?>

<head>
    <?php include 'header.php'; ?>
    <?php include 'community/header.php'; ?>
    <link rel="manifest" href="manifest.json" />
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/privacy.css">

</head>

<body>

    <div class="loadload">
        <div class="spinner-border text-secondary" role="status"></div>
    </div>

    <script type="text/javascript">
        $(function() {
            setTimeout(function() {
                $(".loadload").hide();
            }, 300);
        })
    </script>
    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("service-worker.js");
        }
    </script>
    <script src="/script.js"></script>
    <!--breadcrumbs area start-->
    <?php
    // Check if the user is logged in
    $isLoggedIn = !empty($_SESSION['user_id']);;
    if ($isLoggedIn) {
        include 'header-nav-buyer.php'; // Include the file for logged-in users
    } else {
        include 'header-nav.php'; // Include the file for non-logged-in users
    }
    ?>
    <?php include('category-sidebar.php'); ?>

    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Privacy Policy</h2>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    PRIVACY PART START
        =======================================-->
    <section class="inner-section privacy-part">
        <div class="container">
            <p style="justify-content:justify; margin-bottom: 50px; margin-top: -20px; margin-left:50px; margin-right:20px;">Dear Valued Customer, <br><br>

                Welcome to our commitment in safeguarding your privacy and ensuring a secure experience with our platform. We highly value the trust you place in us, and transparency is at the core of our data protection practices. This brief overview aims to outline our dedication to maintaining the security and privacy of your personal data as we strive to deliver an exceptional customer experience through our websites, applications, and related services. <br><br>Thank you for choosing us, and rest assured that your privacy is a top priority for us.
            </p>
            <div class="row">
                <div class="col-lg-12">

                    <div data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" tabindex="0">
                        <div class="scrollspy-content" id="item-1">
                            <h3>1. Your privacy, your right</h3>
                            <p>As a customer, you have the freedom to decide what information you share with us. It's important to note that when signing up on our platform, acceptance of our terms of use is mandatory. This legal agreement establishes a contract, granting you the right to utilize the platform according to these terms. While we require certain information to fulfill our obligations under this contract, the decision to provide such information is entirely yours. The power of choice is in your hands to engage with us and provide a required information or rather not use our platform based on your preferences.</p>
                        </div>
                        <div class="scrollspy-content" id="item-2">
                            <h3>2. Your Legal Rights</h3>
                            <ul>
                                <li>Right to Access:
                                    <ul>
                                        <li>You have the right to be informed about the data we retain regarding you and the manner in which we handle this information.</li>
                                    </ul>
                                </li>
                                <li>Right to Rectification:
                                    <ul>
                                        <li>Should you identify inaccuracies in stored data, you have the option to request corrections.</li>
                                    </ul>
                                </li>
                                <li>Right to Erasure:
                                    <ul>
                                        <li>At any point, you can request the deletion of the data we have on record about you.</li>
                                    </ul>
                                </li>
                                <li>Right to Data Portability:
                                    <ul>
                                        <li>You have the right to request the transmission of the data stored about you in a machine-readable format, either to yourself or to another responsible party.</li>
                                    </ul>
                                </li>
                                <li>Right to Object:
                                    <ul>
                                        <li>You are at liberty to object to the receipt of newsletters or any other direct marketing communications at any given time.</li>
                                    </ul>
                                </li>
                            </ul>

                            <br>
                            <p>Additionally, you possess the right, based on reasons specific to your circumstances, to object at any time to the processing of your personal data, conducted under the provisions of Sec. 34 (b) DPA IRR. This also applies to any profiling carried out for the purposes outlined in Sec. 34 (b) DPA IRR. If you raise an objection, we will cease processing your personal data in the future unless we can demonstrate compelling grounds for the processing that outweigh your interests, rights, and freedoms.
                            </p>
                        </div>
                        <div class="scrollspy-content" id="item-3">
                            <h3>3. Overview of Processed Personal Data</h3>
                            <p>This section provides general insights into the types of personal data we handle in relation to you. Personal data refers to information that either directly identifies you (like your name or photo) or enables indirect identification (such as a user ID linked to personal information in your profile).
                            </p><br>
                            <p>For more detailed information on our processing activities, please refer to the subsequent section. Our data processing on the platform can be summarized by referencing the main categories of personal data:</p>
                            <ul>
                                <li>a. Profile Data (Master Data)</li>
                                <li>This encompasses essential information like your name, email address, password, telephone number, delivery addresses.
                                    <ul>
                                        <li>Why do we process this category?</li>
                                        <li>This data, constituting your master data, is crucial for our services. Creating a profile requires an email address/telephone number and a password.</li>
                                    </ul>
                                </li>
                                <br>
                                <li>b. Purchase History Data</li>
                                <li>This covers your purchase history, selected shops, invoices, order ID, comments, payment method, delivery address, successful, and cancelled orders.
                                    <ul>
                                        <li>Why do we process this category?</li>
                                        <li>Your purchase's information is stored in your profile, accessible at any time. We utilize this data to enhance our services and tailor the platform to your interests.</li>
                                    </ul>
                                </li>
                                <br>
                                <li>c. Location Data</li>
                                <li>This involves your address, postcode, city, country, and device coordinates.
                                    <ul>
                                        <li>Why do we process this category?</li>
                                        <li>We require this data for order delivery and automatically generate coordinates to process your address in linked systems, aiding riders.</li>
                                    </ul>
                                </li>
                                <br>
                                <li>d. Device Information and Access Data
                                </li>
                                <li>This encompasses device ID, device identification, operating system details, access time, configuration settings, and IP address.
                                    <ul>
                                        <li>Why do we process this category?</li>
                                        <li> Stored for technical reasons, this information helps detect suspicious behavior and safeguards our platform.</li>
                                    </ul>
                                </li>
                                <br>
                                <li>e. Customer Care Data</li>
                                <li>
                                    <ul>This includes your name, address, telephone number and email address.
                                        <li>Why do we process this category?</li>
                                        <li>Collected when you contact us, this data ensures we can assist you effectively and is not combined with your platform profile data.</li>
                                    </ul>
                                </li>
                                <br>
                                <li>f. Marketing Contact and Communications Data</li>
                                <li>
                                    <ul>This includes your name, email address, telephone number.
                                        <li>Why do we process this category?</li>
                                        <li>To send communications, we use this data. Personalization improves customer interaction, and the information is also used to contact you regarding order-related matters.
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    PRIVACY PART END
        =======================================-->

    <!--=====================================
                    JS LINK PART START
        =======================================-->

    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>