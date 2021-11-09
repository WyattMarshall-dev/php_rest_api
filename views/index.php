<?php

// $data exists from routes.php file
// print_r($data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/Projects/REST_API/api/post/index.php");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
curl_close($curl);
$decoded = json_decode($output, true, 4);
// var_dump($decoded['data']);
// print_r(scandir('../api/post/index.php'));
// include '../api/post/index.php';

if ($decoded == NULL) {
    echo "nothing to display";
} else {

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
            echo "<a href=" . "show.php?id={$row['id']}" . ">" . $row['title'] ."</a><br>";
            echo $row['authorid'] . '<br>';
            echo $row['pub_year'] . '<br>';
            echo $row['genre'] . '<br>';
            echo "<hr>";
            
        }

    ?>
    </div>

</body>
</html>
<?php
    }
?>
