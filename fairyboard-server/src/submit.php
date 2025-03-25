<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $leaderboardID = $_POST['lbID'];
    $ytLink = $_POST['ytLink'];
    $time = $_POST['time'];

    $file = fopen("submissions.csv", "a");
    fputcsv($file, [$leaderboardID, $ytLink, $time], ",", '"', "\\");
    fclose($file);

    echo "Data has been written to the file";
}
?>