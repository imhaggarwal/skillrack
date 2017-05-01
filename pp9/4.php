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
		<h2>Names that Do Begin with Vowel- descending order</h2>
		<div>Given a set of names, design an algorithm and write a C++ code to form a sorted list, in the descending order of names that do  begin with a vowel.</div>
		<br><br>
		<pre>
			#include &lt;iostream>
			#include &lt;string>
			#include&lt;vector>
			#include&lt;list>
			#include&lt;algorithm>
			using namespace std;

			//start
			main(){
			    int n, i=0;
			    vector&lt;string> name;
			    string t;
			    cin>>n;
			    for(; i&lt;n; i++){
			        cin>>t;
			        if(t[0]=='A'|| t[0]=='E' || t[0]=='I'|| t[0]=='O' || t[0]=='U')
			        name.push_back(t);
			    }
			    sort(name.begin(), name.end());
			    for(i=name.size()-1; i>=0; i--)
			    cout&lt;&lt;name[i]&lt;&lt;endl;
			}
			//end
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>