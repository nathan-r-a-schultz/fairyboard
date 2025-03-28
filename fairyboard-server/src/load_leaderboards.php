<?php

    // init an empty array to hold the leaderboard names
    $leaderboards = [];

    // check if the file exists, and if so, open it
    if (file_exists("submissions.json")) {
        $file = fopen("submissions.json", "r");

        // i can't lie, i got this code from the internet.
        // it basically just nabs the leaderboardName attribute from each json object
        // once it has the proper attribute, it adds it to the array
        while (($line = fgets($file)) !== false) {
            $obj = json_decode($line, true);
            if (isset($obj["leaderboardName"])) {
                $leaderboards[] = $obj["leaderboardName"];
            }
        }

        fclose($file);
    }

    // below is the html to display the leaderboard names
    ?>

    <select name="lbID">
        <?php foreach($leaderboards as $name): ?>
        <option value="<?php echo htmlspecialchars($name); ?>">
            <?php echo htmlspecialchars($name) ?>
        </option>
        <?php endforeach; ?>
    </select>