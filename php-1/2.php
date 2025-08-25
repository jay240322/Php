<html>
     <head>
	     <title>
		     first
			</title>
		</head>
	  <body>
	     <form method="POST">
		    enter first number:<input type="number"name="fname"><br>
            enter second number:<input type="number"name="sname"><br>
            <input type="submit"value="click"name="submit">
		  </form>
		</body>
</html>
<?php
if($_POST){
    $fnum = $_POST['fname'];
    $snum = $_POST['sname'];

    if($fnum > $snum){
        echo"$fnum is greater then $snum";
    }
    else{
        echo"$snum is greater than $fnum";
    }
}