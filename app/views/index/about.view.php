<div class="hero-wrap hero-bread" style="background-image: url('../assets/images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/"><?= $home ?></a></span> <span><?= $h_p ?></span></p>
                <h1 class="mb-0 bread"><?= $h_p ?></h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../assets/images/about.jpg);">
                <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4"><?= $welc ?></h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <?php
                        foreach ($welc_details as $p)
                        {
                            echo "<p>$p</p>";
                        }
                    ?>
                    <p><a href="/shop" class="btn btn-primary"><?= $shop ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0"><?= $newsletter ?></h2>
                <span><?= $newsletter_d ?></span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="<?= $enterE ?>">
                        <input type="submit" value="<?= $sub ?>" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(../assets/images/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $numbers->HAPPY_CUSTOMERS ?>">0</strong>
                                <span><?= $H_C ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $numbers->BRANCHES ?>">0</strong>
                                <span><?= $Bran ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $numbers->PARTNER ?>">0</strong>
                                <span><?= $Part ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $numbers->AWARDS ?>">0</strong>
                                <span><?= $Award ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading"><?= $test ?></span>
                <h2 class="mb-4"><?= $test_p1 ?></h2>
                <p><?= $test_p2 ?></p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <?php
                        foreach ($feedbacks as $feedback)
                        {
                            ?>

                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="user-img mb-5" style="background-image: url(..<?= IMG.$feedback->user->img ?>)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                          <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-5 pl-4 line"><?php echo $feedback->feedback ?>.</p>
                                        <p class="name"><?= ucwords($feedback->user->name) ?></p>
                                        <span class="position"><?= $feedback->user->job ?></span>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Free Shipping</h3>
                        <span>On order over $100</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Always Fresh</h3>
                        <span>Product well package</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Superior Quality</h3>
                        <span>Quality Products</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Support</h3>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>