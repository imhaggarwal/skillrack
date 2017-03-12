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
		<h2>Vector operations</h2>
		<div>Design a class vector to perform the operations like retrieving value for i-th component from a vector, add two vectors and subtract a vector from another if they are of same dimension. A vector of n-dimension is represented by an n-tuple (a sequence of n numbers). Addition of two vectors of same dimension,  is got by adding   the corresponding components of the two vectors. Similarly, subtraction of the two vectors, v1-v2,  is got by the subtracting the respective components of v2 from the corresponding components of v1. Overload subscript ([]) operator for retrieving the i-th element from a vector, '+' and '-' for addition and subtraction, &lt;&lt; and >> for I/O operations. If the vectors are of different dimension, throw an exception stating "Vectors of different dimension cannot be added".</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			class vector
			{
			    int num;
			    int ele[20];
			    public:
			    friend istream& operator>>(istream&,vector&);
			    friend ostream& operator&lt;&lt;(ostream&,vector&);
			    vector operator+(vector&);
			    vector operator-(vector&);
			    int operator[](int);
			};

			//start
			ostream& operator&lt;&lt;(ostream& out,vector& v){
			    for(int i=0; i&lt;v.num; i++)
			    out&lt;&lt;v.ele[i]&lt;&lt;endl;
			}
			istream& operator >>(istream& in, vector &v){
			    in>>v.num;
			    for(int i=0; i&lt;v.num; i++)
			    in>>v.ele[i];
			}
			int vector::operator[](int i){
			    return ele[i-1];
			}
			vector vector::operator +(vector &v){
			    vector newv;
			    newv.num=num;
			    for(int  i=0; i&lt;num; i++)
			    newv.ele[i]=ele[i]+v.ele[i];
			    return newv;
			}
			vector vector::operator -(vector &v){
			    vector newv;
			    newv.num=num;
			    for(int  i=0; i&lt;num; i++)
			    newv.ele[i]=ele[i]-v.ele[i];
			    return newv;
			}
			//end

			int main()
			{
			    vector v1,v2,v3;
			    int i,j;
			    cin>>v1;
			    cin>>v2;
			    cin>>i;
			    cin>>j;
			    cout&lt;&lt;v1[i]&lt;&lt;endl;
			    cout&lt;&lt;v2[j]&lt;&lt;endl;
			    v3 = v1+v2;
			    cout&lt;&lt;v3;
			    v3 = v1 - v2;
			    cout&lt;&lt;v3;
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>
