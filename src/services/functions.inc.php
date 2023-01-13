<?php

/**
 * ===================================================================================
 * return the ask page.
 * ===================================================================================
 */
function getRoute($uri)
{
	$uri = explode('/', $uri);
	return $uri[count($uri)-1];
}

function getFilePageByAlias($pages, $page)
{
	$response = 404;
	foreach ($pages as ["id" => $id, "alias" => $alias, "file" => $file])
	{
		if($page == $alias)
		{
			$response = $file;
		}
	}
	return $response;
}

function listAllRoutes($pages)
{
	foreach ($pages as ["id" => $id, "alias" => $alias, "file" => $file])
	{
		echo "id: $id, alias: $alias, file : $file  <br>";
	}
}

/**
 * Show a welcome message with a date of day
 * 
 * @return string
 */
function welcomeMessage(): string {
	$date = new DateTime(date("Y-m-d")); 	// 2023-01-12
	$dateFormat = $date->format("j F Y");   // 12 January 2023
	// var_dump($dateFormat);
	
	return "Welcome to this website, the date of day is $dateFormat";
}