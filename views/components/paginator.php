<div class="paginatorDiv">
    <?php
        // Pagination
        $pageCount = $response['information']['pageCount'];
        $author = isset($_GET['author']) ? $_GET['author'] : null;
        $category = isset($_GET['category']) ? $_GET['category'] : null;
        echo "<form action='submit.php' method='POST'>";
            echo "<input type='hidden' name='author' value='" . $author . "'>";
            echo "<input type='hidden' name='category' value='" . $category . "'>";
        for ($i=0; $i < $pageCount; $i++) {
            echo "<input type='submit' class='paginator' name='page' value='{$i}'></input>";
        }
        echo "</form>";

    ?>
</div>