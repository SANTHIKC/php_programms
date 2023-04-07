<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="num.php" method="post" >
        <input type="number" name="no" placeholder="enter no">
        <input type="submit">
    </form>
</body>
</html>
<?php
$no=$_POST['no'];
if($no%2==0){
        echo '<script>alert("even number");</script>';
    
}
else{
    echo '<script>alert("even number");</script>';
}
?>
