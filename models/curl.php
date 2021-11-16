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
}

// function callAPI($method, $url, $data){
//     $curl = curl_init();
//     switch ($method){
//         case "POST":
//             curl_setopt($curl, CURLOPT_POST, 1);
//             if($data)
//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//         break;
//         case "PUT": 
//             curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
//             if($data)
//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//         break;
//         default:
//          if ($data)
//             $url = sprintf("%s?%s", $url, http_build_query($data)); 
//     }
//     // OPTIONS:
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//         'APIKEY: 111111111111111111111',
//         'Content-Type: application/json',
//     ));
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

//     // EXECUTE: 
//     $result = curl_exec($curl);
//     if(!$result){
//         die("Connection Failure");
//     }
//     curl_close($curl);
//     $response = json_decode($result, true);
//     return $result;

// }


?>