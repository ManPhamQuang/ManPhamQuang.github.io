<?php 
    include 'tools.php';
    if (isset($_POST['session-reset'])) {
        // preShow($_POST['session-reset']);
        session_unset();
    }
    if (isset($_SESSION['booking'])) {
        $order = $_SESSION['booking'];
        $file = fopen('orders.csv', 'a');
        fputcsv($file, $order['cust'], "\t");
        fclose($file);
    }else{
        header('location: index.php');
    }
    include 'invoice.php';
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="receipt.css"></link>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type='submit' name='session-reset' value='Reset the session' >
    </form>
</body>
</html> -->
