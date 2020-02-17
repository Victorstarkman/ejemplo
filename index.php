<?php
    $connect = mysqli_connect('localhost','root','Vitist00','crm');
    $query = "SELECT id, nombre FROM usuarios";
    $result=mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
<link href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css' rel='stylesheet' type='text/css'>

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js'></script>
    

    <title>ejemplo select2</title>
</head>
<body>
<select id='selUser' style='width: 200px;'>
 <option value='0'>- Search user -</option>
</select>
</body>
<footer>
<script src="js/test.js"></script>
</footer>
</html>