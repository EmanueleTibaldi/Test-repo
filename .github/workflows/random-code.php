<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello World</p>'; ?>

  <?php

function addNumbers($a, $b) {
    return $a + $b;
}

$result = addNumbers(5, 10);
echo "The sum is: " . $result;

?>
  
  $username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysql_query($query);
  
  $targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "File uploaded successfully.";
} else {
    echo "File upload failed.";
}

    $targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "File uploaded successfully.";
} else {
    echo "File upload failed.";
}
  
</body>
</html>
