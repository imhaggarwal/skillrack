<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1><a href='../index.php'>Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2> Computing Area of Different Shapes</h2>
		<div>The area is the two-dimensional amount of space that an object occupies. Area is measured along the surface of an object and has dimensions of length squared; for example, square feet of material, or centimetres squared.<br>The area of a rectangle is equal to the height h times the base b; A = h * b<br>The equation for the area of a trapezoid is one half the sum of the top t and bottom b times the height h; A = h * [ t + b ] / 2<br>The area of a circle is A = pi * r2, where pi = 3.14 and r = radius.<br>Develop a program in C++ using function overloading for computing the area of a rectangle, a trapezoid and a circle by a common function name ComputeArea() with different signature. Assume pi = 3.14. Print only two decimal places for all areas.</div>
		<br><br>
		<pre>
			//start
			#include&lt;iostream>
			#include&lt;iomanip>
			using namespace std;
			double area(int len, int bre){
			    return len*bre;
			}
			double area(int top, int bottom, int height){
			    return height*(top+bottom)/2; 
			}
			double area(int r){
			    return 3.14*r*r;
			}
			//end

			int main()
			{
			    float len,bre,top,bottom,height,radius;
			    double a;
			    cin>>len>>bre;
			    a = area(len,bre);
			    cout&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;a&lt;&lt;endl;
			    cin>>top>>bottom>>height;
			    a = area(top,bottom,height);
			    cout&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;a&lt;&lt;endl;
			    cin>>radius;
			    a = area(radius);
			    cout&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;a&lt;&lt;endl;
			}

	</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>