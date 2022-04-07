<!DOCTYPE html>
chtml lang="en">
chead>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.8">
<title>Dienasgrāmata</title>
</head>
<body>
ahp
include("db.php");
$sql = "SELECT FROM users";
$result = Sconn->query ($sq1);
if ($result->num_rows > 0) {
while(Srow = Sresult->fetch_assoc ()) {
%3D
Sid - Srow['id'];
$name = Srow['name'];
$sname = $row['$name'];
$login - Srow['login'];
Spass - Srow[ 'password'];
echo "$id"." "."$name"." "."$sname".
"$sname"." "."$login"." ".$pass."cbr>";
}
}
Sconn->close();
7>
</body>
ghtm15