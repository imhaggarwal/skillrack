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
		<h2>S Polygon in a Two Dimensional Space </h2>
		<div>Design a class polygon to represent a polygon in a two dimensional space. Provide member functions to get the details of the polygon and compute area.Here the vertices are numbered from 1 to n either clockwise or anticlockwise. The sign of the value changes when numbering is done in the other way. So absolute value is considered.<br>Derive two classes: triangle and quadrilateral, from the class polygon. Overload the operator [] to get the 'i-th' point of the polygon if 'i' is less than or equal to the number of vertices 'n' and raise an user defined exception outofrange when 'i' is greater than 'n'. Catch the exception in main and print 'outofrange'.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			#include&lt;math.h>
			#include&lt;iomanip>
			#include&lt;exception>
			//Declaration of classes
			struct point
			{
			double x;
			double y;
			point();
			void get();
			friend ostream& operator&lt;&lt;(ostream&,point);
			};
			class outofrange:public exception
			{
			public:
			void what();
			 
			};
			class polygon
			{
			protected:
			int num_Of_Ver;
			point* vertices;
			public:
			//initialize num_Of_Ver to 'n'
			//allocate memory to store points of 'n' vertices
			polygon(int n);
			~polygon();
			//get function cannot be defined here instead define in the derived class
			void get();
			//we return reference of the point so that assignment can be made
			point& operator[](int idx);
			double area();
			};
			class triangle : public polygon
			{
			public:
			triangle():polygon(3){}
			};
			class quadrilateral : public polygon
			{
			public:
			    quadrilateral():polygon(4){}
			};

			//start
			point::point(){}
			ostream& operator&lt;&lt;(ostream& out, point p){
			    cout&lt;&lt;p.x&lt;&lt;" "&lt;&lt;p.y;
			}
			polygon::polygon(int n){
			    num_Of_Ver=n;
			    vertices=new point[n];
			}
			void polygon::get(){
			    for(int i=0; i&lt;num_Of_Ver; i++)
			    cin>>vertices[i].x>>vertices[i].y;
			}
			double polygon::area(){
			    double a=0;
			    for(int i=0; i&lt;num_Of_Ver-1; i++)
			    a+=vertices[i].x*vertices[i+1].y-vertices[i].y*vertices[i+1].x;
			    a+=vertices[num_Of_Ver-1].x*vertices[0].y-vertices[num_Of_Ver-1].y*vertices[0].x;
			    return fabs(a/2);
			}
			point& polygon::operator[](int idx){
			    outofrange o;
			    if(idx&lt;num_Of_Ver)
			    return vertices[idx];
			    else
			    throw o;
			}
			void outofrange::what(){
			    cout&lt;&lt;"Out of range";
			}
			polygon::~polygon(){}
			//end

			
			int main()
			{
			    triangle t;
			    int index;
			     
			    t.get();
			    cout&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;t.area()&lt;&lt;endl;
			    quadrilateral r;
			    r.get();
			    cout&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;r.area()&lt;&lt;endl;
			    cin>>index;
			    try
			    {
			    cout&lt;&lt;r[index];
			    }catch(outofrange o)
			    {
			    o.what();
			    }
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>