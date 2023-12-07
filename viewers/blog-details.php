<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/blog-details.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>

    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Post Details</h2>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                  BLOG DETAILS PART START
        =======================================-->
    <section class="inner-section blog-details-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <article class="blog-details">
                        <a class="blog-details-thumb" href="">
                            <img src="images/blog/01.jpg" alt="blog">
                        </a>
                        <div class="blog-details-content">
                            <ul class="blog-details-meta">
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    <span>Oma-angat</span>
                                </li>
                                <li>
                                    <i class="icofont-ui-calendar"></i>
                                    <span>february 02, 2021</span>
                                </li>

                            </ul>
                            <h2 class="blog-details-title">Sample Title</h2>
                            <p class="blog-details-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias repellendus laudantium at optio ex, magnam illo ducimus placeat voluptates officiis molestiae ratione assumenda dignissimos est id hic veritatis. Aspernatur aliquam praesentium officiis pariatur velit nesciunt debitis odio, dolores harum, quidem nobis enim. Incidunt quia doloremque ipsam optio repudiandae non ipsa.</p>

                            <ul class="blog-details-list">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi error ex placeat repudiandae et ut modi non libero mollitia velit. Dolor consequuntur quo error explicabo? Officiis vitae sed officia autem harum sequi pariatur corporis fugit suscipit? Laboriosam animi voluptatum quibusdam voluptate expedita corrupti natus rerum, quaerat velit, voluptates saepe quasi.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi error ex placeat repudiandae et ut modi non libero mollitia velit. Dolor consequuntur quo error explicabo? Officiis vitae sed officia autem harum sequi pariatur corporis fugit <a href="#">suscipit?</a> Laboriosam animi voluptatum quibusdam voluptate expedita corrupti natus rerum, quaerat velit, voluptates saepe quasi.</li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="blog-details-form">
                                <h3 class="details-form-title">post comment</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="write your comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="form-btn">post comment</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details-comment">
                                <h3 class="comment-title">2 Comments</h3>
                                <ul class="comment-list">
                                    <li class="comment-item">
                                        <div class="comment-media">
                                            <a class="comment-avatar" href="#">
                                                <img src="images/avatar/01.jpg" alt="review">
                                            </a>
                                            <h6 class="comment-meta">
                                                <a href="#">miron mahmud</a>
                                                <span>June 02, 2020</span>
                                            </h6>
                                        </div>
                                        <p class="comment-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="comment-reply">
                                            <input type="text" placeholder="reply your comment">
                                            <button><i class="icofont-reply"></i>reply</button>
                                        </form>
                                        <ul class="comment-reply-list">
                                            <li class="comment-reply-item">
                                                <div class="comment-media">
                                                    <a class="comment-avatar" href="#">
                                                        <img src="images/avatar/02.jpg" alt="review">
                                                    </a>
                                                    <h6 class="comment-meta">
                                                        <a href="#">labonno khan</a>
                                                        <span>June 02, 2020</span>
                                                    </h6>
                                                </div>
                                                <p class="comment-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores</p>
                                                <form class="comment-reply">
                                                    <input type="text" placeholder="reply your comment">
                                                    <button><i class="icofont-reply"></i>reply</button>
                                                </form>
                                            </li>
                                            <li class="comment-reply-item">
                                                <div class="comment-media">
                                                    <a class="comment-avatar" href="#">
                                                        <img src="images/avatar/03.jpg" alt="review">
                                                    </a>
                                                    <h6 class="comment-meta">
                                                        <a href="#">tahmina bonny</a>
                                                        <span>June 02, 2020</span>
                                                    </h6>
                                                </div>
                                                <p class="comment-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores</p>
                                                <form class="comment-reply">
                                                    <input type="text" placeholder="reply your comment">
                                                    <button><i class="icofont-reply"></i>reply</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="comment-item">
                                        <div class="comment-media">
                                            <a class="comment-avatar" href="#">
                                                <img src="images/avatar/04.jpg" alt="review">
                                            </a>
                                            <h6 class="comment-meta">
                                                <a href="#">shipu shikdar</a>
                                                <span>June 02, 2020</span>
                                            </h6>
                                        </div>
                                        <p class="comment-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="comment-reply">
                                            <input type="text" placeholder="reply your comment">
                                            <button><i class="icofont-reply"></i>reply</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                  BLOG DETAILS PART END
        =======================================-->




    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
</body>

</html>