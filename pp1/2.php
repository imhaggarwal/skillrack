<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1>Cracking Skillrack</h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2>Cyclic Right Shift of Elements</h2>
		<div>Given a set of elements stored in an array and a number 'm', design an Algorithm and write the subsequent C program to perform cyclic right shift of the array by 'm' places. For example, if the elements are 12, 13, 16, 7, 10 and m =2 then the resultant set will be 7, 10, 12, 13, 16.</div>
		<br><br>
		<pre>
			#include&lt;stdio.h>
			main(){
			    int a[40], i, j, b[40], n, m;
			    scanf("%d", &n);
			    for(i=0; i< n; i++)
			    scanf("%d", &a[i]);
			    scanf("%d", &m);
			    for(i=0; i< n; i++){
			        j=i+m;
			        j%=n;
			        b[j]=a[i];
			    }
			    for(i=0; i< n; i++)
			    printf("%d ", b[i]);
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>