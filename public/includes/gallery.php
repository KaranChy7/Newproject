<div id = "our_gallery" class="page-gallery section">
    <div class="container">
        <div class="title">
            <h4>Portfolio</h4>
            <h6>Creative work samples.</h6>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-design-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design"
                    aria-selected="true"> All Types of Graphic Design</button>
            </li>
            
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-poster-tab" data-bs-toggle="pill" data-bs-target="#pills-poster"
                    type="button" role="tab" aria-controls="pills-poster" aria-selected="false">Poster Design</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-social-media-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-social-media" type="button" role="tab" aria-controls="pills-social-media"
                    aria-selected="false">Social Media Handle </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-thumbnail-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-thumbnail" type="button" role="tab" aria-controls="pills-thumbnail"
                    aria-selected="false">Thumbnail Desing</button>
            </li> 
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-design" role="tabpanel"
                aria-labelledby="pills-design-tab" tabindex="0">                
                <div class="gallery-slider">
                    <?php
                    // Number of images you want to generate
                    $total_images = 7; // Total images available
                    $home_limit = $total_images;    // Show only 6 images on the homepage
                    // Determine if we should show all images (Gallery) or limit them (Homepage)
                    $page = basename($_SERVER['PHP_SELF']); // Get current filename
                    $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
                    // Set the number of images to display
                    $num_images = $show_all ? $total_images : $home_limit;
                    // Loop through and generate the image blocks
                    for ($i = 1; $i <= $num_images; $i++) { ?>
                        <!-- template -->
                        <a href="images/gallery/gallery_<?= $i; ?>.jpg" class="image">
                            <img src="images/gallery/gallery_<?= $i; ?>.jpg" alt="Image <?= $i; ?>">
                        </a>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-poster" role="tabpanel" aria-labelledby="pills-poster-tab"
                tabindex="0">
                <div class="gallery-slider">
                    <?php
                    // Number of images you want to generate
                    $total_images = 3; // Total images available
                     $home_limit = $total_images;    // Show only 6 images on the homepage
                    // Determine if we should show all images (Gallery) or limit them (Homepage)
                    $page = basename($_SERVER['PHP_SELF']); // Get current filename
                    $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
                    // Set the number of images to display
                    $num_images = $show_all ? $total_images : $home_limit;
                    // Loop through and generate the image blocks
                    for ($i = 1; $i <= $num_images; $i++) { ?>
                        <!-- template -->
                        <a href="images/gallery/poster<?= $i; ?>.jpg" class="image">
                            <img src="images/gallery/poster<?= $i; ?>.jpg" alt="Image <?= $i; ?>">
                        </a>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-social-media" role="tabpanel" aria-labelledby="pills-social-media-tab"
                tabindex="0">
                <div class="gallery-slider">
                    <?php
                    // Number of images you want to generate
                    $total_images = 4; // Total images available
                     $home_limit = $total_images;   // Show only 6 images on the homepage
                    // Determine if we should show all images (Gallery) or limit them (Homepage)
                    $page = basename($_SERVER['PHP_SELF']); // Get current filename
                    $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
                    // Set the number of images to display
                    $num_images = $show_all ? $total_images : $home_limit;
                    // Loop through and generate the image blocks
                    for ($i = 1; $i <= $num_images; $i++) { ?>
                        <!-- template -->
                        <a href="images/gallery/socialmedia<?= $i; ?>.jpg" class="image">
                            <img src="images/gallery/socialmedia<?= $i; ?>.jpg" alt="Image <?= $i; ?>">
                        </a>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-thumbnail" role="tabpanel" aria-labelledby="pills-thumbnail-tab"
                tabindex="0">
                <div class="gallery-slider">
                    <?php
                    // Number of images you want to generate
                    $total_images = 2; // Total images available
                    $home_limit = $total_images;  // Show only 6 images on the homepage
                    // Determine if we should show all images (Gallery) or limit them (Homepage)
                    $page = basename($_SERVER['PHP_SELF']); // Get current filename
                    $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
                    // Set the number of images to display
                    $num_images = $show_all ? $total_images : $home_limit;
                    // Loop through and generate the image blocks
                    for ($i = 1; $i <= $num_images; $i++) { ?>
                        <!-- template -->
                        <a href="images/gallery/thumbnail<?= $i; ?>.jpg" class="image">
                            <img src="images/gallery/thumbnail<?= $i; ?>.jpg" alt="Image <?= $i; ?>">
                        </a>
                    <?php }
                    ?>
                </div>
            </div>
             
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
                tabindex="0">....</div>
        </div>
    </div>
</div>
