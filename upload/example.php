<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<style type="text/css">
	body {
		margin: 0px;
		padding: 0px;
		width: 100%;
		word-wrap: break-word;
	}

	img {
		max-width: 100%;
	}

	.qxbb-code {
		display: block;
		line-height: 24px;
		background-color: #fafafa;
		border: 1px solid #eee;
		border-radius: 4px;
		color: #a00;
		padding: 10px;
		line-height: 16px;
		margin: 10px;
		position: relative;
		word-wrap: break-word;
		font-size: 12px;
		font-family: verdana;

	}

	.qxbb-code:after {
		display: block;
		position: absolute;
		top: -10px;
		right: 10px;
		background-color: #fff3f3;
		border: 1px solid #f3c7c7;
		content: "Код";
		padding: 3px 7px;
		line-height: 10px;
		border-radius: 4px;
		color: #b97676;
	}

	.qxbb-quote {
		position: relative;
		display: block;
		background-color: #fafafa;
		border-radius: 4px;
		border: 1px solid #ccc;
		font-size: 12px;
		font-family: verdana;
		color: #555;
		margin: 10px;
		padding: 10px;
		word-wrap: break-word;
		box-sizing: border-box;
	}

	.qxbb-quote:after {
		display: block;
		position: absolute;
		top: -10px;
		right: 10px;
		background-color: #f7f7f7;
		border: 1px solid #e2e2e2;
		content: "Цитата";
		padding: 3px 7px;
		line-height: 10px;
		border-radius: 4px;
		color: #b1b1b1;
	}

	.qxbb-quote > .qxbb-quote-info {
		position: absolute; 
		top: -10px;
		left: 10px;
		background-color: #f7f7f7;
		border: 1px solid #e2e2e2;
		padding: 3px 7px;
		line-height: 10px;
		border-radius: 4px;
		color: #b1b1b1;
	}

	.qxbb-code > .qxbb-code-info {
		position: absolute; 
		top: -10px;
		left: 10px;
		background-color: #fff3f3;
		border: 1px solid #f3c7c7;
		padding: 3px 7px;
		line-height: 10px;
		border-radius: 4px;
		color: #b97676;
	}

	.qxbb-left { text-align: left; }
	.qxbb-center { text-align: center; }
	.qxbb-right { text-align: right; }

	.qxbb-spoiler > .qxbb-spoiler-btn {
		margin: 10px;
		cursor: pointer;
		outline: none;
		padding: 5px 10px;
		background-color: #fffbed;
		border: 1px solid #ebdfb4;
		color: #a5914b;
		border-radius: 4px;
	}
	.qxbb-spoiler > .qxbb-spoiler-body {
		display: none;
		margin: 0px 10px 10px 10px;
		background-color: #fffbed;
		border: 1px dashed #ebdfb4;
		padding: 10px;
		border-radius: 4px;
		font-size: 12px;
		box-sizing: border-box;
		color: #a5914b;
	}

	.qxbb-offtop {
		color: #c8c8c8;
		margin: 0px 3px;
	}

	.qxbb-offtop:before {
		content: "×";
		margin: 0px 3px;
	}

	.qxbb-line {
		border: 0px;
		margin: 20px 10px;
		display: block;
		height: 1px;
		background-color: #a4a4a4;
		border-bottom: 1px solid #c1c1c1;
	}

	textarea {
		width: 80%;
	}
	</style>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$('body').on('click', '.qxbb-spoiler > .qxbb-spoiler-btn', function(){
			$(this).next().slideToggle('fast');

			return false;
		});
	});
	</script>
</head>
<body>
<?php

// Создание нового объекта-обработчика BB-кодов
$bb = new bbcode();

$text = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
	$text = @$_POST['text'];

	// Обработка BB-кодов
	echo $bb->parse($text);
}

?>

<form method="POST" style="text-align: center;">
	<textarea name="text" cols="80" rows="16"><?php echo $text; ?></textarea>
	<p><button type="submit">Чпок!</button></p>
</form>

</body>
</html>