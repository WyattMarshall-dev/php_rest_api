<?php 

Class CURL {

    public static function GET($url) {
        $base = "http://" . $_SERVER['SERVER_NAME'] . '/Projects/REST_API';;
        $uri = $base . $url;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $uri);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // EXECUTE: 
        $result = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($result, true);
        return $response;
    }

    public static function POST($url, ...$vars) {

        if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']["size"] > 0) {
            $file = basename($_FILES['fileToUpload']["name"]);
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "../../uploads/{$file}");
        } else {
            $file = "default.jpg";
        }

        $curlFileName = 'http://localhost/projects/REST_API/uploads/' . $file;
        $cFile = curl_file_create($curlFileName, 'image/jpeg', $file);

        $data = array(
            'data' => json_encode($_POST),
            'test_file' => $cFile
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        $resultInfo = curl_getinfo($ch);
        curl_close($ch); 
        return $response;
    }
}
?>