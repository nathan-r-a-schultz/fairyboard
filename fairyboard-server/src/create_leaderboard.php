<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // init a new json object
    $leaderboardObj = new stdClass();
    $leaderboardObj->leaderboardName = $_POST['newLb'];
    $leaderboardObj->entries = [];

    // open the submissions file and write to it
    $file = fopen("submissions.json", "a");
    fwrite($file, json_encode($leaderboardObj) . PHP_EOL);
    fclose($file);

    // below is the html for the submission confirmation page
    ?>
    <!DOCTYPE html>
    <html lang="en"
        <head>
            <meta http-equiv="refresh" content="3;url=index.html">
            <title>Success</title>
        </head>
        <body>
            <p>Data has been written to the server's database. You will be redirected in 3 seconds.</p>
            <p><a href="index.html">Click here if you are not redirected.</a></p>
        </body>
    </html>
    <?php
}
?>