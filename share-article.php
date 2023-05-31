<!DOCTYPE html>
<html>
<head>
    <title>Share Button</title>
</head>
<body>
    <?php
    // Get the current page URL
    $currentPageUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
    <button onclick="shareOnFacebook()">Share on Facebook</button>

    <script>
        function shareOnFacebook() {
            var url = "<?php echo $currentPageUrl; ?>";
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url), "_blank");
        }
    </script>
</body>
</html>
