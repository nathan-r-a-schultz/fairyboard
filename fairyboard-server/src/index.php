<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Leaderboard Inputter</title>
  </head>

  <body>
    <p>
        Hello! Input verified submissions here and it'll show up on the public site.
    </p>
    <p>
        For the time, note that it's a string. So, you can input the time in any format you like. Just remember to keep it consistent.
    </p>
    <hr>
    <form action="/create_leaderboard.php" method="post">
      <label for="fname">Create new leaderboard:</label>
      <input type="text" id="newLb" name="newLb" required></input>
      <input type="submit" value="Submit">
    </form>
    <hr>
    <form action="/add_entry.php" method="post">
        <label for="fname">Select a leaderboard:</label>
        <?php include "load_leaderboards.php"; ?>
        <!-- <label for="fname">Username:</label>
        <input type="text" id="username" name="username" required></input>
        <label for="fname">Video link:</label>
        <input type="text" id="videoLink" name="videoLink" required></input>
        <label for="fname">Time:</label>
        <input type="text" id="Time" name="Time" required></input> -->
    </form>
    <hr>
    <p>Reset the database file:</p>
    <form action="clear_database.php" method="post" onsubmit="return confirm('Are you sure you want to clear all submissions?');">
        <input type="submit" value="Reset database file">
    </form>
    <hr>
  </body>
</html>