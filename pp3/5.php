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
		<h2>Vector Operations</h2>
		<div>Vectors are used in everyday life to locate individuals and objects. They are also used to describe objects acting under the influence of an external force. A vector, is a quantity with a direction and magnitude. A vector with magnitude alone, is an n-tuple (list of n numbers) Given two vectors v1, v2, develop an algorithm and the subsequent C++ program to determine the sum and dot product of the two vectors. Sum of  v1 and v2, written as v1+v2,   is got by adding the respective elements: first element of  v1+v2 is got by  adding the first element of v1  with the first element of v2; second element of v1+v2 is got by adding the second element of v1 and the second element of v2 and so on. The dot product v1*v2 is a scalar ( a number), which is the sum of the product of the respective elements of v1 and v2. In other words, dot product of two vectors is got by adding : the product of the first element of v1 with the first element of v2, product of the second element of v1 with the second element of v2 and so on<br>if the input vectors v1 and v2 are:<br>v1= 3, 4, -5, 6, 7, 8<br>v2 = 4, 6, 8, 10, 1, 4<br>Then sum of the two vectors is 7, 10, 3, 16, 8, 12 and their dot product is : 3*4+4*6+(-5)*8+6*10+7*1+8*4<br>12+24+(-40)+ 60+7+32=95</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			main(){
			    int n, m, i, a[20], b[20], p=0;
			    cin>>n;
			    for(i=0; i&lt;n; i++)
			        cin>>a[i];
			    cin>>m;
			    for(i=0; i&lt;m; i++)
			        cin>>b[i];
			    for(i=0; i&lt;n; i++){
			        cout&lt;&lt;a[i]+b[i]&lt;&lt;endl;
			        p+=a[i]*b[i];
			    }
			    cout&lt;&lt;p;
			}

	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>