<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP practice</title>
</head>

<body>



    <h2>PHP Form Validation Example</h2>
<?php 

    
      <form method="post" action="insert.php">
        <input type="text" name="name" placeholder="Vardas" required>
        <br> <br>
        <input type="email" name="email" placeholder="El. paštas" required>
        <br><br>
        <input type="tel" name="phone" placeholder="Telefonas" required>
        <br><br>
        <textarea type="text" name="message" rows="4" placeholder="Žinutės tekstas"></textarea>
        <br><br>
        <input type="submit" value="Išsiųsti">
    </form>


?>
    

  


</body>

</html>
