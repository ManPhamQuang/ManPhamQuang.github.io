<?php 
    // session_start();
    include 'tools.php';
    if (isset($_POST['session-reset'])) {
        preShow($_POST['session-reset']);
        session_unset();
        // foreach($_SESSION as $something => &$whatever) {
        //     preShow($whatever);
        //     unset($whatever);
        // }
    }
    if (isset($_SESSION['booking'])) {
        preShow($_SESSION);
        /// your code here
        $order = $_SESSION['booking'];
        // outputCsv('orders.csv', $order['cust']);
        $file = fopen('orders.csv', 'w');
        // fputcsv($file, $oder['name'], '    ');
        fputcsv($file, $order['cust'], "\t");
        // foreach($order as $field){
        //     fputcsv($file, $field, '    ');
        //     echo $field;

        // }
        $fclose($file);
        echo 'done';
    }else{
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="receipt.css"></link>
</head>
<body>
    <div><h1>hello</h1></div>
    <!-- <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type='submit' name='session-reset' value='Reset the session' >
    </form> -->
</body>
</html>