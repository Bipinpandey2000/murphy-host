<?php

class Mo_OAuth_Hanlder {

	function getAccessToken($tokenendpoint, $grant_type, $clientid, $clientsecret, $code, $redirect_url, $send_headers, $send_body){
		$response = $this->getToken ($tokenendpoint, $grant_type, $clientid, $clientsecret, $code, $redirect_url, $send_headers, $send_body);
		$content = json_decode($response,true);

		if(isset($content["access_token"])) {
			return $content["access_token"];
			exit;
		} else {
			echo 'Invalid response received from OAuth Provider. Contact your administrator for more details.<br><br><b>Response : </b><br>'.esc_attr( $response );
			exit;
		}
	}

	function getToken($tokenendpoint, $grant_type, $clientid, $clientsecret, $code, $redirect_url, $send_headers, $send_body){
		
		$clientsecret = html_entity_decode( $clientsecret );
		$body = array(
				'grant_type'    => $grant_type,
				'code'          => $code,
				'client_id'     => $clientid,
				'client_secret' => $clientsecret,
				'redirect_uri'  => $redirect_url,
			);
		$headers = array(
				'Accept'  => 'application/json', 
				'charset'       => 'UTF - 8', 
				'Authorization' => 'Basic ' . base64_encode( $clientid . ':' . $clientsecret ),
				'Content-Type' => 'application/x-www-form-urlencoded',
		);
		if($send_headers && !$send_body){
				unset( $body['client_id'] );
				unset( $body['client_secret'] );
		}elseif(!$send_headers && $send_body){
				unset( $headers['Authorization'] );
		}
		
		$response   = wp_remote_post( $tokenendpoint, array(
			'method'      => 'POST',
			'timeout'     => 45,
			'redirection' => 5,
			'httpversion' => '1.0',
			'blocking'    => true,
			'headers'     => $headers,
			'body'        => $body,
			'cookies'     => array(),
			'sslverify'   => false
		) );
		if ( is_wp_error( $response ) ) {
			wp_die( esc_attr( $response ) );
		}
		$response =  $response['body'] ;

		if(!is_array(json_decode($response, true))){
			echo "<b>Response : </b><br>";print_r($response);echo "<br><br>";
			exit("Invalid response received.");
		}
		
		$content = json_decode($response,true);
		if(isset($content["error_description"])){
			exit( esc_attr( $content["error_description"] ) );
		} elseif(isset($content["error"])){
			exit( esc_attr( $content["error"] ) );
		}
		
		return $response;
	}
	
	function getIdToken($tokenendpoint, $grant_type, $clientid, $clientsecret, $code, $redirect_url, $send_headers, $send_body){
		$response = $this->getToken ($tokenendpoint, $grant_type, $clientid, $clientsecret, $code, $redirect_url, $send_headers, $send_body);
		$content = json_decode($response,true);
		if(isset($content["id_token"]) || isset($content["access_token"])) {
			return $content;
			exit;
		} else {
			echo 'Invalid response received from OpenId Provider. Contact your administrator for more details.<br><br><b>Response : </b><br>'.esc_attr( $response );
			exit;
		}
	}

	function getResourceOwnerFromIdToken($id_token){
		$id_array = explode(".", $id_token);
		if(isset($id_array[1])) {
			$id_body = base64_decode($id_array[1]);
			if(is_array(json_decode($id_body, true))){
				return json_decode($id_body,true);
			}
		}
		echo 'Invalid response received.<br><b>Id_token : </b>'.esc_attr( $id_token );
		exit;
	}
	
	function getResourceOwner($resourceownerdetailsurl, $access_token){
		$headers = array();
		$headers['Authorization'] = 'Bearer '.$access_token;

		$response   = wp_remote_post( $resourceownerdetailsurl, array(
			'method'      => 'GET',
			'timeout'     => 45,
			'redirection' => 5,
			'httpversion' => '1.0',
			'blocking'    => true,
			'headers'     => $headers,
			'cookies'     => array(),
			'sslverify'   => false
		) );

		$response =  $response['body'] ;

		if(!is_array(json_decode($response, true))){
			$response = addcslashes($response, '\\');
			if(!is_array(json_decode($response, true))){
			echo "<b>Response : </b><br>";print_r($response);echo "<br><br>";
			exit("Invalid response received.");
			}
		}
		
		$content = json_decode($response,true);
		if(isset($content["error_description"])){
			exit(esc_attr( $content["error_description"] ) );
		} elseif(isset($content["error"])){
			exit(esc_attr( $content["error"] ) );
		}

		return $content;
	}
	
	function getResponse($url){
		$response = wp_remote_get($url, array(
			'method' => 'GET',
			'timeout' => 45,
			'redirection' => 5,
			'httpversion' => 1.0,
			'blocking' => true,
			'headers' => array(),
			'cookies' => array(),
			'sslverify' => false,
		));

		$content = json_decode($response,true);
		if(isset($content["error_description"])){
			exit(esc_attr( $content["error_description"] ) );
		} elseif(isset($content["error"])){
			exit(esc_attr( $content["error"] ) );
		}
		
		return $content;
	}
	
}

?>
