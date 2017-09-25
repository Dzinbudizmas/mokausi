<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP practice</title>
    </head>
    <body>
    
<?php        
 $name = $email = $phone = $comment = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $comment = test_input($_POST["comment"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
?>   
        
        
        

        <h2>PHP Form Validation Example</h2>

       
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="text" name="name" placeholder="Vardas" required
                     oninvalid="this.setCustomValidity('Irasykite varda')"
                     oninput="setCustomValidity('')">
                    <br> <br>
                    <input type="email" name="email" placeholder="El. paštas">
                    <br><br>
                    <input type="tel" name="phone" placeholder="Telefonas" required>
                    <br><br>
                    <textarea type="text" name="comment" rows="4" placeholder="Žinutės tekstas"></textarea>
                    <br><br>
                    <input type="submit" value="Išsiųsti">
                </form>
       

      
      
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $comment;
echo "<br>";

?>
      
  </body>
</html>
