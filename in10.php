<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1><a href='index.php'>Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include './adCode.php'; ?>
		<h2>Car Mileage Calculation Problem</h2><br>
		A workshop has a variety of cars. The details of the car such as car number, miles driven, and gallons of gas used in each car, are stored in a file.<br>
		<pre>
			Car Number          Miles Driven         Gallons used
			      54            250                     19
			      62            525                     38
			      71            123                     6
			      85            1,322                     86
			      97            235                     14
		</pre>
		Write a  C++ program that reads the data in the file created and displays the car number, miles driven, gallons used, and the miles per gallon (mileage)  for each car. <br><br>
		<pre>
			#include&lt;fstream>
			#include&lt;iostream>
			#include&lt;iomanip>
			using namespace std;
			main(){
			    ifstream f;
			    char n[20];
			    int no[20], i=0;
			    float marks[20], tim[20], s=0, av[20], tot=0, sav=0;
			    cin>>n;
			    f.open(n);
			    while(!f.eof()){
			        f>>no[i];
			        f>>marks[i];
			        s+=marks[i];
			        f>>tim[i];
			        tot+=tim[i];
			        av[i]=marks[i]/tim[i];
			        sav+=av[i];
			        cout&lt;&lt;no[i++]&lt;&lt;" "&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;marks[i]&lt;&lt;" "&lt;&lt;tim[i]&lt;&lt;" "&lt;&lt;av[i]&lt;&lt;endl;
			    }
			    cout&lt;&lt;s&lt;&lt;endl&lt;&lt;tot&lt;&lt;endl&lt;&lt;sav&lt;&lt;endl&lt;&lt;sav/(i);
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
<?php include './adCode.php'; ?>
</body>
</html>