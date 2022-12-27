<?php


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
			echo "id: $id, alias: $alias, file : $file  <br>" ;
	}
}
