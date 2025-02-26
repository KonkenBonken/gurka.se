<html>
<?php
header("Link:" .
	"<https://fonts.gstatic.com>; rel=preconnect," .
	"<img/gurka.png>; rel=prefetch," .
	"<img/moon.png>; rel=prefetch," .
	"<img/sun.png>; rel=prefetch"
);
?>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title>&#x1F952; gurka.se</title>
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-S6QQ0640WP"></script>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<script defer src="app.js"></script>
		<link href="styles.css" rel="stylesheet">
		<?=isset($_REQUEST['allergisk']) ? '<style>#gurka{display:none}</style>' : '' ?>
	</head>
	<body <?=isset($_REQUEST['darkmode']) ? 'class="darkmode"' : '' ?>>
			<img src="img/gurka.png" id="gurka"></img>
		<ul>
			<?php
			if (date("m-d") == "05-01")
				echo '<li style="background-color:#ED1C24;color:#fff;padding:6px;">Glad f&ouml;rsta maj!</li>';
			if (!isset($_REQUEST["mailfobi"]))
				echo '<li><a href="mailto:tim@gurka.se" target="_blank" rel="noopener noreferrer">tim@gurka.se</a></li>';
			?>
			<li id="turns" title="Varv snurrade">0</li>
			<li id="tpm" title="Varv per sekund">0</li>
		</ul>
		<img id="darkmodeButton" src="img/moon.png" alt="Dark-mode"  title="Dark-mode">
	</body>
</html>
