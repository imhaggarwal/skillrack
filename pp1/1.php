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
		<h2>Second Smallest Number</h2>
		<div>Given a set of elements, design an Algorithm and write the subsequent C program to determine the second smallest number in that set.</div>
		<br><br>
		<pre>
			#include&lt;stdio.h>
			main(){
			    int i, a[50], b=0, c, n;
			    scanf("%d", &n);
			    for(i=0; i< n; i++)
			    scanf("%d", &a[i]);
			    for(i=1; i< n; i++)
			    if(a[b]>a[i])
			    b=i;
			    if(b!=0)
			    c=a[0];
			    else
			    c=a[1];
			    for(i=0; i< n; i++)
			    if(c>a[i] && i!=b)
			    c=a[i];
			    printf("%d",c);
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>