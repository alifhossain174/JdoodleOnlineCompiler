<?php

    $curl = curl_init();

    $script = '<?php echo "Hello"; ?>';

    $arr = array(
        "clientId" => "39882eb0e8a01aac131f9dfdb89f0bef", 
        "clientSecret" => "85e310de734661111fa1d32a469d3b80d9a864ef548a2c704e68b768ec3a4288", 
        "script" => $script, 
        "language" => "php", 
        "versionIndex" => "0"
    );
    
    $data = json_encode($arr);

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.jdoodle.com/v1/execute',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

?>
