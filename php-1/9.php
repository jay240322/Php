<html>
     <head>
	     <title>
		     nine
			</title>
		</head>
	  <body>
	     <form method="POST">
		  enter number:
           <input type="number"name="num">
           <input type="submit"value="click"name="submit">
		  </form>
		</body>
</html>
<?php
if($_POST){
   $num = $_POST['num'];
   for($i=0;$i<$num;$i++)
   {
     if($i % 2 == 0)
        echo $i.",";
   }
}
?>