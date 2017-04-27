<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8" />
</head>
<body>
	<h1><a href="../index.php">Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2> Sort Data in File</h2>
		<div>Given a file with a set of numbers in a file, write a C++ program to sort the numbers and print them.</div>
		<br><br>
		<pre>
			#include&lt;fstream>
			#include&lt;iostream>
			#include&lt;vector>
			#include&lt;algorithm>
			using namespace std;
			main(){
			    int k;
			    vector&lt;int> m;
			    ifstream f;
			    char n[20];
			    cin>>n;
			    f.open(n);
			    while(!f.eof()){
			        f>>k;
			        m.push_back(k);
			    }
			    sort(m.begin(),m.end());
			    for(vector&lt;int>::iterator i=m.begin(); i!=m.end(); i++)
			    cout&lt;&lt;*i&lt;&lt;endl;
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>