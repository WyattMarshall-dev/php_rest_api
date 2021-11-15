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
        <h1>Index Page</h1>
        <div class="container" id="navbar">
            <div>
                <a href="index.php">Index</a>
                <a href="create.php">New Book</a>
            </div>
            <div>
                <p>Categories: </p>
                <a href='show.php?category=fiction'>Fiction</a>
                <a href='show.php?category=non%20Fiction'>Non-Fiction</a>
                <a href='show.php?category=biographies'>Biographies</a>
            </div>
        </div>
    </nav>
    
    <div class="container" id="main-content">
        <h2>Book List</h2>
        <div class="grid">
            <?php
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
            ?>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>I am NOT a graphics designer....</p>
        </div>
    </footer>

</body>
</html>