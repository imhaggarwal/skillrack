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
		<h2>Recursive reverse</h2>
		<pre>
			#include&lt;stdio.h>
			#include&lt;string.h>
			int l1=0, l2;
			void rev(char a[40], char b[40]){
			    b[l1++]=a[l2-l1];
			    if(l2!=l1)
			    rev(a,b);
			}
			main(){
			    char a[40], b[40];
			    scanf("%[^\n]s", a);
			    l2=strlen(a);
			    if(l2>0)
			    rev(a,b);
			    b[l1]='\0';
			    printf("%s", b);
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>