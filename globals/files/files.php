<?php
if (isset($_POST['submit'])) { # If clicked on submit
    if (isset($_FILES['image'])) { # If image uploaded
        echo "<pre>";
        print_r($_FILES['image']);
        echo "</pre>";
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        if (move_uploaded_file($file_tmp, "upload/" . $file_name)) {
            echo "File uploaded!";
            echo "<br><a href='upload/'>Upload folder</a>";
        } else {
            echo "Couldn't upload the file please try again!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE</title>
</head>

<body>
    <h1>Upload a file into server</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>

</html>