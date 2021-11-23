<div class="mobile-paginator">
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$pageCount = $response['information']['pageCount'];
$author = isset($_GET['author']) ? $_GET['author'] : null;
$category = isset($_GET['category']) ? $_GET['category'] : null;

// echo $page;
if (!($page == 1)) {
    // Next Page Button
    echo "<form action='submit.php' method='POST' id='previousPage'>";
        if ($author) {
            echo "<input type='hidden' name='author' value='" . $author . "'>";
        }
        if($category){
            echo "<input type='hidden' name='category' value='" . $category . "'>";
        }
        if ($year) {
            echo "<input type='hidden' name='year[]' value='" . $year[0] . "'>";
            echo "<input type='hidden' name='year[]' value='" . $year[1] . "'>";
        }

        echo "<input type='hidden' name='page' value='" . $page - 1 . "'></input>";
        echo "<input type='submit' name='' class='paginator l-mobile-paginator' value='Previous'></input>";
    echo "</form>";
}

if (!($page == $pageCount)) {
    // Previous Page Button
    echo "<form action='submit.php' method='POST' id='nextPage'>";
        if ($author) {
            echo "<input type='hidden' name='author' value='" . $author . "'>";
        }
        if($category){
            echo "<input type='hidden' name='category' value='" . $category . "'>";
        }
        if ($year) {
            echo "<input type='hidden' name='year[]' value='" . $year[0] . "'>";
            echo "<input type='hidden' name='year[]' value='" . $year[1] . "'>";
    }

        echo "<input type='hidden' name='page' value='" . $page + 1 . "'></input>";
        echo "<input type='submit' name='' class='paginator r-mobile-paginator' value='Next'></input>";
    echo "</form>";
}

?>
</div>