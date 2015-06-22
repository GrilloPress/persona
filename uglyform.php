<?php 
// First this section checks if the values of name or age have been supplied
// Then is prints out the values
// It then sets the filename as the name value with .txt
// 
// After that it runs the file_put_contents which basically creates, writes and then saves a file
// 
// The form below is actually run first. It is a classic form that calls its this file itself
// each input and the responding name provides the POST method with the values for the earler php section
// 
// You can change this by editing in a variable how you format the input
// Create a variable that contains all of the $_POST data inside a variable and then
// reference that inside file_put_contents function
// 
// 
// the second file put contents creates the post items into a file called hack.html which the joined variable
// the joined variable is created from including the heading and joining that with the content from the form
// 
// This is awful procedural code. It is meant to be. I'm just pissing around with PHP
?>

<?php if ( $_POST["name"] || $_POST["age"] ): ?>
<p>You submitted:</p>
  <ul>
    <li><?php echo $_POST['name'] ?></li>
    <li><?php echo $_POST['age'] ?></li>
    <li><?php echo $_POST['job'] ?></li>
    <li><?php echo $_POST['problems'] ?></li>
    <li><?php echo $_POST['solutions'] ?></li>
    <?php $filename = $_POST['name'] . ".html" ;?>
</ul>



<?php

$content = "
<ul>
  <li>{$_POST['name']}</li>
  <li>{$_POST['age']}</li>
  <li>{$_POST['job']}</li>
  <li>{$_POST['problems']}</li>
  <li>{$_POST['solutions']}</li>
</ul>
";


file_put_contents( $filename, $content);

$heading = include('heading.php');
$joined = $heading . $content;

file_put_contents( "hack.html", $joined );


?>

<?php endif; ?>

<html>
<body>
  <form action="uglyform.php" method="POST">
  Name: <input type="text" name="name" />
  Age: <input type="text" name="age" />
  Job: <input type="text" name="job" />
  Problems: <input type="text" name="problems" />
  Solutions: <input type="text" name="solutions" />
  <input type="submit" />
  </form>
</body>
</html>