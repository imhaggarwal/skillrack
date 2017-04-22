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
		<h2>List of even Points</h2>
		<div>Design a class point with datamembers: name of the point(string), value of the x-coordinate and the value of  y-coordinate. Here, value of the x-coordinate and the value of the y-coordinate should be an even integer. Provide functions to get the details of a point, print the details of a point and a function to compute the  squared distance between the point and a given point(passed to the function as an argument). Design a class mobileSpace, with a list of points(both the coordinates must be even integers) that represent the position of the mobile towers and a point that  represents the  position of mobile phone. With the position of the mobile towers and mobile phone given as input,   provide member functions to get the details and determine the tower  with which the mobile phone can be connected based on the `longest squared distance between the phone and the tower’ Use STL for implementation.</div>
		<br><br>
		<pre>
			#include &lt;iostream>
			#include &lt;vector>
			#include&lt;math.h>
			#include&lt;stdlib.h>
			#include&lt;list>
			using namespace std;
			class point
			{
			    char name[30];
			    int x;
			    int y;
			    public:
			    void get();
			    void print();
			    int dist(point p);
			};
			class mobile
			{
			    int num_Tower_Pts;
			    list&lt;point> tower_Pts;
			    point mobile_Pt;
			    public:
			    void get();
			    point find_Max();
			};

			//start
			void point::get(){
    cin>>name>>x>>y;
}
void point::print(){
    cout&lt;&lt;name&lt;&lt;endl;
}
int point::dist(point p){
    if(x%2!=0 || y%2!=0 || p.x%2!=0 || p.y%2!=0){
        cout&lt;&lt;"Invalid input";
        exit(0);
    }
    else
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
point mobile::find_Max(){
    list&lt;point>::iterator i=tower_Pts.begin();
    int d=(*i).dist(mobile_Pt), n=1, p=0;
    i++;
    for(;i!=tower_Pts.end(); i++, n++)
    if(d&lt;(*i).dist(mobile_Pt)){
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
			    (m.find_Max()).print();
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>