<html>
<head>
    <title>Audio Server</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="audiojs/audio.min.js"></script>-->
    <link rel="stylesheet" type="text/css" media="(min-width: 720px)" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="(max-width: 720px)" href="css/mobile.css">
    <link rel="stylesheet" href="fonts/raleway.css" type="text/css" charset="utf-8" />
    <!--<script>
        audiojs.events.ready(function() {
            var as = audiojs.createAll();
        });
    </script>-->
</head>
<body>
    <div class="audioembed">
        <audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mpeg" autoplay>
            <source type="audio/mp3" src="/songs/tamil/Kodana-Kodi.mp3">
            Sorry, your browser does not support HTML5 audio.
        </audio>
        <!--<button class="preBtn">&#8249;</button>
        <button class="nextBtn">&#8250;</button>-->
        <h1>Audio Server Jukebox</h1>
        <h3 id="sname">...</h3>
    </div>
    <div class="plist col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <ul id="playlist">
        <?php
        $directory = './songs/tamil/';
        // $dir = scandir($directory);
        $dir = array_diff(scandir($directory), array('..', '.'));
            foreach( $dir as $value ) {
                    echo "<li><a href=".$directory.$value.">".$value."</a></li>";
                }
        ?>
        </ul>
    </div>

<script>

init();
function init(){
    current = 0;
    audio = $('#audio');
    playlist = $('#playlist');
    tracks = playlist.find('li a');
    len = tracks.length;
    audio[0].volume = 1.0;
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        document.getElementById("sname").innerHTML="Now Playing : <br>"+playlist.find('a')[current].innerHTML;
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];    
        }
        run($(link),audio[0]);
    });
}
// $("#nextBtn").click(function(e){
//     current = 0;
//     audio = $('#audio');
//     playlist = $('#playlist');
//     tracks = playlist.find('li a');
//     len = tracks.length - 1;
//     audio[0].volume = 1.0;
//     current++;
//     if(current == len){
//         current = 0;
//         link = playlist.find('a')[0];
//     }else{
//         link = playlist.find('a')[current];    
//     }
//     run($(link),audio[0]);
// });
// $("#preBtn").click(function(e){
//     current = 0;
//     audio = $('#audio');
//     playlist = $('#playlist');
//     tracks = playlist.find('li a');
//     len = tracks.length - 1;
//     audio[0].volume = 1.0;
//     current--;
//     if(current == -1){
//         current = len;
//         link = playlist.find('a')[len];
//     }else{
//         link = playlist.find('a')[current];    
//     }
//     run($(link),audio[0]);
// });
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        audio[0].load();
        audio[0].play();
}

function snameChange(){
    
}

</script>

</body>
</html>