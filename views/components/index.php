<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>PHP REST API</title>
</head>
<body>
    <nav>
        <div class="container" id="navbar">
            <div>
                <h1><a href="index.php" id="logo">Library</a> </h1>   
            </div>
            <div>
                <a href="create.php">Add Book</a>
            </div>
        </div>
    </nav>
    
    <div class="container" id="main-content">

        <div id="content-wrapper">
            <div>
                <form id="sidebarForm" action="submit.php" method="post">
                <form action="submit.php" method="post">
                    <?php
                    require_once "RadioBtn.php";
                    $button = array(
                        'All' => 'All',
                        'author1' => 'JK Rowling',
                        'author2' => 'Charles Dickens',
                        'author3' => 'Andrew Roberts',
                    );
                    createBtn($button, 'author');

                    echo "<br>";

                    $button2 = array(
                        'All' => 'All',
                        'Fiction' => 'Fiction',
                        'Non-Fiction' => 'Non-Fiction',
                        'Biographies' => 'Biographies',
                    );
                    createBtn($button2, 'category');
                    
                    ?>
                    <button type="submit" class="submitBtn">Submit</button>
                </form>
                <a href="index.php">Reset Filters</a><br>
            </div>
            
            <div class="grid">
                <h2>Book List</h2>
                <hr>
                <?php
                if (!$response || $response['information']['ObjectCount'] < 1) {
                    echo "There are no results...<br>";
                } else {
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    } else {
                        $page = 0;
                    }
                    foreach ($response['data'][$page] as $row) {
                        echo "<div class='card'>";
                            echo "<img src='http://localhost/Projects/REST_API/uploads/{$row["thumbnail"]}' width='400px' alt=''>";
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
    <div class="paginatorDiv">
    <?php
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

    <footer>
        <div class="container">
            <p>I am NOT a graphics designer....</p>
        </div>
    </footer>

</body>
</html>