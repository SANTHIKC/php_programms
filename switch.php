<?php
$day = $_POST['day'];
switch($day)
{
    case "1" :
        echo "monday";
        break;
        case "2" :
            echo "tuesday";
            break;
            case "3" :
                echo "wednesday";
                break;
                case "4" :
                    echo "thursday";
                    break;
                    case "5":
                        echo "friday";
                        break;
                        default :
                       echo "no days";
                    

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Enter no</label>
        <input type="number" name="day" placeholder="Enter no" required>
        <input type="submit" value="submit">
</form>
</body>
</html>