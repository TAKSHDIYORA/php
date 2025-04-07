<?php include "upload.php";?>
<title>PHP Image Upload Example</title>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload[]" id="chooseFile" multiple>
    <button type="submit" name="submit">Upload File</button>
</form>
<!-- Display response messages -->
<?php if(!empty($resMessage)) {
    echo $resMessage['message'];
}
?>

