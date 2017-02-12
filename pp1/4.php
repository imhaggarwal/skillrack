<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1>Cracking Skillrack</h1>
	<p>Powered by Doctor Codes</p>
<?php include '../adCode.php'; ?>
	<div>Recursive Fibonacci</h2>
		<div>Given the value of 'n', write a recursive routine in C to print the first 'n' elements of the Fibonacci series.</div>
		<br><br>
		<pre>
			#include&lt;stdio.h>
			int count=2;
			void fib(int a, int b, int c){
			    int s=a+b;
			    printf(" %d", s);
			    if(++count< c)
			    fib(b,s,c);
			}
			main(){
			    int n;
			    scanf("%d", &n);
			    if(n>0)
			    printf("0");
			    if(n>1)
			    printf(" 1");
			    if(n>2)
			    fib(0,1,n);
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>