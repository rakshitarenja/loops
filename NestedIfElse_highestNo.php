<html>
<body>
<form action='' method="GET">
<h1>Program to find the Highest score</h1><br>
<h2>Enter the scores of the following candidates</h2><br>

A <input type="text" name="a"/><br>
B <input type="text" name="b"/><br>
C <input type="text" name="c"/><br>

<input type="submit" name="submit" value="find"/>
</form>
</body>
</html>

<?php
if(isset($_GET['submit']))
	{
	$A=$_GET['a'];
	$B=$_GET['b'];
	$C=$_GET['c'];	
	
if(($A>$B) && ($A>$C))
	{
	echo ("A is Highest Scored Candidate".$A);
	}
else if($B>$C)
	{
	echo ("B is Highest Scored Candidate".$B);
	}
else
	{
	echo ("C is Highest Scored Candidate".$C);
	}
	}
?>
