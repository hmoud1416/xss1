<!DOCTYPE html>
<center>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #4CAF50;
  color: white;
  text-align: center;
}
</style>
<body>

<h2>xss سناريو اختبار اختراق </h2>

<form action="" method="GET">
  <label for="fname"><p style="color:red;">المستوى مبتدئ </p></label>
  <input type="text" id="fname" name="name" >

  <input type="submit" value="ارسال">
</form> 
<form action="" method="GET">
  <label for="fname"><p style="color:red;">المستوى متوسط</p></label>
  <input type="number" id="fname" name="name" >

  <input type="submit" value="فحص">
</form> 

<form action="" method="GET">
  <label for="fname"><p style="color:red;">مستوى متقدم</p></label>
  <input type="text" id="fname" name="name2" >

  <input type="submit" value="فحص">
</form> 

<form action="" method="GET">
  <label for="fname"><p style="color:red;">محمي</p></label>
  <input type="text" id="fname" name="name3" >
  <input type="submit" value="فحص">
</form> 


</body>
</html>
</center>

<?php


// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
    // Feedback for end user
    echo '<center><pre>Hello ' . $_GET[ 'name' ] . '</pre></center>';
}
// Is there any input?
if( array_key_exists( "name2", $_GET ) && $_GET[ 'name2' ] != NULL ) {
    // Get input
    $name = str_replace( '<script>', '', $_GET[ 'name2' ] );

    // Feedback for end user
    echo "<center><pre>Hello ${name}</pre></center>";
}

if( array_key_exists( "name3", $_GET ) && $_GET[ 'name3' ] != NULL ) {
    // Get input

    // Feedback for end user
    echo "<pre>Hello ".htmlspecialchars($_GET[ 'name3' ])."</pre>";
}



?>

  <center><p>twitter.com/hmoud1996 - Hamoud Al-Helmani</p></center>
</div>