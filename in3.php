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
		<h2>Guiding a Travelling Salesman</h2>
		<br>A laptop sales company wants their salesperson to visit some cities every month and promote their sales.  A code has to be written to find the sequence of visit so that he travels the minimum. Given ‘n’ cities and a home city, design an algorithm and write a C++ code to determine the number of routes to be evaluated when the problem is to be solved by brute force approach. For example, if there are four cities A, B, C, and D and ‘A’ is the home city then brute force method calculate distance of the following routes:<br>A B C D A<br>A B D C A<br>A C B D A<br>A C D B A<br>A B C D A<br>A B D C A<br>
		Note: This is not the solution for the ' Travelling Salesman ' problem but this would be enough for the inlab problem<br>
		<pre>
			#include&lt;stdio.h>
			main()
			{
			    int n, i, p=1;
			    char a[20][20];
			    scanf("%d", &n);
			    for(i=0; i&lt;=n; i++)
			        scanf("%s",a[i]);
			    for(i=2; i&lt;n; i++)
			        p*=i;
			    printf("%d", p);
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
<?php include './adCode.php'; ?>
</body>
</html>