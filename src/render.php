<?php
$directory = 'assets\img\masonry-portfolio\works';
$images = glob($directory . "/*.{jpg,png,gif}", GLOB_BRACE);

foreach($images as $image) {
    echo '<div class="project">';
    echo '<img src="'.$image.'" alt="Project Image">';
    echo '</div>';
}
?>
