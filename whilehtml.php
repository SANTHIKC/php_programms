<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name= "no" placeholder="enter no" required>
        
        <input type="submit" name="submit">

    </form>

</body>
</html>
<?php
$num=1;
$no=$_POST['no'];
while($num<=$no)
{
    echo $num .'<br>';
    $num++;

}
?>