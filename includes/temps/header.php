<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kickstart - An Awesome Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo $this->base->url.'/includes/css/bootstrap.min.css'; ?>" rel="stylesheet" media="screen">
	<script>
		(function () {
			var converter = new Markdown.Converter();
			var editor = new Markdown.editor(converter);
			editor.run();
		}());
	</script>
</head>
<body>
	<section class="container">
		<br/>
		<a href="<?php echo $this->base->url.'/admin/templates/loginform.php'; ?>" class="btn btn-info">Admin Login</a>