<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $topping1 = $topping2 = $topping3 = $phone = "";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if($_POST['topping1'] != '' && $_POST['topping2'] != '' && $_POST['topping3'] != ''){
            $topping1 = test_input($_POST["topping1"]);
            $topping2 = test_input($_POST["topping2"]);
            $topping3 = test_input($_POST["topping3"]);
        }
        else{
            echo "Please make sure all option are selected";

        }
        
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
<p>Click <a href="/~s3049238/ass01/PartA/toppings.html">here</a> to go back</p>
</body>
</html>