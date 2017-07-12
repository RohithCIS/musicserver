<html>
<head>
    <title>Audio Server</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="(min-width: 720px)" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="(max-width: 720px)" href="css/mobile.css">
    <link rel="stylesheet" href="fonts/raleway.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="fonts/thamizh.css" type="text/css" charset="utf-8" />
</head>
<body>
    <div class="mainc">
        <h1>Audio Server Jukebox</h1>
    <div class="menu">
        <form class="songs" method="POST" action="player.php" >
            <button type="submit">&#176;&#193;&#226;</button>
            <input type="hidden" name="scat" value="./Songs/Tamil/Everything/" >
        </form>
    </div>
    <div class="menu">
        <form class="songs" method="POST" action="player.php" >
            <button type="submit">English</button>
            <input type="hidden" name="scat" value="./Songs/English/" >
        </form>
    </div>
    <div class="menu">
        <form class="songs" method="POST" action="player.php" >
            <button type="submit">アニメ</button>
            <input type="hidden" name="scat" value="./Songs/Anime/" >
        </form>
    </div>
    <div class="menu">
        <form class="songs" method="POST" action="player.php" >
            <button type="submit">&#186;&#8482;&#177;</button>
            <input type="hidden" name="scat" value="./Songs/Misc/" >
        </form>
    </div>
    </div>
</body>
</html>