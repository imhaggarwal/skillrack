s<!DOCTYPE html>
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
		<h2>Complex Number</h2>
		<br>A computer scientist working in image processing is working on discrete Fourier transform. He needs an implementation of complex number to use in his program. Develop an algorithm and write a C program to implement addition, subtraction and multiplication in complex numbers. Implement each operation as a function and call it in your main. The function call sequence is addition, subtraction and multiplication. For example when the complex numbers are 3+2i, 1+7i the output should be<br>4+9i<br>2-5i<br>-11+23i
<br>
		<pre>
			#include&lt;stdio.h>
			void add(int r1,int i1,int r2,int i2)
			{
			    if(i1+i2 < -1)
			    printf("%d%di\n",r1+r2,i1+i2);
			    else if(i1+i2==-1)
			    printf("%d-i\n",r1+r2);
			    else if(i1+i2==0)
			    printf("%d\n",r1+r2);
			    else if(i1+i2==1)
			    printf("%d-i\n",r1+r2);
			    else
			    printf("%d+%di\n",r1+r2,i1+i2);
			}
			void multi(int r1,int i1,int r2,int i2)
			{
			    int d=(r1*i2)+(r2*i1);
			    if(d < -1)
			    printf("%d%di",(r1*r2)-(i1*i2),d);
			    else if(d==-1)
			        printf("%d-i",(r1*r2)-(i1*i2));
			    else if(d==0)
			    printf("%d",(r1*r2)-(i1*i2));
			    else if(d==1)
			    printf("%d+i",(r1*r2)-(i1*i2));
			    else
			    printf("%d+%di",(r1*r2)-(i1*i2),d);
			}
			main()
			{
			    int r1,r2,i1,i2;
			    scanf("%d%d%d%d",&r1,&i1,&r2,&i2);
			    add(r1,i1,r2,i2);
			    add(r1,i1,-r2,-i2);
			    multi(r1,i1,r2,i2);
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
</body>
</html>