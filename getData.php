<?php

	function curl_post($url, $apiParams=array(), $header=array()){
	    $curl = curl_init();
	        
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	    if( is_array( $apiParams ) && count( $apiParams ) > 0 )
	    {
	        curl_setopt($curl, CURLOPT_POST, 1);
	        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($apiParams));
	    }
	    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	    curl_setopt($curl, CURLOPT_TIMEOUT, 100);
	    curl_setopt($curl, CURLOPT_HEADER, 0);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl, CURLOPT_HTTPHEADER , $header );
	    $tmpInfo = curl_exec($curl);
	    if (curl_errno($curl)) {
	        echo 'Errno'.curl_error($curl);
	    }
	    curl_close($curl);

    	return $tmpInfo;
	}

	$url = 'http://zxfuli.117o.com/jx/2s.php?id=qIKqoJeGs5ZogpyicAO0O0OO0O0O';
	$header = array(
		"Referer: http://zxfuli.117o.com/jx/dapi.php"
	);

	$data = curl_post($url, $apiParams=array(), $header);

	print_r($data);die;
?>			