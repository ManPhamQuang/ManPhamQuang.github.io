<?php 
    include 'tools.php';
    // preShow($_POST);
    // $test = "wut";
    // $$test = "yea";
    // echo $wut;
    foreach ($_POST as $key => $value){
        foreach ($_POST[$key] as $sub_key => $value){
            // sub_key is the individual input fields that user submit in the form
            // echo "this is the big key: " . $key;
            // echo "<br>";
            // echo $sub_key . ": " . $value;
            // echo "<br>";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST[$key][$sub_key])) {
                    $ErrVarName = $sub_key . "Err";
                    // $nameErr = "Name is required";
                    $$ErrVarName = $sub_key . " is required";
                } else {
                    $$sub_key = test_input($_POST[$key][$sub_key]);
                    // validating input of name, email, mobile, card with regexp
                    if($sub_key == "name"){
                        if (!preg_match("/^[a-zA-Z \-.']{1,100}$/", $name)){
                            $nameErr = "Only letters and whitespace are allowed.";
                        }
                    }
                    if($sub_key == "email"){
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $emailErr = "Invalid email format";
                        }
                    }
                    if($sub_key == "mobile"){
                        if (!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", $mobile)){
                            $mobileErr = "Invalid mobile phone format";
                        }
                    }
                    if($sub_key == "card"){
                        if (!preg_match("/^(\d{4}[- ]){3}\d{4}|\d{16}$/", $card)){
                            $cardErr = "Invalid card format";
                        }
                    }
                }
            }
        }
    }
    // define variables and set to empty values
    // $name = $email = $mobile = $card = $expiry = $STA = $STP = $STC = $FCA = $FCP = $FCC = $id = $day = $hour = "";
    // VALIDATING INPUT DATA
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (empty($_POST["cust"]["name"])) {
    //         $nameErr = "Name is required";
    //     } else {
    //         $name = test_input($_POST["cust"]["name"]);
    //         if (!preg_match("/^[a-zA-Z ]*$/", $name)){
    //             $nameErr = "Only letters and whitespace are allowed.";
    //         }
    //     }
    // }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // preShow($nameErr);
    // preShow($emailErr);
    // preShow($mobileErr);
    // preShow($cardErr);

?>
