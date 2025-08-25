<html>
     <head>
	     <title>
		     first
			</title>
		</head>
	  <body>
	     <form method="POST">
		    enter number :
            <input type="number"name="number"><br>
            <input type="submit"value="click"name="submit">
		  </form>
		</body>
</html>
<?php
if($_POST){
   $num = $_POST['number'];
   $a = 0;
   $b = 1;
   for($i=0;$i<$num;$i++)
   {
    echo $a.",";
    $c = $a + $b;
    $a = $b;
    $b = $c;
   }
}
?>