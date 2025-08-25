<html>
     <head>
	     <title>
		     first
			</title>
		</head>
	  <body>
	     <form method="POST">
		    enter number:
            <input type="number"name="number"><br>
            <input type="submit"value="sum"name="submit">
		  </form>
		</body>
</html>
<?php
if($_POST){
   $num = $_POST['number'];
   $sum = 0;
   for($i=1;$i<$num;$i++)
   {
     $sum = $sum + $i;
   }
   echo"sum of first $num is $sum"; 
}
?>