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
		<h2> Row Maximum of a Matrix</h2>
		<div>Given an nXn matrix with entries as numbers, print the maximum value in each row of the matrix.</div>
		<br><br>
		<pre>
			#include&lt;stdio.h>
			main(){
			    int a[10][10], n, i, j, m;
			    scanf("%d", &n);
			    for(i=0; i< n; i++)
			        for(j=0; j< n; j++)
			        scanf("%d", &a[i][j]);
			    for(i=0; i< n; i++){
			            m=a[i][0];
			        for(j=1; j< n; j++)
			        if(a[i][j]>m)
			        m=a[i][j];
			        printf("\n%d ", m);
			    }
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>