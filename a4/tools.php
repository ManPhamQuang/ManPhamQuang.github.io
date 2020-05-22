<?php
    session_start();
    function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
        return $ret;
    else 
        echo $ret; 
    }
    function printMyCode() {
        $lines = file($_SERVER['SCRIPT_FILENAME']);
        echo "<pre class='mycode'><ol>";
        foreach ($lines as $line)
                echo '<li>'.rtrim(htmlentities($line)).'</li>';
        echo '</ol></pre>';
    }
    function php2js( $arr, $arrName ) {
        $lineEnd="";
        echo "<script>\n";
        echo "/* Generated with A4's php2js() function */";
        echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
        echo "</script>\n\n";
    }
    if (isset($_POST['session-reset'])) {
        foreach($_SESSION as $something => &$whatever) {
            unset($whatever);
        }
    }
    function outputCsv($fileName, $assocDataArray){
        if(isset($assocDataArray['0'])){
            $fp = fopen($fileName, 'w');
            fputcsv($fp, array_keys($assocDataArray['0']));
            foreach($assocDataArray AS $values){
                fputcsv($fp, $values);
            }
            fclose($fp);
        }
    }

// Put your PHP functions and modules here

?>