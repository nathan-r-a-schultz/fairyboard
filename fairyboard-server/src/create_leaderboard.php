<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // get the leaderboard name
    $leaderboardName = $_POST['newLb'];

    $data = [];

    // check if the file exists, and if so, open it
    if (file_exists("submissions.json")) {
        $json = file_get_contents("submissions.json");
        $data = json_decode($json, true);
    }

    // add new leaderboard
    $data[] = [
        "leaderboardName" => $leaderboardName,
        "entries" => []
    ];

    file_put_contents("submissions.json", json_encode($data, JSON_PRETTY_PRINT));

    // below is the html for the submission confirmation page
    ?>
    <!DOCTYPE html>
    <html lang="en"
        <head>
            <meta http-equiv="refresh" content="3;url=index.php">
            <title>Leaderboard Added</title>
        </head>
        <body>
            <p>Data has been written to the server's database. You will be redirected in 3 seconds.</p>
            <p><a href="index.php">Click here if you are not redirected.</a></p>
        </body>
    </html>
    <?php
}
?>