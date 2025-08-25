<html>
     <head>
	     <title>
		     eleven
			</title>
		</head>
	  <body>
	     <form method="POST">
		    Enter number:
            <input type="text"name="number">
           <input type="submit"value="click"name="submit">
		  </form>
		</body>
</html>
<?php
  function sum(){
     if($_POST){
        $num = $_POST['number'];
        $sum = 0;
        while($num > 0){
            $sum = $sum + $num % 10;
            $num = $num / 10;
        }
        echo"the sum of digits:$sum";
     }
  }
  sum();
?>