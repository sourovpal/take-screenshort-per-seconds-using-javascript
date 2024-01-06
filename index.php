<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
$folder = "upload/";
if (move_uploaded_file($_FILES['screenshort']['tmp_name'], $folder . $_FILES['screenshort']['name'])) {
    echo "File uploaded";
} else {
    echo "File not moved to destination folder. Check permissions";
};
