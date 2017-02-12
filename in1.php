<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Cracking Skillrack</h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include './adCode.php'; ?>
		<h2>Nature of Digit in Position</h2>
		<br>Given a number ‘n’ and a position ‘p’, write an algorithm and the subsequent ‘C’ program to check if the ‘p-th’ digit from the  leftmost position  of ‘n’ is odd or even. For example, if ‘n’ is 3145782 and p is 4 then you have to check if 5 is odd or even. Since it is odd print ‘Odd’. Make your code accept numbers of larger size.<br>
		<pre>
			#include&lt;stdio.h>
			#include&lt;stdlib.h>
			main()
			{
			    char n[10], b[10];
			    int a, p;
			    scanf("%s %d", n, &p);
			    b[0]=n[p-1];
			    a=atoi(b);
			    if(a%2)
			        printf("Odd");
			    else
			        printf("Even");
			}

	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
</body>
</html>