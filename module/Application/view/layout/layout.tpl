<!DOCTYPE html>
<html lang="en">
	<head>
	
	<meta charset="utf-8">
		{assign var=metadata value=$metadata|json_decode:1}
		<title>ZF2 Skeleton</title>
		<meta name="description" content="{$metadata.title}" />
		<meta property="og:title" content="{$metadata.title}" />
	    <meta property="og:type" content="website" />
	    <meta property="og:site_name" content="ZF2 Skeleton" />
	    <meta property="og:url" content="{$metadata.url}" />
	    <meta property="og:image" content="{$metadata.image}" />
	    <meta property="og:description" content="{$metadata.description}" />
	    <meta property="og:fb_admins" content="" />
	    <meta property="fb:admins" content="" />
	    <meta property="fb:app_id" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    	<link href="/css/oswald.css" rel="stylesheet" type="text/css">
    	<link href="/css/animate.css" rel="stylesheet" type="text/css">
    	<link href="/css/reset.css" rel="stylesheet" type="text/css">
    	<link href="/css/layout.css" rel="stylesheet" type="text/css">
    	<link href="/css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    	<link href="/css/soltv.css" rel="stylesheet" type="text/css">
    	<link href="/css/top.css" rel="stylesheet" type="text/css">
	</head>
	<body >
				<div class="container">
	<h3>Regular layout.tpl</h3>

		<pre>{$metadata|var_dump}
		{*debug*}
				</pre>
				</div>
	
	</body>

	    <script type="text/javascript" src="/min/?g=js&v22'"></script>
</html>
