<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matukin Ivan - personal web page.</title>
    <link rel="stylesheet" href="css/main-style.css">
</head>
<body>
   
	<header>
	
		<div class="contacts">
			<h1><?php echo $infoFIO ?></h1>
			<table>
				<tr>
					<th>Телефон:</th>
					<td> <?php echo $infoPhone ?> </td>
				</tr>
				<tr>
					<th>Почта:</th>
					<td><a href="mailto:<?php echo $infoEmail ?>"><?php echo $infoEmail ?></a></td>
				</tr>
				<tr>
					<th>Сайт:</th>
					<td><a href="<?php echo $infoUrlUrl ?>"><?php echo $infoUrlTxt ?></a></td>
				</tr>
				<tr>
					<th>Git-github:</th>
					<td><a href="<?php echo $infoGitUrl ?>"><?php echo $infoGitTxt ?></a></td>
				</tr>
			</table>
			
		</div>
		
		<img id="face" src="img/face.PNG" alt="My Photo">
		
		<div id="aboutme">
		  <article>
			  <div class="article-title">
				  <span>О себе</span>
			  </div>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, ipsa, obcaecati. Explicabo esse molestias fugit numquam dolore quod, dolorem distinctio.</p>
		  </article>
		</div>
		
	</header>
	
