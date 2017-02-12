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
		<h2>Leaders of Elements</h2>
		<pre>
			#include&lt;stdio.h>
			main(){
			    int a[40], b[40], n, c=0, i, j;
			    scanf("%d", &n);
			    for(i=0; i< n; i++)
			    scanf("%d", &a[i]);
			    for(i=0; i< n-1; i++){
			        for(j=i+1; j< n; j++)
			        if(a[i]<=a[j])
			        break;
			        if(j==n)
			        b[c++]=a[i];
			    }
			    if(c)
			    for(i=0; i< c; i++)
			    printf("\n%d", b[i]);
			    else
			    printf("\nNo leaders");
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>