<?php
if(!empty($_POST))
{
    if($_POST['btn'] == 'my_btn')
    {
        if(!empty($_FILES))
        {
            echo "<pre>";
            print_r($_FILES);
            echo "<pre>";
            move_uploaded_file(
                $_FILES['my_file']['tmp_name'],
                'uploads/'.$_FILES['my_file']['name']
            );
        }
    }
}
echo "<pre>";
print_r($_SERVER);
echo "<pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <p>
    <label for="">Файл:</label>
    </p>

    <p>
    <input type="file" name="my_file" id="">
    </p>
    <button type="submit" name="btn" value="my_btn">Отправить</button>
    </form>
</body>
</html>