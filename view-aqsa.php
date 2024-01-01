<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <div class="container">

        <section id="aqsa-videos">

            <div class="section-header mb-5 mt-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مقاطع عن الأقصى </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div>

            <div class="co-aqsa-videos">
                <div class="row">
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>

                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                </div>
            </div><!-- co-aqsa-videos -->

        </section> <!-- aqsa-videos -->

        <section id="blog-list">

            <div class="section-header mb-5 mt-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مؤتمرات </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div>

            <div class="co-blog-list">
                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

            </div><!-- co-aqsa-videos -->

        </section> <!-- blog-list -->



        <section id="seminar-videos">

            <div class="section-header mb-5 mt-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline">  ندوات     </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div>

            <div class="co-seminar-videos">
                <div class="row">
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>

                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                    <div class="col-md-4 mb-3"><?php @include "./shared-html/video-card.html"; ?></div>
                </div>
            </div><!-- co-seminar-videos -->

        </section> <!--seminar-videos -->


    </div>

</main>


<?php include 'layout-footer.php'; ?>