<!DOCTYPE html>
<html>
<head>
<title>Indian Cricket Players</title>
<style>
table { border-collapse: collapse; width: 60%; }
th, td { border: 1px solid #333; padding: 8px; }
th { background: #0b5ed7; color: white; }
tr:nth-child(even) { background: #eef; }
</style>
</head>
<body>
<h2>Indian Cricket Players</h2>
<?php
$players = array(
"Virat Kohli" => "Batsman",
"Rohit Sharma" => "Batsman",
"Jasprit Bumrah" => "Bowler",
"Ravindra Jadeja" => "All-rounder",
"MS Dhoni" => "Wicket-keeper"
);
echo "<table>";
echo "<tr><th>S.No</th><th>Player Name</th><th>Role</th></tr>";
$i = 1;
foreach ($players as $name => $role) {
echo "<tr><td>$i</td><td>$name</td><td>$role</td></tr>";
$i++;
}
echo "</table>";
echo "<p>Total players: " . count($players) . "</p>";
?>
</body>
</html>