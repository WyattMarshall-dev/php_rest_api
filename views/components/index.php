<?php 
    require_once "components/session_handler.php";
    require_once "components/FormClass.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <script src="../script.js" defer></script>
    <title>PHP REST API</title>
</head>
<body>
<?php 
    include "flashBanner.php"; 
    include "navbar.php";
?>

    
    <div class="container" id="main-content">

        <div id="content-wrapper">
            <div class="filter-container">
                <form id="sidebarForm" action="submit.php" method="post">
                    <?php
                    // Creates radio button groups for filtering results
                    require_once "RadioBtn.php";
                    echo "<div class='filter-wrapper' >";
                        echo "<div>";
                            $button = array(
                                'All' => 'All',
                                'author1' => 'JK Rowling',
                                'author2' => 'Charles Dickens',
                                'author3' => 'Andrew Roberts',
                            );
                            createBtn($button, 'author', 'radioBtn');
                        echo "</div>";
                    

                        echo "<div>";
                            $button2 = array(
                                'All' => 'All',
                                'Fiction' => 'Fiction',
                                'Non-Fiction' => 'Non-Fiction',
                                'Biographies' => 'Biographies',
                            );
                            createBtn($button2, 'category', 'radioBtn');
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
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    } else {
                        $page = 0;
                    }
                    // displays how many results are being shown out of total result returned from DB
                    echo "<small>" . $response['information']['ObjectCount'] . " Results (showing " . (array_key_first($response['data'][$page]) + 1) . "-" . (array_key_last($response['data'][$page]) + 1) . " of " . $response['information']['ObjectCount'] . ")</small>"; 
                    ?>
                </div>
                <hr>
                <?php
                if (!$response || $response['information']['ObjectCount'] < 1) {
                    echo "There are no results...<br>";
                } else {
                    foreach ($response['data'][$page] as $row) {
                        echo "<div class='card'>";
                            echo "<img src='http://localhost/Projects/REST_API/uploads/{$row["thumbnail"]}' class='card-img' alt=''>";
                            echo "<div class='card-flex'>";
                                echo "<a href=" . "show.php?id={$row['id']}" . ">" . $row['title'] ."</a><br>";
                                echo "<p>" . $row['author'] . '</p>';
                                echo "<p>" . $row['pub_year'] . '</p>';
                                echo "<p>" . $row['genre'] . '</p>';
                                echo "<p>" . $row['id'] . '</p>';
                            echo "</div>";
                        echo "</div>";   
                    }
                }
                ?>
            </div>
        </div>
        
    </div>

    <?php include "components/paginator.php"; ?>

    <?php include "footer.php"; ?>

</body>
</html>
