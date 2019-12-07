<?php
    include('includes/header.php');
?>

<div class="formular">
            <h2>Kontaktformular</h2>
            <form action="formularVerarbeitung.php" method="post">
                <input type="text" name="name" class="formfeld" placeholder="Name" size="47"> <br>
                <input type="email" name="email" class="formfeld" placeholder="E-Mail" size="47"> <br>
                <input type="text" name="betreff" class="formfeld" placeholder="Betreff" size="47"> <br>
                <textarea name="nachricht" cols="50" rows="10" class="formfeld" placeholder="Nachricht"></textarea> <br>
                <input type="submit" name="submit" value="Abschicken" class="formbtn1"> <input type="reset" value="Zurücksetzen" class="formbtn2">
            </form>
</div>

<?php
    include('includes/footer.php');
?>