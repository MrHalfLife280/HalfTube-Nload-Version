 <?php include("header.php") ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>HalfTube - Small Digital Video Repository</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="assets/styles.css" rel="stylesheet" type="text/css">
    <link rel="alternate" type="application/rss+xml" title="HalfTube Recently Added Videos [RSS]" href="assets/rss/global/recently_added.rss">
</head>

<body onload="javascript:sf();">
    <table align="center" width="100%" bgcolor="#D5E5F5" cellpadding="0" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td><img src="assets/box_login_tl.gif" width="5" height="5"></td>
                <td><img src="assets/pixel.gif" width="1" height="5"></td>
                <td><img src="assets/box_login_tr.gif" width="5" height="5"></td>
            </tr>
            <tr>
                <td><img src="assets/pixel.gif" width="5" height="1"></td>
                <td width="100%">

                </td>
                <td><img src="assets/pixel.gif" width="5" height="1"></td>
            </tr>
            <tr>
                <td><img src="assets/box_login_bl.gif" width="5" height="5"></td>
                <td><img src="assets/pixel.gif" width="1" height="5"></td>
                <td><img src="assets/box_login_br.gif" width="5" height="5"></td>
            </tr>
        </tbody>
    </table>

    <script>
        function sf() {
            document.f.search.focus();
        }
    </script>

    <table width="80%" align="center" cellpadding="3" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td align="center">
                    <img src="assets/logo.png" width="180" height="71" hspace="12" vspace="12" alt="HalfTube">
                    <br>
                    Small Digital Video Repository
                    <br>
                    <br>
                </td>
            </tr>

            <form name="f" method="GET" action="results.php">
                <tr>
                    <td align="center"><input type="text" name="search" size="35" maxlength="128" style="color:#ff3333; font-size: 18px; padding: 3px;"></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" value="Search Videos"></td>
                </tr>
            </form>
        </tbody>
    </table>

<div style="font-size: 16px; font-weight: bold; margin-top: 20px; margin-bottom: 20px; text-align: center;"><a href="upload.php">Upload Your Videos</a></div>



    <table width="80%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#CCCCCC">
        <tbody>
            <tr>
                <td><img src="assets/box_login_tl.gif" width="5" height="5"></td>
                <td width="100%"><img src="assets/pixel.gif" width="1" height="5"></td>
                <td><img src="assets/box_login_tr.gif" width="5" height="5"></td>
            </tr>
            <tr>
                <td><img src="assets/pixel.gif" width="5" height="1"></td>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
    <?php foreach ($halftube_videos as $video): ?>
    <tr valign="top">
        <!-- HalfTube because that's this platform-->
        <td width="100%" align="center">
            <div class="moduleTitleBar">
                <div class="moduleTitle">HalfTube's Featured!</div>
            </div>
            <div class="moduleFeatured">
                <a href="index.php?v=<?php echo htmlspecialchars($video['id']); ?>">
                    <img src="<?php echo htmlspecialchars($video['thumbnail_path']); ?>" class="moduleFeaturedThumb" width="120" height="90">
                </a>
                <div class="moduleFeaturedTitle">
                    <a href="index.php?v=<?php echo htmlspecialchars($video['id']); ?>"><?php echo htmlspecialchars($video['title']); ?></a>
                </div>
                <div class="moduleFeaturedDetails">
                    Added: <?php echo date("F j, Y", strtotime($video['upload_date'])); ?><br>
                    by <a href="profile.php?user=<?php echo urlencode($video['username']); ?>"><?php echo htmlspecialchars($video['username']); ?></a>
                </div>
                <div class="moduleFeaturedDetails">Views: <?php echo isset($video['views']) ? $video['views'] : 0; ?> | Comments: <?php echo isset($video['comments']) ? $video['comments'] : 0; ?></div>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<?php foreach ($halftube_videos as $video): ?>
    <?php if (is_null($video['is_halftube']) || $video['is_halftube'] == 0): ?>
        <tr valign="top">
            <!-- VeeTube Featured -->
            <td width="100%" align="center">
                <div class="moduleTitleBar">
                    <div class="moduleTitle">VeeTube's Featured!</div>
                </div>
                <div class="moduleFeatured">
                    <a href="index.php?v=<?php echo htmlspecialchars($video['id']); ?>">
                        <img src="<?php echo htmlspecialchars($video['thumbnail_path']); ?>" class="moduleFeaturedThumb" width="120" height="90">
                    </a>
                    <div class="moduleFeaturedTitle">
                        <a href="index.php?v=<?php echo htmlspecialchars($video['id']); ?>"><?php echo htmlspecialchars($video['title']); ?></a>
                    </div>
                    <div class="moduleFeaturedDetails">
                        Added: <?php echo date("F j, Y", strtotime($video['upload_date'])); ?><br>
                        by <a href="profile.php?user=<?php echo urlencode($video['username']); ?>"><?php echo htmlspecialchars($video['username']); ?></a>
                    </div>
                    <div class="moduleFeaturedDetails">
                        Views: <?php echo isset($video['views']) ? $video['views'] : 0; ?> | Comments: <?php echo isset($video['comments']) ? $video['comments'] : 0; ?>
                    </div>
                </div>
            </td>
        </tr>
    <?php endif; ?>
<?php endforeach; ?>

</table>

</table>





<br>
<table bgcolor="#FFFFFF" align="center" cellpadding="10" border="0">
    <tbody>
        <tr>
            <td align="center" valign="center">
                <span class="footer">
                    Copyright © <span id="year"></span> HalfTube, LLC™
                    </a>
                </span>
            </td>
        </tr>
    </tbody>
</table>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>

        </tr>
    </tbody></table>