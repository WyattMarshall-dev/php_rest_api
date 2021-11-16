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
                    <p>Authors:</p>
                    <div class="input-group">
                        <input type="radio" name="author" id="all" value="">
                        <label for="author1">All</label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="author" id="author1" value="JK Rowling">
                        <label for="author1">JK Rowling</label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="author" id="author2" value="Charles Dickens">
                        <label for="author2">Charles Dickens</label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="author" id="author2" value="Andrew Roberts">
                        <label for="author3">Andrew Roberts</label>
                    </div>


                    <p>Genres:</p>
                    <div class="input-group">
                        <input type="radio" name="category" id="all" value="">
                        <label for="category1">All</label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="category" id="category1" value="Fiction">
                        <label for="category1">Fiction</label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="category" id="category2" value="Non-Fiction">
                        <label for="category2">Non-Fiction</label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="category" id="category2" value="Biographies">
                        <label for="category3">Biographies</label>
                    </div>
                    
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
                    foreach ($response['data'] as $row) {
                        echo "<div class='card'>";
                            echo "<img src='http://localhost/Projects/REST_API/uploads/{$row["thumbnail"]}' width='400px' alt=''>";
                            echo "<div class='card-flex'>";
                                echo "<a href=" . "show.php?id={$row['id']}" . ">" . $row['title'] ."</a><br>";
                                echo "<p>" . $row['author'] . '</p>';
                                echo "<p>" . $row['pub_year'] . '</p>';
                                echo "<p>" . $row['genre'] . '</p>';
                            echo "</div>";
                        echo "</div>";   
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>I am NOT a graphics designer....</p>
        </div>
    </footer>

</body>
</html>