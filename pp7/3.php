<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8" />
</head>
<body>
	<h1>Cracking Skillrack</h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2>Symmetric Matrix</h2>
		<div>Given a square matrix check if it is symmetric or not. Represent a matrix as a vector of vectors. Use vector in STL to represent a matrix.<br>Hint: To create a matrix with 'r' rows and 'c' columns<br>vector&lt;vector&lt;int> > m1(r,vector&lt;int>(c,0));</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include&lt;vector>
			using namespace std;
			main(){
			    int n, i=0, j, f=0;
			    cin>>n;
			    vector&lt;vector&lt;int> >m(n,vector&lt;int>(n));
			    for(;i&lt;n; i++)
			    for(j=0; j&lt;n; j++)
			    cin>>m[i][j];
			    for(i=0; i&lt;n; i++)
			    for(j=0; j&lt;n; j++)
			    if(m[i][j]!=m[j][i]){
			        f++;
			        break;
			    }
			    if(f)
			    cout&lt;&lt;"Not symmetric";
			    else
			    cout&lt;&lt;"Symmetric";
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>