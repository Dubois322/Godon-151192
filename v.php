<?php
include("connection.php");
$tid = isset($_GET['tid']) ? $_GET['tid'] : "";
$hid = isset($_GET['hid']) ? $_GET['hid'] : "";
$query = "select agreement from booking where t_id=$tid and h_id=$hid";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
echo $result['agreement'];
?>
<?php

$filePath = urldecode($_REQUEST["."tid=". $result['t_id'] ."&hid=" .$result['h_id'] ."]);

if (file_exists($filePath)) {
    $fileName = basename($filePath);
    $fileSize = filesize($filePath);

    header("Cache-Control: private");
    header("Content-Type: application/stream");
    header("Content-Length: " . $fileSize);
    header("Content-Disposition: attachment; filename=" . $fileName);

    readfile($filePath);
    exit();
} else {
    die('The provided file path is not valid.');
}
?>