<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <section class="section">
        <h1 class="text-center p-3 bg-primary text-capitalize"> latest news slider </h1>
    </section> <!-- section -->

    <section class="section py-5 bg-gray-light">

        <div class="section-header mb-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> التراث الدعوي للشيخ القطان </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div> <!-- section-header -->


        <div class="container mb-3">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="co-icon-card">
                        <a href="#">
                            <i class="icon icon-video-2 mb-3"></i>
                            <h3 class="text-center"> المرئيات </h3>
                        </a>
                    </div><!-- co-icon-card -->
                </div> <!-- col-sm-6 -->
                <div class="col-sm-6 col-xl-3">
                    <div class="co-icon-card">
                        <a href="#">
                            <i class="icon icon-video-1 mb-3"></i>
                            <h3 class="text-center"> المحاضرات </h3>
                        </a>
                    </div><!-- co-icon-card -->
                </div> <!-- col-sm-6 -->
                <div class="col-sm-6 col-xl-3">
                    <div class="co-icon-card">
                        <a href="#">
                            <i class="icon icon-book-open-1 mb-3"></i>
                            <h3 class="text-center"> مؤلفات الشيخ </h3>
                        </a>
                    </div><!-- co-icon-card -->
                </div> <!-- col-sm-6 -->
                <div class="col-sm-6 col-xl-3">
                    <div class="co-icon-card">
                        <a href="#">
                            <i class="icon icon-sound-waves mb-3"></i>
                            <h3 class="text-center"> الخطب </h3>
                        </a>
                    </div><!-- co-icon-card -->
                </div> <!-- col-sm-6 -->



            </div> <!-- row -->
        </div> <!-- container -->


    </section> <!-- section -->

    <section id="books" class="section py-5">

        <div class="section-header mb-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> مؤلفات الشيخ </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div> <!-- section-header -->


        <div class="container mb-4">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <?php @include "./shared-html/book-card.html"; ?>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <?php @include "./shared-html/book-card.html"; ?>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <?php @include "./shared-html/book-card.html"; ?>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <?php @include "./shared-html/book-card.html"; ?>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <?php @include "./shared-html/book-card.html"; ?>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <?php @include "./shared-html/book-card.html"; ?>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div>

    </section>

    <section id="visuals" class="section py-5 bg-gray-light">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مرئيات </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">
                <div class="swiper-button-prev visuals-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next visuals-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper visuals-swiper">

                    <div class="swiper-wrapper">
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
            </div> <!-- co-swiper-slider -->


        </div> <!-- container -->

        <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div>

    </section> <!-- section -->

    <section id="most-reads" class="section mb-5 py-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> الأكثر قراءة </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

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

        </div> <!-- container -->

        <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div>

    </section> <!-- section -->

    <section id="explanations" class="section pb-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> شروحات علمية </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">
                <div class="swiper-button-prev explanations-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next explanations-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper explanations-swiper">

                    <div class="swiper-wrapper">
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
            </div> <!-- co-swiper-slider -->


        </div> <!-- container -->

        <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div>

    </section> <!-- section -->




    <section id="gallery" class="section bg-secondary py-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline color-white"> صور الشيخ </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider arrows-down">

                <div class="swiper-button-prev gallery-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>

                <div class="swiper-button-next gallery-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper gallery-swiper">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="swiper-slide-content">

                                <div class="co-gallery-card-images">

                                    <div class="co-images">

                                        <a data-fancybox="fancy-gallery-1" href="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/al-qatan-1.jpg">

                                        </a>

                                    </div>

                                    <h3 class="text-center color-primary"> لقاءات </h3>

                                </div><!-- gallery-card -->
                            </div> <!-- swiper-slide-content -->
                        </div> <!-- swiper-slide -->

                        <div class="swiper-slide">

                            <div class="swiper-slide-content">

                                <div class="co-gallery-card-images">

                                    <div class="co-images">

                                        <a data-fancybox="fancy-gallery-1" href="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/al-qatan-1.jpg">

                                        </a>

                                    </div>

                                    <h3 class="text-center color-primary"> ندوات </h3>

                                </div><!-- gallery-card -->
                            </div> <!-- swiper-slide-content -->
                        </div> <!-- swiper-slide -->

                        <div class="swiper-slide">

                            <div class="swiper-slide-content">

                                <div class="co-gallery-card-images">

                                    <div class="co-images">

                                        <a data-fancybox="fancy-gallery-1" href="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/al-qatan-1.jpg">

                                        </a>

                                    </div>

                                    <h3 class="text-center color-primary"> شهادات وتكريم </h3>

                                </div><!-- gallery-card -->
                            </div> <!-- swiper-slide-content -->
                        </div> <!-- swiper-slide -->

                        <div class="swiper-slide">

                            <div class="swiper-slide-content">

                                <div class="co-gallery-card-images">

                                    <div class="co-images">

                                        <a data-fancybox="fancy-gallery-1" href="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/al-qatan-1.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/al-qatan-1.jpg">

                                        </a>

                                    </div>

                                    <h3 class="text-center color-primary"> عنوان أخر </h3>

                                </div><!-- gallery-card -->
                            </div> <!-- swiper-slide-content -->
                        </div> <!-- swiper-slide -->

                    </div> <!-- swiper-wrapper -->

                    <!-- If we need pagination -->
                    <div class="gallery-pagination"></div>

                </div> <!-- swiper gallery-swiper -->

            </div> <!-- co-swiper-slider -->

        </div> <!-- container -->

    </section> <!-- section -->





    <section id="partners" class="section py-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مواقع صديقة </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">

                <div class="swiper-button-prev partners-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>

                <div class="swiper-button-next partners-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper partners-swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>





                    </div>
                </div>
            </div> <!-- co-swiper-slider -->


        </div> <!-- container -->


    </section> <!-- section -->


</main>

<?php include 'layout-footer.php'; ?>