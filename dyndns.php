<?php

define("DYNDNS", true);

require("dyndns-config.php");

$user = $_GET["username"];

if(array_key_exists($user, USERS) && USERS[$user] == $_GET["password"]) {
	if(isset($_GET["domain"])) {
		$split = explode(".", strtolower($_GET["domain"]));
		if(sizeof($split) == 3) {
			$domain = $split[1] . "." . $split[2];
			if(array_key_exists($domain, DOMAINS) && array_key_exists($split[0], DOMAINS[$domain]["subdomains"])) {
				if(in_array($user, DOMAINS[$domain]["access"]) || in_array($user, DOMAINS[$domain]["subdomains"][$split[0]]["access"])) {
					$domain = $split[1] . "." . $split[2];
					$curl = curl_init();
					curl_setopt_array($curl, [
						CURLOPT_CUSTOMREQUEST => "PUT",
						CURLOPT_URL => "https://api.cloudflare.com/client/v4/zones/" . DOMAINS[$domain]["id"] . "/dns_records/" . DOMAINS[$domain]["subdomains"][$split[0]]["id"],
						CURLOPT_HTTPHEADER => [
							"Content-Type: application/json", 
							"Authorization: Bearer " . CLOUDFLARE_API_TOKEN
						],
						CURLOPT_POSTFIELDS => json_encode([
							"type" => "A", 
							"name" => $split[0], 
							"content" => $_SERVER["REMOTE_ADDR"], 
							"ttl" => 120, 
							"proxied" => false
						])
					]);
					curl_exec($curl);
					curl_close($curl);
				}
				else
					echo("Error: You are not allowed to modify this subdomain.");
			}
			else
				echo("Error: Unknown Subdomain.");
		}
		else
			echo("Error: Please submit a valid subdomain name!");
	}
	else
		echo("Error: Please submit a valid subdomain name!");
} else {
	header("HTTP/1.0 401 Unauthorized");
}

?>