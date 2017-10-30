<?php
$file_prfx = $_GET["file"];
$upload_dir = $_GET["path"];

if (!empty($_FILES))
{
    $tempFile = $_FILES['file']['tmp_name'];

    $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $upload_dir . DIRECTORY_SEPARATOR;
    $mainFile = $uploadPath . $file_prfx . $_FILES['file']['name'];
    //$mainFile = $uploadPath.time().'-'. $_FILES['file']['name'];

    move_uploaded_file($tempFile,$mainFile);
}
?>

