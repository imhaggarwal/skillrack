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
		<h2> List of points</h2><br>
		Design a class point with datamembers name of the point(string), value in x-axis and value in y-axis. Provide functions to get the details of a point, print the details of a point and a function to compute distance between the point and a given point. Design a class mobileSpace, with a list of points representing the latitude and longitude of the mobile towers and a point to represent a mobile phone, provide member functions to get details and determine the tower that shall be connected to the phone. Use STL for implementation.<br><br>
		<pre>
			#include &lt;iostream>
			#include &lt;vector>
			#include&lt;math.h>
			#include&lt;list>
			using namespace std;
			class point
			{
				char name[30];
				float x;
				float y;
				public:
				void get();
				void print();
				float dist(point p);
			};
			class mobile
			{
				int num_Tower_Pts;
				list&lt;point> tower_Pts;
				point mobile_Pt;
				public:
				void get();
				point find_Min();
			};

			//start
			void point::get(){
			    cin>>name>>x>>y;
			}
			void point::print(){
			    cout&lt;&lt;name;
			}
			float point::dist(point p){
			    return pow(p.x-x,2)+pow(p.y-y,2);
			}
			void mobile::get(){
			    point t;
			    cin>>num_Tower_Pts;
			    for(int i=0; i&lt;num_Tower_Pts; i++){
			        t.get();
			        tower_Pts.push_back(t);
			    }
			    mobile_Pt.get();
			}
			point mobile::find_Min(){
			    list&lt;point>::iterator i=tower_Pts.begin();
			    int d=(*i).dist(mobile_Pt), n=1, p=0;
			    i++;
			    for(;i!=tower_Pts.end(); i++, n++)
			    if(d>(*i).dist(mobile_Pt)){
			        d=(*i).dist(mobile_Pt);
			        p=n;
			    }
			    i=tower_Pts.begin();
			    advance(i,p);
			    return *i;
			}
			//end

			int main()
			{
				mobile m;
				m.get();
				(m.find_Min()).print();
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
<?php include './adCode.php'; ?>
</body>
</html>
