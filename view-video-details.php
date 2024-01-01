<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>


<main>

    <div class="container">

        <div class="title-header mt-5">

            <h3 class="headline"> الشيخ أحمد قطان ضيف لقاء الجمعة مع عبدالله المديفر </h3>

        </div>

        <div class="co-views-and-share mb-3">

            <div class="d-flex">
                <div class="co-views color-primary me-4 "><i class="fa fa-lg fa-eye"></i> 2500 </div>
                <div class="co-date color-gray"> الأحد، 08 يناير 2023 </div>
            </div>

            <ul class="d-flex social-media-links-colored links-lg reset-ul">
                <li class="ml-2"> <a href="#" class="link facebook"> <i class="fab  fa-facebook-f"></i> </a>
                </li>
                <li class="ml-2"> <a href="#" class="link twitter"> <i class="fab  fa-twitter"></i> </a> </li>
                <li class="ml-2"> <a href="#" class="link whatsapp"> <i class="fab  fa-whatsapp"></i> </a> </li>
                <li class="ml-2"> <a href="#" class="link telegram"> <i class="fa  fa-paper-plane"></i> </a>
                </li>
            </ul>


        </div><!-- co-views-and-share -->


        <div class="co-play-video-card mb-5">
            <video src="assets/post.mp4" class="video-js" controls preload="auto" data-setup="{}"></video>
        </div>







        <section id="related-videos" class="mb-5">

            <h3 class="mb-3"> ذات صلة </h3>

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

        </section>

    </div>
</main>


<?php include 'layout-footer.php'; ?>