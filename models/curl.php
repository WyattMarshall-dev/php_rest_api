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

        $data = array(
            'data' => json_encode($_POST)
        );
    
        $requestData = http_build_query($data, '', '&');
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
        curl_setopt($ch, CURLOPT_POST, true);
        $response = curl_exec($ch);
        $resultInfo = curl_getinfo($ch);
        curl_close($ch); 
        return $response;
    }
}
?>