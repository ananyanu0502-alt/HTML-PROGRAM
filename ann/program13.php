<!DOCTYPE html>
<html>
<head><title>Electricity Bill</title></head>
<body>
<h2>Electricity Bill Calculator</h2>
<form method="post">
Customer Name: <input type="text" name="cname" required><br><br>
Consumer No: <input type="text" name="cno" required><br><br>
Units Consumed: <input type="number" name="units" min="0" required><br><br>
<input type="submit" value="Generate Bill">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$cname = htmlspecialchars($_POST["cname"]);
$cno = htmlspecialchars($_POST["cno"]);
$units = (int)$_POST["units"];
$fixed = 50;
if ($units <= 100)
{
$energy = $units * 2.50;
} 
elseif ($units <= 200) 
{
$energy = 100 * 2.50 + ($units - 100) * 3.50;
} 
elseif ($units <= 300) 
{
$energy = 100 * 2.50 + 100 * 3.50 + ($units - 200) * 5.00;
}
 else 
{
$energy = 100 * 2.50 + 100 * 3.50 + 100 * 5.00 + ($units - 300) * 7.00;
}
$tax = $energy * 0.05;
$total = $energy + $fixed + $tax;
echo "<hr><h3>Electricity Bill</h3>";
echo "<table border='1' cellpadding='6' cellspacing='0'>";
echo "<tr><td>Customer Name</td><td>$cname</td></tr>";
echo "<tr><td>Consumer No</td><td>$cno</td></tr>";

echo "<tr><td>Units Consumed</td><td>$units</td></tr>";
printf("<tr><td>Energy Charge</td><td>Rs. %.2f</td></tr>", $energy);
printf("<tr><td>Fixed Charge</td><td>Rs. %.2f</td></tr>", $fixed);
printf("<tr><td>Tax (5%%)</td><td>Rs. %.2f</td></tr>", $tax);
printf("<tr><td><b>Total Amount</b></td><td><b>Rs. %.2f</b></td></tr>", $total);
echo "</table>";
}
?>
</body>
</html>