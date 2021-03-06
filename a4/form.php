<!DOCTYPE HTML>  
<html>
<head>
<style>
   .error {color: #FF0000;}
</style>
</head>
<body>  
<?php 
    include 'tools.php';
    if(!empty($_POST)){
        if(array_sum($_POST['seats']) == 0) {
            $seatsErr = "* Please select at least one seat";
        }
        
        if($_POST['movie']['hour'] == ''){
            $movieErr = "* Please select a movie and a time";
        }
        foreach ($_POST as $key => $value){
            foreach ($_POST[$key] as $sub_key => $value){
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST[$key][$sub_key])) {
                        // adding error field is required
                        $ErrVarName = $sub_key . "Err";
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
                        if($sub_key == "expiry"){
                            if(date('Y-m') >= $expiry){
                                $expiryErr = "Expiry date cannot be within a month of the purchase date";
                            }
                        }
                    }
                }
            }
        }
        if(isset($nameErr) || isset($emailErr) || isset($mobileErr) || isset($cardErr) || isset($expiryErr) || isset($seatsErr) || isset($movieErr)){
            // returns to index.php if error detected
        }else{
            $_SESSION["booking"] = $_POST;
            echo "<script>\n
                window.location.href = 'receipt.php';\n
            </script>";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        
    // session_start()


?>
</body>
</html>
