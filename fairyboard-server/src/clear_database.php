<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    file_put_contents("submissions.json", "");

    echo "The CSV file has been cleared. If this was an accident, I hope you have a backup ¯\_(ツ)_/¯";
}
?>