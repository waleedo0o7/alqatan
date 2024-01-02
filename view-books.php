<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>


<main>

    <div class="container">

        <div class="section-header mb-5 mt-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> مؤلفات الشيخ </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 col-xl-4 mb-4"><?php @include "./shared-html/book-card.html"; ?></div> 
            
            <div class="col-md-6 col-xl-4 mb-4"><?php @include "./shared-html/book-card.html"; ?></div> 
            
            <div class="col-md-6 col-xl-4 mb-4"><?php @include "./shared-html/book-card.html"; ?></div> 
            
            <div class="col-md-6 col-xl-4 mb-4"><?php @include "./shared-html/book-card.html"; ?></div> 
            
            <div class="col-md-6 col-xl-4 mb-4"><?php @include "./shared-html/book-card.html"; ?></div> 
            
            <div class="col-md-6 col-xl-4 mb-4"><?php @include "./shared-html/book-card.html"; ?></div> 
        </div>


    </div>
</main>


<?php include 'layout-footer.php'; ?>