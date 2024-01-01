<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <div class="container">

        <div class="section-header mb-5 mt-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> الخطب المنبرية   </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div>

        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="co-search mb-5">
                    <div class="input-with-icon-wrapper input-with-submit-button">
                        <input type="text" class="form-control" id="name" placeholder=" ابحث عن ... ">
                        <a href="#" class="btn btn-primary submit-btn"> بحث </a>
                    </div>
                </div><!-- co-search -->
            </div>
        </div>



        <div class="co-sounds">

            <?php @include "./shared-html/sound-card.html"; ?>
            <?php @include "./shared-html/sound-card.html"; ?>
            <?php @include "./shared-html/sound-card.html"; ?>
            <?php @include "./shared-html/sound-card.html"; ?>

        </div><!-- co-sounds -->



    </div>
</main>


<?php include 'layout-footer.php'; ?>