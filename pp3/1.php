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
		<h2>Tender scrutiny using reference variableAutomatic vending machine</h2>
		<div>A government organization received tenders from ‘n’ vendors for their campus renovation work. It has to determine and select the vendor who had quoted the least amount for this renovation work. Given the registration number, address and amount quoted by vendor, design an algorithm and write a C++ code to print the details of vendor for whom the tender will be given. Write a function that returns the details of vendor by reference concept.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include&lt;stdio.h>
			using namespace std;
			struct ten{
			    int reg, amt;
			    string add;
			};
			main(){
			    int n, i;
			    struct ten obj[10], *temp, *m;
			    cin>>n;
			    for(i=0; i&lt;n; i++)
			        cin>>obj[i].reg>>obj[i].add>>obj[i].amt;
			    temp=obj;
			    m=temp;
			    temp++;
			    for(i=1; i&lt;n; i++){
			        if(m->amt>temp->amt)
			            m=temp;
			            temp++;
			    }
			    cout&lt;&lt;m->reg&lt;&lt;endl&lt;&lt;m->add;
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>