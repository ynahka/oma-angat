<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/checkout.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>
    <?php include('product-view.php'); ?>



    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Checkout</h2>
        </div>
    </section>


    <!--=====================================
                    CHECKOUT PART START
        =======================================-->
    <section class="inner-section checkout-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert-info">
                        <p>Returning customer? <a href="login.php">Click here to login</a></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Your order</h4>
                        </div>
                        <div class="account-content">
                            <div class="table-scroll">
                                <table class="table-list">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">brand</th>
                                            <th scope="col">quantity</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>01</h6>
                                            </td>
                                            <td class="table-image"><img src="images/product/1.png" alt="product"></td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>₱19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Fresh Company</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>3</h6>
                                            </td>
                                            <td class="table-action">
                                                <a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                                <a class="trash" href="#" title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>02</h6>
                                            </td>
                                            <td class="table-image"><img src="images/product/1.png" alt="product"></td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>₱19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Radhuni Masala</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>5</h6>
                                            </td>
                                            <td class="table-action">
                                                <a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                                <a class="trash" href="#" title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>03</h6>
                                            </td>
                                            <td class="table-image"><img src="images/product/1.png" alt="product"></td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>₱19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Pran Prio</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>2</h6>
                                            </td>
                                            <td class="table-action">
                                                <a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                                <a class="trash" href="#" title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>04</h6>
                                            </td>
                                            <td class="table-image"><img src="images/product/1.png" alt="product"></td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>₱19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Real Food</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>3</h6>
                                            </td>
                                            <td class="table-action">
                                                <a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                                <a class="trash" href="#" title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>05</h6>
                                            </td>
                                            <td class="table-image"><img src="images/product/1.png" alt="product"></td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>₱19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Rdhuni Company</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>7</h6>
                                            </td>
                                            <td class="table-action">
                                                <a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                                <a class="trash" href="#" title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="chekout-coupon">
                                <button class="coupon-btn">Payment Breakdown</button>
                                <form class="coupon-form">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit"><span>apply</span></button>
                                </form>
                            </div>
                            <div class="checkout-charge">
                                <ul>
                                    <li>
                                        <span>Sub total</span>
                                        <span>₱267.45</span>
                                    </li>
                                    <li>
                                        <span>delivery fee</span>
                                        <span>₱10.00</span>
                                    </li>
                                    <li>
                                        <span>discount</span>
                                        <span>₱00.00</span>
                                    </li>
                                    <li>
                                        <span>Total<small>(Incl. VAT)</small></span>
                                        <span>₱277.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Delivery Schedule</h4>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule active">
                                        <h6>express</h6>
                                        <p>90 min express delivery</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule">
                                        <h6>8am-10pm</h6>
                                        <p>8.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule">
                                        <h6>Next day</h6>
                                        <p>Next day or Tomorrow</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>contact number</h4>
                            <button data-bs-toggle="modal" data-bs-target="#contact-add">add contact</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact active">
                                        <h6>primary</h6>
                                        <p>+8801838288389</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact">
                                        <h6>secondary</h6>
                                        <p>+8801941101915</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact">
                                        <h6>secondary</h6>
                                        <p>+8801747875727</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>delivery address</h4>
                            <button data-bs-toggle="modal" data-bs-target="#address-add">add address</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address active">
                                        <h6>Home</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Office</h6>
                                        <p>east tejturi bazar, dhaka-1200. word no-04, road no-13/c, house no-4/b</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Bussiness</h6>
                                        <p>kawran bazar, dhaka-1100. word no-02, road no-13/d, house no-7/m</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card mb-0">
                        <div class="account-title">
                            <h4>payment option</h4>
                            <button data-bs-toggle="modal" data-bs-target="#payment-add">add card</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment active">
                                        <img src="images/payment/png/01.png" alt="payment">
                                        <h4>card number</h4>
                                        <p>
                                            <span>****</span>
                                            <span>****</span>
                                            <span>****</span>
                                            <sup>1876</sup>
                                        </p>
                                        <h5>miron mahmud</h5>
                                        <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment">
                                        <img src="images/payment/png/02.png" alt="payment">
                                        <h4>card number</h4>
                                        <p>
                                            <span>****</span>
                                            <span>****</span>
                                            <span>****</span>
                                            <sup>1876</sup>
                                        </p>
                                        <h5>miron mahmud</h5>
                                        <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment">
                                        <img src="images/payment/png/03.png" alt="payment">
                                        <h4>card number</h4>
                                        <p>
                                            <span>****</span>
                                            <span>****</span>
                                            <span>****</span>
                                            <sup>1876</sup>
                                        </p>
                                        <h5>miron mahmud</h5>
                                        <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-check">
                            <input type="checkbox" id="checkout-check">
                            <label for="checkout-check">By making this purchase you agree to our <a href="terms-and-conditions.php">Terms and Conditions</a>.</label>
                        </div>
                        <div class="checkout-proced">
                            <a href="invoice.php" class="btn btn-inline">Place your Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    CHECKOUT PART END
        =======================================-->


    <!--=====================================
                    MODAL ADD FORM START
        =======================================-->
    <!-- contact add form -->
    <div class="modal fade" id="contact-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new contact</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label>
                        <select class="form-select">
                            <option selected>choose title</option>
                            <option value="primary">primary</option>
                            <option value="secondary">secondary</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">number</label>
                        <input class="form-control" type="text" placeholder="Enter your number">
                    </div>
                    <button class="form-btn" type="submit">save contact info</button>
                </form>
            </div>
        </div>
    </div>

    <!-- address add form -->
    <div class="modal fade" id="address-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new address</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label>
                        <select class="form-select">
                            <option selected>choose title</option>
                            <option value="home">home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">address</label>
                        <textarea class="form-control" placeholder="Enter your address"></textarea>
                    </div>
                    <button class="form-btn" type="submit">save address info</button>
                </form>
            </div>
        </div>
    </div>

    <!-- payment add form -->
    <div class="modal fade" id="payment-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new payment</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">card number</label>
                        <input class="form-control" type="text" placeholder="Enter your card number">
                    </div>
                    <button class="form-btn" type="submit">save card info</button>
                </form>
            </div>
        </div>
    </div>
    <!--=====================================
                    MODAL ADD FORM END
        =======================================-->


    <!--=====================================
                    MODAL EDIT FORM START
        =======================================-->
    <!-- contact edit form -->
    <div class="modal fade" id="contact-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit contact info</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label>
                        <select class="form-select">
                            <option value="primary" selected>primary</option>
                            <option value="secondary">secondary</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">number</label>
                        <input class="form-control" type="text" value="+8801838288389">
                    </div>
                    <button class="form-btn" type="submit">save contact info</button>
                </form>
            </div>
        </div>
    </div>

    <!-- address edit form -->
    <div class="modal fade" id="address-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit address info</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label>
                        <select class="form-select">
                            <option value="home" selected>home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">address</label>
                        <textarea class="form-control" placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea>
                    </div>
                    <button class="form-btn" type="submit">save address info</button>
                </form>
            </div>
        </div>
    </div>
    <!--=====================================
                    MODAL EDIT FORM END
        =======================================-->


    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
</body>

</html>