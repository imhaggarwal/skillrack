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
		<h2>Class Average Problem</h2>
		<div>
			The marks scored by the students in a test  are stored in a file. The file has the information of the students such as , number, marks scored, and the time taken by the student to complete the test<br>
			<pre>
				Student Number          Marks scored         Time taken (in mts)
					      01                   25               40
					      02                    52                38
					      03                    45                60
					      04                     64               52
					      05                    50                50  
			</pre><br>
			Write a  C++ program that reads the data in the file created and displays the student’s number, marks scored, time taken by the student to complete the test along with the total marks scored by all the students,   Total time taken by all the students, average marks scored by the students per minute</div>
		<br><br>
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
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>