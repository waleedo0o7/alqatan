<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <div class="container">

        <div class="section-header mb-5 mt-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> كويت الخير </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div>

        <section id="blog-list">

            <div class="co-blog-list">

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

                <?php @include "./shared-html/blog-card.html"; ?>

            </div><!-- co-aqsa-videos -->

        </section> <!-- blog-list -->

    </div>
</main>

<?php include 'layout-footer.php'; ?>