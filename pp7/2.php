<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8" />
</head>
<body>
	<h1><a href='../index.php'>Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2> Vector of Characters</h2>
		<div>Design a class charVector that has a character vector as datamember. Provide member functions in the class to createVector, duplicateVector, duplicateRevVector and print. Functions shall be defined as follows:<br>initializeVector – read a string and create a vector of characters<br>duplicateVector – Add the content of the vector once at the end. For example if the content of charVector is “bat” then after the function is called the content must “batbat”<br>duplicateRevVector – Add the content of the vector in reverse at the end. For example if the content of charVector is “bat” then after the function is called the content must “battab”<br>print – Print content of vector, use iterators for traversal<br>Use the vector class defined in STL for the implementation. Use [] operator in functions duplicateVector, duplicateRevVector and use iterator in print and initializeVector functions.</div>
		<br><br>
		<pre>
			#include &lt;iostream>
			#include &lt;vector>
			#include &lt;string>
			using namespace std;
			class charVector
			{
			    vector&lt;char> cv;
			    public:
			    //Function to initialize vector by characters in a string
			    void initializeVector(string);
			    //Function to duplicate a vector at its back
			    void dupVector();
			    //Function to add reverse of a vector at its back
			    void dupRevVector();
			    void print();
			};
			
			//start
			void charVector::initializeVector(string s){
			    int i=0, l=s.length();
			    for(;i&lt;l; i++)
			    cv.push_back(s[i]);
			}
			void charVector::dupVector(){
			    int i=0, l=cv.size();
			    for(;i&lt;l; i++)
			    cv.push_back(cv[i]);
			}
			void charVector::dupRevVector(){
			    int i, l=cv.size();
			    for(i=l-1;i>=0; i--)
			    cv.push_back(cv[i]);
			}
			void charVector::print(){
			    for(vector&lt;char>::iterator i=cv.begin(); i!=cv.end(); i++)
			    cout&lt;&lt;*i;
			}
			//end

			int main()
			{
			    charVector ch1,ch2;
			    string s1,s2;
			    cin>>s1>>s2;
			    ch1.initializeVector(s1);
			    ch2.initializeVector(s2);  
			    ch1.dupVector();
			    ch2.dupRevVector();
			    ch1.print();
			    cout&lt;&lt;endl;
			    ch2.print();
			    cout&lt;&lt;endl;
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>