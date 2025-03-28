<?php

// init leaderboards
$leaderboards = [];

// check if the file exists and open it if it does
if (file_exists("submissions.json")) {
    // get contents and decode
    $json = file_get_contents("submissions.json");
    $data = json_decode($json, true);

    // only loop if $data is valid and not empty
    if (is_array($data) && !empty($data)) {
        foreach ($data as $leaderboard) {
            if (isset($leaderboard["leaderboardName"])) {
                $leaderboards[] = $leaderboard["leaderboardName"];
            }
        }
    }
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
