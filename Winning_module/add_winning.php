<?php
  $player_id = $_POST["player_id"];
  $date = $_POST["date"];
  $opponent = $_POST["opponent"];
  $result = $_POST["result"];

  $conn = mysqli_connect("localhost", "username", "password", "sports_event");

  $sql = "INSERT INTO winning (player_id, date, opponent, result) VALUES ($player_id, '$date', '$opponent', $result)";

  if (mysqli_query($conn, $sql)) {
    echo "Record added successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
