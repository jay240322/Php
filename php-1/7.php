<html>
     <head>
	     <title>
		     seven
			</title>
		</head>
	  <body>
	     <form method="POST">
		    enter first number:
            <input type="number"name="fnumber"><br>
            enter second number:
            <input type="number"name="snumber"><br>
            <input type="submit"value="click"name="submit">
		  </form>
		</body>
</html>
<?php
if($_POST){
    $fnum = $_POST['fnumber'];
    $snum = $_POST['snumber'];
    
    $add = $fnum + $snum;
    $mul = $fnum * $snum;
    $sub = $fnum - $snum;
    $div = $fnum / $snum;

    echo"the sum of numers :$add <br>
         the multiplication of number: $mul <br>
         the subtraction of number : $sub <br>
         the division of number : $div";
}
?>