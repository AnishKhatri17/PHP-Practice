<?php
    if(isset($_FILES['image']))
    {
        $file_name = $_FILES['image']['name'] ;
        $file_size = $_FILES['image']['size'] ;
        $file_tmp = $_FILES['image']['tmp_name'] ;
        $file_type = $_FILES['image']['type'] ;
        move_uploaded_file($file_tmp,"./upload-images/".$file_name) ;
    }
?>

<html>
    <head>
        <title> Upload Image </title>
</head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image"><br><br>
            <input type="submit" value="save">
</form>
</body>
</html> 