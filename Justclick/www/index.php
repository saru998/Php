<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;loaction:php/nexthome.php">
        <script type="text/javascript">
            window.location.href = "http://example.com"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow the <a href='http://example.com'>link to example</a>
    <?php
	    
             header("location:justclick/php/nexthome.php");
	?>
    </body>
</html>		