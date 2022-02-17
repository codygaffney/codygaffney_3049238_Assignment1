<?php
    $topping1 = $topping2 = $topping3 = $phone = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $topping1 = test_input($_POST["topping1"]);
        $topping2 = test_input($_POST["topping2"]);
        $topping3 = test_input($_POST["topping3"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>