<?php 
    $booking = $_SESSION['booking'];
    // extract the values from the array to separate variables
    foreach ($booking as $key => $value){
        foreach($booking[$key] as $sub_key => $value){
            $varName = $sub_key;
            $$varName = $value;
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>
    
    @media screen{
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        button{
            cursor: pointer;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        button:hover{
            background-color: #e52729;
            color:white;
        }
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }
        
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    @media print {
        button{
            display: none;
        }
        @page {
            size: A4; /* DIN A4 standard, Europe */
            margin:0;
        }
        html, body {
            width: 210mm;
            height: 282mm;
            font-size: 11px;
            background: #FFF;
            overflow:visible;
        }
        body {
            padding-top:15mm;
        }
        .invoice-box {
            padding: 30px;
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }
        
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="logo.png" style="width:100%; max-width:200px;">
                            </td>
                            
                            <td>
                                <?php echo "Created: " . date("d/m/yy") ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Cinemax, Inc.<br>
                                00 123 456 789<br>
                            </td>
                            
                            <td>
                                <?php echo $name?><br>
                                <?php echo $mobile?><br>
                                <?php echo $email?><br>
                                <?php echo $card?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Movie id
                </td>
                
                <td>
                    Date - Time
                </td>
                
            </tr>
            
            <tr class="item">
                <td>
                    <?php echo $id?>
                </td>
                
                <td>
                    <?php echo $day . " - " . $hour?>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Seat
                </td>
                
                <td>
                    Amount
                </td>
            </tr>

            <?php 
                foreach($booking['seats'] as $key => $value){
                    if($value !== "" && $key !== "total"){
                        echo "<tr class='item'>
                            <td>
                                {$key}
                            </td>
                            
                            <td>
                                {$value}
                            </td>
                        </tr>";
                    }
                }
            ?>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Sub Total: <?php echo "$" . number_format((float)$total, 2, '.', '');?>
                </td>
            </tr>
            <tr class="total">
                <td></td>
                
                <td>
                   GST: <?php echo "$" . number_format((float)$total/11, 2, '.', ''); ?>
                </td>
            </tr>
            <tr class="total">
                <td></td>
                
                <td>
                   Total: <?php echo "$" . number_format((float)$total + $total/11, 2, '.', '');?>
                </td>
            </tr>
        </table>
        <form action="tickets.php" method="post">
            <button type="submit">Print tickets</button>
        </form>
    </div>
</body>
</html>
