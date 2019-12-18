<?php
    $topic = 'fv';
    include('includes/header.php');
?>  
<div class="content-container">
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $betreff = $_POST["betreff"];
    $nachricht = $_POST["nachricht"];

    $logName = 'kontaktlog.csv';
    if(file_exists('kontaktlog.csv')){
     $aktuellerLog = file_get_contents($logName);
    }
    else {
      $aktuellerLog = '';
    }
    $kontaktDaten = "\nname:".$name.";email:".$email.";betreff:".$betreff.";nachricht:".$nachricht;

    $aktuellerLog .= $kontaktDaten;

    file_put_contents($logName , $aktuellerLog);
    
    echo "<p>";
    echo "Danke ".$name.", wir melden uns bald!\r\n";
    echo "</p>";
?>
  </div>
  <div class="content-right"></div>
</div>
<?php include('includes/footer.php'); ?>
</div>
</body>

</html>