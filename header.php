<?php session_start(); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>HalfTube - Small Digital Video Repository</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="assets/styles.css" rel="stylesheet" type="text/css">
    <link rel="alternate" type="application/rss+xml" title="HalfTube Recently Added Videos [RSS]" href="assets/rss/global/recently_added.rss">
</head>
<table align="center" width="100%" bgcolor="#D5E5F5" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td><img src="/web/20050627011231im_/http://www.youtube.com/img/box_login_tl.gif" width="5" height="5"></td>
        <td><img src="/web/20050627011231im_/http://www.youtube.com/img/pixel.gif" width="1" height="5"></td>
        <td><img src="/web/20050627011231im_/http://www.youtube.com/img/box_login_tr.gif" width="5" height="5"></td>
    </tr>
    <tr>
        <td><img src="/web/20050627011231im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
        <td width="100%">
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
                        <table cellpadding="2" cellspacing="0" border="0">
                            <tr>
                                <td>&nbsp;<a href="index.php" class="bold">Home</a></td>
                                <td>&nbsp;|&nbsp;</td>
                                <td><a href="my_videos.php">My Videos</a></td>
                                <td>&nbsp;|&nbsp;</td>
                                <td><a href="my_favorites.php">My Favorites</a></td>
                                <td>&nbsp;|&nbsp;</td>
                                <td><a href="my_messages.php">My Messages</a></td>
                                <td>&nbsp;|&nbsp;</td>
                                <td><a href="profile.php">My Profile</a></td>
                                <td>&nbsp;|&nbsp;</td>
                                <td><a href="credits.html">Credits</a></td>
                                <td>&nbsp;|&nbsp;</td>
                                <td><a href="/player/player.html">Video Player</a></td>
                                <td>&nbsp;|&nbsp;</td>
                                <td><a href="about.html">About</a></td>
                            </tr>
                        </table>
                    </td>
                    <td align="right" style="padding-right: 10px;">
                        <?php if (isset($_SESSION['username'])): ?>
                            <strong>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</strong>
                            &nbsp;|&nbsp;
                            <a href="logout.php">Log Out</a>
                        <?php else: ?>
                            <a href="login.php">Log In</a>
                            &nbsp;|&nbsp;
                            <a href="signup.php">Sign Up</a>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </td>
        <td><img src="/web/20050627011231im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
    </tr>
    <tr>
        <td><img src="/web/20050627011231im_/http://www.youtube.com/img/box_login_bl.gif" width="5" height="5"></td>
        <td><img src="/web/20050627011231im_/http://www.youtube.com/img/pixel.gif" width="1" height="5"></td>
        <td><img src="/web/20050627011231im_/http://www.youtube.com/img/box_login_br.gif" width="5" height="5"></td>
    </tr>
</table>
