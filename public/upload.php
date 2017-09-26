<?php
$upload_dir = 'qms_podaci';
if (!empty($_FILES))
{
    $tempFile = $_FILES['file']['tmp_name'];

    $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $upload_dir . DIRECTORY_SEPARATOR;
    $mainFile = $_FILES['file']['name'];
    $mainFile = $uploadPath . $_FILES['file']['name'];
    //$mainFile = $uploadPath.time().'-'. $_FILES['file']['name'];

    move_uploaded_file($tempFile,$mainFile);
}
?>

