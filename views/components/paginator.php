<div class="paginatorDiv">
    <?php
    // NEW CONTENT
    $page = isset($_GET['page']) ? $_GET['page'] : null;
        // Pagination
        $pageCount = $response['information']['pageCount'];
        $author = isset($_GET['author']) ? $_GET['author'] : null;
        $category = isset($_GET['category']) ? $_GET['category'] : null;
        // $year = isset($_GET['year']) ? http_build_query($_GET['year']) : null;
        echo "<form action='submit.php' method='POST'>";
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

            echo "<div id='pageIcons'>";
            for ($i=0; $i < $pageCount; $i++) {
                $page = $i + 1;
                echo "<input type='submit' class='paginator' name='page' value='{$page}'></input>";
            }
            echo "</div>";
            echo "</form>";

    ?>
</div>