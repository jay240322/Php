<html>
     <head>
	     <title>
		     nine
			</title>
		</head>
	  <body>
	     <form method="POST">
		  enter number 1:
          <input type="number"name="fnum">
          enter number 2:
          <input type="number"name="snum">
          enter number 3:
          <input type="number"name="tnum">
           <input type="submit"value="click"name="submit">
		  </form>
		</body>
</html>
<?php
  function isprime($n){
    if($n <= 1)
        return false;
    if($n == 2)
        return true;
    if($n %2 == 0)
        return false;
    for($i=3;$i<=sqrt($n);$i+=2){
        if($n % $i == 0)
            return false;
    }
    return true;
  }
  // function isprime($n) {
  //   if ($n < 2 || ($n % 2 == 0 && $n != 2)) 
  //     return false;
  //   for ($i = 3; $i <= sqrt($n); $i += 2)
  //     if ($n % $i == 0) return false;
  //   return true;
  // }

  if($_POST){
      $num1 = $_POST['fnum'];
      $num2 = $_POST['snum'];
      $num3 = $_POST['tnum'];

      $sum = $num1 + $num2 + $num3 ;
      echo "<h3>Sum of three numbers is: $sum</h3>";

      // Example: check if sum is prime
      if(isprime($sum)){
          echo "<h3>$sum is a prime number.</h3>";
      } else {
          echo "<h3>$sum is not a prime number.</h3>";
      }
  }
?>
