<?php

if(!defined("DYNDNS")) {
	header("Location: https://www.youtube.com/watch?v=TU4FKVWaU3I");
	exit;
}

define("CLOUDFLARE_API_TOKEN", "xxx");

define("USERS", [
	"root" => "1234"
]);

define("DOMAINS", [
	"example.com" => [
		"id" => "xxx",
		"access" => [],
		"subdomains" => [
			"test" => [
				"id" => "xxx",
				"access" => ["root"]
			]
		]
	]
]);

?>