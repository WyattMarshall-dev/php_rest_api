<?php
// Banner to appear at top of page with Flash messages from Session variable

if (isset($_SESSION['errors'])) {
    $flash = "<p>Form Failed to Submit! Please Check your input</p>";
    $classes = "error";
} else if (isset($_SESSION['success'])) {
    $flash = "<p>Form Submitted Successfully!</p>";
    $classes = "success";
} else {
    $classes = '';
    $flash = '';
}

echo "<div class='flashBanner flash-$classes'>";
    echo $flash;
echo '</div>';

?>
