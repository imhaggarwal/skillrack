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
		<h2>Generic Right Shift</h2>
		<div>Given a set of 'n' elements and 'r', write a generic function to right shift the set of elements by 'r' position. If the elements are to moved to position greater than 'n' then wrap the shift process to the beginning of the collection. For example, if the set of five elements are 1,7,8,9,12 and value of 'r' is 3 then the set of elements would be 8, 9, 12, 1, 7.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			#include&lt;string>
			template&lt;class T>
			//shift the set of 'n' elements ele by 'r' positions
			void right_Shift(T *ele,int n,int r);

			//start
			template&lt;class T> void right_Shift(T *ele, int n, int r){
			    T *ne= new T[20];
			    int i=0;
			    for(; i&lt;n; i++)
			    ne[i]=ele[i];
			    r=n-r;
			    for(i=0; i&lt;n; i++)
			    ele[i]=ne[(r+i)%n];
			}
			//end

			
			main()
			{
			    int n, a[20],r;
			    int ch;
			    cin>>ch;
			    string s[10];
			    if(ch==0)
			    {
			    cin>>n;
			    for(int i=0;i&lt;n;i++)
			    cin>>a[i];
			    cin>>r;
			    right_Shift(a,n,r);
			    for(int i=0;i&lt;n;i++)
			    cout&lt;&lt;a[i]&lt;&lt;endl;
			    }
			    else
			    {  
			    cin>>n;
			    for(int i=0;i&lt;n;i++)
			    cin>>s[i];
			    cin>>r;
			    right_Shift(s,n,r);
			    for(int i=0;i&lt;n;i++)
			    cout&lt;&lt;s[i]&lt;&lt;endl;
			    }
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>