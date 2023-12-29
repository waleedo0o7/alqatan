<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>


<main>

    <div class="container">

        <section id="book-details" class="mt-5 mb-5 card co-book-details-card">

            <div class="row">

                <div class="col-md-7">

                    <div class="p-4">

                        <div class="book-details mb-4">

                            <p> <strong class="d-inline-flex min-w-130px"> اسم الملف </strong> <span class="ltr"> الداعية
                                    الناجحة </span> </p>

                            <p> <strong class="d-inline-flex min-w-130px"> حجم الملف </strong> 9.97 MB </p>

                            <p> <strong class="d-inline-flex min-w-130px"> نوع الملف </strong> application/pdf </p>

                            <p> <strong class="d-inline-flex min-w-130px"> تاريخ الأصدار </strong> 2023 February 1 </p>

                            <p> <strong class="d-inline-flex min-w-130px"> مشاهدات </strong> <span class="color-primary">
                                    2500 <i class="fa fa-eye"> </i> </span> </p>

                            <p> <strong class="d-inline-flex min-w-130px"> تحميل </strong> <span class="color-primary"> 2500
                                    <i class="fa fa-download"> </i> </span> </p>



                        </div><!-- book-details -->

                        <div class="co-about-book mb-4">
                            <h5> نبذة عن الكتاب </h5>
                            <p> الداعية الناجحة: إذا رأت أمراً معوجاً أصلحته بتلطف، وإذا طلبت حاجة سألتها بتعفف، فالصخب في
                                طلب الحاجات ينبه العداوات!! قال تعالى: {فلْيَنظُرْ أَيُّهَا أَزْكَى طَعَاماً فَلْيَأْتِكُم
                                بِرِزْقٍ مِّنْهُ وَلْيَتَلَطَّفْ وَلَا يُشْعِرَنَّ بِكُمْ أَحَداً } [الكهف:19] </p>
                        </div><!-- co-about-book -->

                        <ul class="d-flex social-media-links-colored links-lg reset-ul">
                            <li class="ml-2"> <a href="#" class="link facebook"> <i class="fab  fa-facebook-f"></i> </a>
                            </li>
                            <li class="ml-2"> <a href="#" class="link twitter"> <i class="fab  fa-twitter"></i> </a> </li>
                            <li class="ml-2"> <a href="#" class="link whatsapp"> <i class="fab  fa-whatsapp"></i> </a> </li>
                            <li class="ml-2"> <a href="#" class="link telegram"> <i class="fa  fa-paper-plane"></i> </a>
                            </li>
                        </ul>

                    </div>

                </div> <!-- col-md-6 -->

                <div class="col-md-5 d-flex justify-content-center align-items-center">

                    <div class="book-image">

                        <img src="assets/images/book.png" class="img-fluid image" alt="">

                        <div class="buttons-wrapper text-center">

                            <a href="#" class="btn btn-primary"> تحميل <i class="mr-2 fa fa-download"></i> </a>

                            <a href="preview-pdf-rtl.php" class="btn btn-primary"> مشاهدة <i class="mr-2 fa fa-eye"></i>
                            </a>

                        </div><!-- buttons-wrapper -->

                    </div><!-- book-image -->

                </div> <!-- col-md-6 -->

            </div><!-- row -->

        </section><!-- co-book-details-card -->


        <section id="related-books">

            <h3> ذات صلة </h3>




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




        </section>
    </div>
</main>


<?php include 'layout-footer.php'; ?>