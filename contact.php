<html>
<?php
  //connect to the running database server and the specific database
  $connect = new mysqli('localhost','root','root','keith_portfolio');
  include('includes/connect.php');


  //create a query to run in SQL
  $query = "INSERT INTO contacts (full_name, email, msg) VALUES('.$fname.','.$email.','.$msg.')";


  //run the query to get back the content
  $results = mysqli_query($connect,$query);


  // print_r($results);

?>

<head>
</head>

<body>
<section>
<form action="sendmail.php" method="post" enctype="text/plain">

    <label for="full_name">Full Name</label>
    <input name="full_name" type="text" placeholder="Your Name" id="full_name">

    <label for="email">Email</label>
    <input name="email" type="text" placeholder="Your Email/Phone Number" id="email">

    <label for="msg">Message</label>
    <textarea name="msg" id="msg" placeholder="Drop your thoughts / movie recommendation / interests / discord username / steam ID / anything on your mind!"></textarea>

    <input type="submit" value="send" class="submit-btn">
</form>

</section>
<footer>
<?php 
echo date("F j, Y, g:i a"); 
?>

</footer>
</body>
</html>