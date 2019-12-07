<?php
    include('includes/header.php');
?>  

<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $betreff = $_POST["betreff"];
    $nachricht = $_POST["nachricht"];

    $logName = 'kontaktlog.csv';
    $aktuellerLog = file_get_contents($logName);
    $kontaktDaten = "\nname:".$name." , email:".$email." , betreff:".$betreff." , nachricht:".$nachricht;

    $aktuellerLog .= $kontaktDaten;

    file_put_contents($logName , $aktuellerLog);
    
    echo "<p>";
    echo "Danke ".$name.", wir melden uns bald!\r\n";
    echo "</p>";
?>

<?php
    include('includes/footer.php');
?>