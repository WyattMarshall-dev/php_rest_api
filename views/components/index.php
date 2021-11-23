<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js" defer></script>
    <script src="../js/checkbox.js" defer></script>
    <title>PHP REST API</title>
</head>
<body>
<?php  
    include "navbar.php";
    include "flashBanner.php";
?>

    <div class="container" id="main-content">

        <div id="content-wrapper">
            <div class="filter-container">
                <form id="sidebarForm" action="submit.php" method="post">
                    <?php
                    // Creates radio button groups for filtering results
                    echo "<div class='filter-wrapper' >";
                    
                        $button = array(
                            'All' => 'All',
                            'author1' => 'JK Rowling',
                            'author2' => 'Charles Dickens',
                            'author3' => 'Andrew Roberts',
                        );
                        echo "<div class='btn-group'>";
                            echo "<p>Author</p>";
                            createBtn($button, 'author', 'radioBtn');
                        echo "</div>";
                    

                        $button2 = array(
                            'All' => 'All',
                            'Fiction' => 'Fiction',
                            'Non-Fiction' => 'Non-Fiction',
                            'Biographies' => 'Biographies',
                        );
                        echo "<div class='btn-group'>";
                            echo "<p>Genre</p>";
                            createBtn($button2, 'category', 'radioBtn');
                        echo "</div>";

                        // Create Checkboxes from array data in checkbox.php
                        $checkboxes = array(
                            '1900' => '1900',
                            '1950' => '1950',
                            '2000' => '2000',
                            '2020' => '2020',
                        );
                        echo "<div class='btn-group'>";
                            echo "<p>Year (from - to)</p>";
                            createCheckbox($checkboxes, 'year[]', 'radioBtn');
                        echo "</div>";
                    echo "</div>";
                    ?>
                    <button type="submit" class="submitBtn">Submit</button>
                </form>
                <a href="index.php">Reset Filters</a><br>
            </div>
            
            <div class="grid">
                <div>
                    <h2>Book List</h2>

                    <?php 
                    $page = isset($_GET['page']) ? $_GET['page'] - 1 : 0;

                    // displays how many results are being shown out of total returned from DB
                    echo "<small>" . $response['information']['ObjectCount'] . " Results (showing " . (array_key_first($response['data'][$page]) + 1) . "-" . (array_key_last($response['data'][$page]) + 1) . " of " . $response['information']['ObjectCount'] . ")</small>"; 
                    ?>
                </div>
                <?php
                if (!$response || $response['information']['ObjectCount'] < 1) {
                    echo "There are no results...<br>";
                } else {
                    foreach ($response['data'][$page] as $row) {
                        echo "<div class='card'>";
                            echo "<img src='http://localhost/Projects/REST_API/uploads/{$row["thumbnail"]}' class='card-img' alt=''>";
                            echo "<div class='card-flex'>";
                                echo "<a href=" . "show.php?id={$row['id']}" . ">" . $row['title'] ."</a><br>";
                                echo "<p>Author: " . $row['author'] . '</p>';
                                echo "<p>Year: " . $row['pub_year'] . '</p>';
                                echo "<p>Genre: " . $row['genre'] . '</p>';
                                echo "<p>ID: " . $row['id'] . '</p>';
                                echo "<p>ISBN: " . $row['isbn'] . '</p>';
                            echo "</div>";
                        echo "</div>";   
                    }
                }
                
                ?>
            </div>
        </div>
        <?php include "components/paginator.php"; ?>
        <?php include "components/mobile-paginator.php"; ?>
    </div>

    <?php include "footer.php"; ?>

</body>
</html>
