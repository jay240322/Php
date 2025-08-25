<html>
     <head>
	     <title>
		     first
			</title>
		</head>
	  <body>
	     <form method="POST">
		    enter string :
            <input type="text"name="text"><br>
            <input type="submit"value="click"name="submit">
		  </form>
		</body>
</html>
<?php
if($_POST){
  $str = $_POST['text'];
  $reverse = strrev($str);

  if($str == $reverse){
    echo"$str is palindrome";
  }
  else{
    echo"$str is not palindrome";
  }
}
?>