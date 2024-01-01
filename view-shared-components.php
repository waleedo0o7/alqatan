<?php include 'layout-header.php'; ?>

<main>

    <section class="section mb-5">

        <div class="container">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مؤلفات الشيخ </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

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

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مرئيات </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

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

    <section id="gallery">

        <h1 class="text-center text-capitalize"> Nested Gallery </h1>

        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <a data-fancybox="fancy-gallery" href="assets/images/other-1.jpg">
                        <img alt="" class="img-fluid" src="assets/images/other-1.jpg">
                        <p> عنوان الصورة </p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a data-fancybox="fancy-gallery" href="assets/images/other-2.jpg">
                        <img alt="" class="img-fluid" src="assets/images/other-2.jpg">
                        <p> عنوان الصورة </p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a data-fancybox="fancy-gallery" href="assets/images/other-3.jpg">
                        <img alt="" class="img-fluid" src="assets/images/other-3.jpg">
                        <p> عنوان الصورة </p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a data-fancybox="fancy-gallery" href="assets/images/other-4.jpg">
                        <img alt="" class="img-fluid" src="assets/images/other-4.jpg">
                        <p> عنوان الصورة </p>
                    </a>
                </div>
            </div>
        </div>



    </section>

    <section>
        <h1 class="text-center"> video js </h1>
        <video src="assets/post-001.mp4" class="video-js" controls preload="auto" data-setup="{}"></video>
    </section>

    <section class="my-5">

        <div class="container">

            <div class="co-custom-taps">

                <ul class="nav nav-tabs" id="myTab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="tap1-tab" data-toggle="tab" href="#tap1" role="tab" aria-controls="tap1" aria-selected="true"> نسب الشيخ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tap2-tab" data-toggle="tab" href="#tap2" role="tab" aria-controls="tap2" aria-selected="false"> نشأته وتعلمه </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="tap3-tab" data-toggle="tab" href="#tap3" role="tab" aria-controls="tap3" aria-selected="false"> السيرة الدعوية </a>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link" id="tap3-tab" data-toggle="tab" href="#tap3" role="tab" aria-controls="tap3" aria-selected="false"> منهج الشيخ </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="tap3-tab" data-toggle="tab" href="#tap3" role="tab" aria-controls="tap3" aria-selected="false"> المسيرة الدعوية </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="tap3-tab" data-toggle="tab" href="#tap3" role="tab" aria-controls="tap3" aria-selected="false"> إسهامات الشيخ </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="tap3-tab" data-toggle="tab" href="#tap3" role="tab" aria-controls="tap3" aria-selected="false"> الشيوخ الذي تتلمذ على أيديهم </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" id="tap3-tab" data-toggle="tab" href="#tap3" role="tab" aria-controls="tap3" aria-selected="false"> مؤلفاته </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="tap3-tab" data-toggle="tab" href="#tap3" role="tab" aria-controls="tap3" aria-selected="false"> تلاميذ الشيخ </a>
                    </li>

                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tap1" role="tabpanel" aria-labelledby="tap1-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <p> هو أحمد بن عبد العزيز بن أحمد بن إبراهيم بن صقر بن فواز القطان التميمي، ولد ونشأ في مدينة الكويت ودرس التربية الإسلامية ثمانية عشر عامًا، حتى تخرج من معهد المعلمين في عام 1969 </p>
                                <p> اختلط في بداية حياته بالشيوعيين في الكويت ثم تعرف على الحركة الإسلامية فصار من أبرز خطباء حركة الصحوة الإسلامية في ثمانينيات وبداية تسعينيات القرن العشرين في الكويت. </p>
                            </div>

                            <div class="col-md-5">
                                <img src="assets/images/cv-01.png" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tap2" role="tabpanel" aria-labelledby="tap2-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <p> هو أحمد بن عبد العزيز بن أحمد بن إبراهيم بن صقر بن فواز القطان التميمي، ولد ونشأ في مدينة الكويت ودرس التربية الإسلامية ثمانية عشر عامًا، حتى تخرج من معهد المعلمين في عام 1969 </p>
                                <p> اختلط في بداية حياته بالشيوعيين في الكويت ثم تعرف على الحركة الإسلامية فصار من أبرز خطباء حركة الصحوة الإسلامية في ثمانينيات وبداية تسعينيات القرن العشرين في الكويت. </p>
                            </div>

                            <div class="col-md-5">
                                <img src="assets/images/cv-01.png" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tap3" role="tabpanel" aria-labelledby="tap3-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <p> هو أحمد بن عبد العزيز بن أحمد بن إبراهيم بن صقر بن فواز القطان التميمي، ولد ونشأ في مدينة الكويت ودرس التربية الإسلامية ثمانية عشر عامًا، حتى تخرج من معهد المعلمين في عام 1969 </p>
                                <p> اختلط في بداية حياته بالشيوعيين في الكويت ثم تعرف على الحركة الإسلامية فصار من أبرز خطباء حركة الصحوة الإسلامية في ثمانينيات وبداية تسعينيات القرن العشرين في الكويت. </p>
                            </div>

                            <div class="col-md-5">
                                <img src="assets/images/cv-01.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- co-custom-taps -->

        </div>

    </section>

</main>

<?php include 'layout-footer.php'; ?>