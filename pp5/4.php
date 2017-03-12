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
		<h2>Sort a Given Set of Points</h2>
		<div>Design a OOP model to represent a point in a two dimensional space and overload the operators >>,&lt;&lt;, > and ==. Given 'n' points, design an algorithm and write a C++ code to sort them in descending order. While sorting, a point is said to be greater than the other based on their x-coordinate value. If value of x-coordinate is same for both the points then make a decision based on their value of y-coordinate.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			 
			class point
			{
			    int x,y;
			    public:
			    friend istream& operator>>(istream&,point&);
			    friend ostream& operator&lt;&lt;(ostream&,point&);
			    bool operator == (point&);
			    bool operator > (point&);
			};
			void sort_Points(point*,int);

			//start
			istream& operator>>(istream &in, point &p){
			    in>>p.x>>p.y;
			}
			ostream& operator&lt;&lt;(ostream &out, point &p){
			    out&lt;&lt;p.x&lt;&lt;" "&lt;&lt;p.y&lt;&lt;endl;
			}
			bool point::operator > (point &p){
			    if(x>p.x)
			    return true;
			    else
			    return false;
			}
			bool point::operator==(point &p){
			    if(x==p.x){
			        if(y&lt;p.y)
			        return true;
			    }
			    return false;
			}
			void sort_Points(point *p, int n){
			    int i, j;
			    point temp;
			    for(i=0; i&lt;n-1; i++)
			    for(j=i+1; j&lt;n; j++)
			    if(p[j]>p[i] || p[i]==p[j]){
			        temp=p[i];
			        p[i]=p[j];
			        p[j]=temp;
			    }
			}
			//end

			main()
			{
			    point p[20];
			    int i,n;
			    cin>>n;
			    for(i=0;i&lt;n;i++)
			    cin>>p[i];
			    sort_Points(p,n);
			    for(i=0;i&lt;n;i++)
			    cout&lt;&lt;p[i];
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>