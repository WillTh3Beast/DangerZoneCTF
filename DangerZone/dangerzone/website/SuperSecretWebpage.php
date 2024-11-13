<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>SMB</title>
   <link rel="icon" href="icon.svg" type="image/x-icon">
   <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
   <section>
      <h1 id="title">USER DB PAGE</h1>
      <p>Cheryl: Shirttails! We need a password.</p>
      <p>Pam: OK, try guest.</p>
      <p>Cheryl: Oh that's just idio... Oh my god!</p>

      <br>
      <br>
      <p>You can check if a user exists in our database</p>
      <p>For security reasons though we wont actually let you know the result of the query</p>
      <p>It's a feature not a bug!</p>
      <form action="" method="POST" autocomplete="off">
         <label for="username">User</label>
         <input type="text" id="username" name="username" required><br><br>


         <label for="debug">Enable Debug Mode</label>
         <input type="radio" id="debug_yes" name="debug" value="yes">
         <label for="debug_yes">Yes</label>
         <input type="radio" id="debug_no" name="debug" value="no" checked>
         <label for="debug_no">No</label><br><br>
         <input type="submit" value="Submit">
      </form>
   </section>
  
   <section>
      <img class="sshimg" src="images/smb.jpg" alt="smb">
   </section>

   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['username'];
      $debug = isset($_POST['debug']) && $_POST['debug'] === 'yes';

      // Database connection details
      $servername = "localhost";
      $dbname = "dangerzone";
      $dbusername = "danger";
      $dbpassword = "dangerous";

      $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

      if ($conn->connect_error){
         echo "<p>Error: Couldn't connect. </p>".$conn->connect_error;
      } else {
	 $query = "SELECT * FROM users WHERE username = '$username'";
	 
         if ($debug) {
	    echo "<p>'$query'";
	 }

         $result = $conn->query($query);
         
	 //if ($result->num_rows > 0){
	 //   echo "<p>User exists</p>";
	 //} else {
	 //   echo "<p>User Does Not Exist</p>";
	 //}
      }
      $conn->close(); 
   }
   ?>

</body>
</html>
