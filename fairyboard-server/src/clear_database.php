<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // just nuke the file. just nuke it....
    file_put_contents("submissions.json", "");

    // below is the html to confirm that the database was deleted
    ?>
    <!DOCTYPE html>
    <html lang="en"
        <head>
            <meta http-equiv="refresh" content="3;url=index.html">
            <title>Success</title>
        </head>
        <body>
            <p>The database file has been cleared. If this was an accident, I hope you have a backup ¯\_(ツ)_/¯</p>
            <p>You will be redirected in 3 seconds.</p>
            <p><a href="index.html">Click here if you are not redirected.</a></p>
        </body>
    </html>
    <?php
}
?>