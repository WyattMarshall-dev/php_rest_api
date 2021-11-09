<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost/Projects/REST_API/api/post/show.php?id=$id");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    $decoded = json_decode($output, true, 4);
    if(!$decoded['data']){
        header("Location: 404.php");
    };
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Index Page</h1>
    </div>
    <nav>
        <div class="container">
            <a href="index.php">Index</a>
        </div>
    </nav>
    <div class="container">
        <h2>Book List</h2>
   
        <?php
        foreach ($decoded['data'] as $row) {
            echo $row['title'] . "<br>";
            echo $row['authorid'] . '<br>';
            echo $row['pub_year'] . '<br>';
            echo $row['genre'] . '<br>';
            echo "<hr>";
            
        }

    ?>

    <a href="index.php">Go back</a>
    </div>

</body>
</html>
