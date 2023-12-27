<?php include 'layout-header.php'; ?>

<main>

    <section class="section mb-5">

        <div class="container">

            <div class="section-header mb-4">
                <img src="assets/images/title-shape.svg" class="shape shape-start" alt="">
                <h3 class="headline"> مؤلفات الشيخ </h3>
                <img src="assets/images/title-shape.svg" class="shape shape-end" alt="">
            </div><!-- section-header -->

            <div class="section-content mb-4">
                <div class="row">
                    <div class="col-md-4 mb-3"> <?php @include "./shared-html/book-card.html"; ?> </div> <!-- col-md-4 -->
                    <div class="col-md-4 mb-3"> <?php @include "./shared-html/book-card.html"; ?> </div> <!-- col-md-4 -->
                    <div class="col-md-4 mb-3"> <?php @include "./shared-html/book-card.html"; ?> </div> <!-- col-md-4 -->
                </div><!-- row -->
            </div> <!-- section-content -->


            <div class="text-center">
                <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
            </div>

        </div> <!-- container -->

    </section>

    <section class="section mb-5">

        <div class="container">

            <div class="section-header mb-4">
                <img src="assets/images/title-shape.svg" class="shape shape-start" alt="">
                <h3 class="headline"> مرئيات </h3>
                <img src="assets/images/title-shape.svg" class="shape shape-end" alt="">
            </div><!-- section-header -->

            <div class="section-content mb-4">
                <div class="row">
                    <div class="col-md-4 mb-3"> <?php @include "./shared-html/video-card.html"; ?> </div> <!-- col -->
                    <div class="col-md-4 mb-3"> <?php @include "./shared-html/video-card.html"; ?> </div> <!-- col -->
                    <div class="col-md-4 mb-3"> <?php @include "./shared-html/video-card.html"; ?> </div> <!-- col -->
                </div><!-- row -->
            </div> <!-- section-content -->

            <div class="text-center">
                <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
            </div>

        </div> <!-- container -->

    </section> <!-- section -->

    <section class="section mb-5">
        <div class="container">
            <div class="co-swiper-slider">
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev visuals-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next visuals-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper visuals-swiper">
                    <!-- Additional required wrapper -->


                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section mb-5">
        <div class="container  mb-5">
            <div class="co-swiper-slider">
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev most-reads-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next most-reads-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper most-reads-swiper">
                    <!-- Additional required wrapper -->


                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'layout-footer.php'; ?>