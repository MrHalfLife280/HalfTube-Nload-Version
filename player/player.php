<?php
// Include database connection
require '../config.php';

// Get video ID from URL, if available
if (isset($_GET['id'])) {
    $videoId = $_GET['id'];
    
    // Fetch the video details from the database using the ID
    $stmt = $pdo->prepare("SELECT file_path FROM videos WHERE id = ?");
    $stmt->execute([$videoId]);
    $video = $stmt->fetch();

    if (!$video) {
        echo "Video not found.";
        exit();
    }
    // If the video exists, use the file_path from the database
$videoUrl = "../" . $video['file_path'];

} else {
    // If no ID is provided, use a default video
    $videoUrl = "";
}
?>

<html>
<head>
<style>
#mid, #midin { height: 4.5px; }
#left, #right {
	width: 20px; height: 14px; cursor: pointer;
	background-position-x: 5px; background-repeat: no-repeat;
	text-align: center;
}
#video_controls {
	border-radius: 5px;
	background: linear-gradient(to bottom, #f4e8e8 0, #fff 65%, #fff 65%);
	box-shadow: 0 .5px 5px .2px rgba(0, 0, 0, 1);
	overflow: hidden; padding: 1px;
}
#left {
	float: left; user-select: none;
	background-image: url(ply1.png);
	background-size: 10px 10px;
	background-position-y: 2px;
}
#mid { overflow: hidden; background: #999; border-radius: 3px; position: relative; top: 5px; }
#midin { width: 0; background: #333; transition: 50ms width; }
#video_player { background: #000; margin: 0 0 7px; }
#right {
	float: right; user-select: none;
	background-image: url(vol1.png);
	background-size: 9px 9px;
	background-position-y: 2.7px;
}
.videocontainer { user-select: none; outline: 0; }
</style>
</head>
<body>

<div style="width:487px;height:420px;" class="videocontainer" id="video_height" oncontextmenu="return false;">
    <div style="overflow:hidden">
        <!-- Video player -->
        <video width="487" height="410" id="video_player">
            <source src="<?php echo htmlspecialchars($videoUrl); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div id="video_controls" style="display:block">
        <div id="left" onclick="v_play()"></div>
        <div id="right" onclick="v_mute()"></div>
        <div id="mid"><div id="midin"></div></div>
    </div>
</div>

<script>
    let player = document.getElementById('video_player');

    function v_play() {
        if (player.ended || player.paused) {
            player.play();
            document.getElementById("left").style.backgroundImage = "url('ply0.png')";
        } else {
            player.pause();
            document.getElementById("left").style.backgroundImage = "url('ply1.png')";
        }
    }

    function v_mute() {
        if (player.muted) {
            document.getElementById("right").style.backgroundImage = "url('vol1.png')";
            player.muted = false;
        } else {
            document.getElementById("right").style.backgroundImage = "url('vol0.png')";
            player.muted = true;
        }
    }

    player.addEventListener('timeupdate', function() {
        let percentage = (100 / player.duration) * player.currentTime;
        document.getElementById('midin').style.width = percentage + "%";
    }, false);
</script>

</body>
</html>
