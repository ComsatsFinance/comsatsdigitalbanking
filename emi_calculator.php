
<html>
<head><title>EMI Calculator</title>
    <style>
    body
        {
         background-image: url('https://wallpaperaccess.com/full/2655942.jpg');
        }
</style>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<?php include'header.php'?>
     <div class="newsroom">
        
        <marquee class="marquee_news" scrolldelay="20"><p class="newsfeed"><span>Your bank may charge you for closing a bank account. 
        Bank also charges you when you close your account within a particular time period.</span><span>SBI cuts deposit rates; PPF to fetch lower interest rate. </span><span>No, it is not mandatory to link your bank account with CITIZENSHIP card</span></p></marquee>
    </div><br><br>
<div class="emi_calc_div">
<form method ="post">
<input type="text" name="amount" placeholder="Loan Amount">
<input type="text" name="rate" placeholder="Interest Rate">
<input type="text" name="tenure" placeholder="Loan Tenure (Year)">
<input type="submit" name="submit" value="Calculate" >

</div>
</form>
</body>
</div>
</body>
</html>
<?php if(isset($_POST['submit'])){

$amount =$_POST['amount'];
$rate =$_POST['rate'];
$tenure =$_POST['tenure'];
$emi = $amount * $rate * (pow(1 + $rate, $tenure) / (pow(1 + $rate, $tenure) - 1));
$emi = $amount * $rate/100;
$total = $emi + $amount;
echo "<h3>Loan EMI : ".$emi."</h3><br>";
echo "<h3>Total Payment (Amount + Interest) : ".$total."</h3> <br>";

}