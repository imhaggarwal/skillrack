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
		<h2>Verification of circular prime number</h2>
		<div>A circular prime number is a prime number 'p' with a property that all the numbers got by cyclically permuting the digits of 'p', are also a prime number.

A number is said to be a prime if it has no factors other than the number 1 and itself. 19937 is a circular prime number, as all the numbers obtained by cyclically permuting the number 19937 : 99371, 93719,37199,71993,19937 are all prime.

Develop an algorithm and write a C program to check if the given number is circular prime or not.</div>
		<br><br>
		<pre>
			#include&lt;stdio.h>
			#include&lt;string.h>
			#include&lt;stdlib.h>
			int prime(int a){
			    int i, j;
			    for(i=2; i< a; i++)
			        if(!(a%i))
			            return 1;
			    return 0;
			}
			main(){
			    char n[20], a[20];
			    int i, j, b, l1, l2;
			    scanf("%s", n);
			    l1=strlen(n);
			    for(i=0; i< l1; i++){
			            j=i;
			        for(l2=0; l2< l1; l2++){
			            j%=l1;
			            a[l2]=n[j++];
			        }
			        b=atoi(a);
			        if(prime(b)){
			            printf("Not circular prime");
			            return 0;
			        }
			    }
			    printf("Circular Prime");
			}

		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>