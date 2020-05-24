<?php 
    include 'tools.php';
    if (isset($_POST['session-reset'])) {
        session_unset();
    }
    if (isset($_SESSION['booking'])) {
        // stay in page
    }else{
        // done button pressed, go back to home
        header('location: index.php');
    }
    $booking = $_SESSION['booking'];
    // extract the values from the array to separate variables
    foreach ($booking as $key => $value){
        foreach($booking[$key] as $sub_key => $value){
            $varName = $sub_key;
            $$varName = $value;
        }
    }
    php2js($booking['seats'], 'seats');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link
        id="stylecss"
        type="text/css"
        rel="stylesheet"
        href="./tickets.css"
    /> 
</head>
<body>
    <div id="tickets"></div>
    <div class="done-button-container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input class="button" type='submit' name='session-reset' value='Done' >
        </form>
    </div>
    <script>
        var seatsArray = []
        for (var key in seats) {
            if (seats.hasOwnProperty(key)) {
                // console.log(key);
                if(key !== 'total'){
                    for(let i=0;i < seats[key]; i++){
                        seatsArray.push(key)
                    }
                }
            }
        }
        document.getElementById('tickets').innerHTML = seatsArray.map(seat => {
            return `<div class="ticket">
                    <div class="ticket__content">
                        <div>
                            <p class="ticket__text">${seat} - CINEMAX</p>
                            <p class="ticket__text"><?php echo $id ?></p>
                            <p class="ticket__text"><?php echo $day ?></p>
                            <p class="ticket__text"><?php echo $hour ?></p>
                        </div>
                    </div>
                    
                </div>`

        }).join('')
        
    </script>
</body>
</html>