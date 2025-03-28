<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // init the entry's attributes
    $leaderboardName = $_POST['lbID'];
    $username = $_POST['username'];
    $videoLink = $_POST['videoLink'];
    $time = $_POST['time'];

    // init the data
    $data = [];

    // check if the file exists (if it does, open it)
    if (file_exists("submissions.json")) {
        $json = file_get_contents("submissions.json");
        $data = json_decode($json, true);

        // write the data and whatnot
        // i'm writing this code at 11PM... sorry if my comments are bad (I'll make better comments later)
        foreach ($data as &$leaderboard) {
            if ($leaderboard["leaderboardName"] == $leaderboardName) {
                $leaderboard["entries"][] = [
                    "username" => $username,
                    "videoLink" => $videoLink,
                    "time" => $time
                ];
                break;
            }
        }

        // write updated data
        file_put_contents("submissions.json", json_encode($data, JSON_PRETTY_PRINT));
    }

    // below is the html to confirm that the entry was added
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="refresh" content="3;url=index.php">
        <title>Entry added</title>
    </head>
    <body>
        <p>The entry was added.</p>
        <p>You will be redirected in 3 seconds.</p>
        <p><a href="index.php">Click here if you are not redirected.</a></p>
    </body>
    </html>
    <?php
}
?>
