<?php
    
    $url = "https://data.bn.org.pl/api/institutions/bibs.json?isbnIssn={$_GET["isbn"]}";
    $ch = curl_init();  

    // set URL and other appropriate options  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_HEADER, 0);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
    // grab URL and pass it to the browser  
    $api_response = curl_exec($ch);  
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($http_code != 200) {
        echo "Error getting data from BN API";
        return;
    }
    $data = json_decode($api_response, true);
    if(empty($data["bibs"])) {
        print("No book with such ISBN found in BN database");
        return;
    }
    //print_r($data->bibs[0]->marc);
    $marc = $data["bibs"][0]["marc"]["fields"];
    print_r($marc);
?>