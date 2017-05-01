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
		<h2>3-D points- multiply and increment</h2>
		<div>Given a point in three-dimensional space with x-coordinate, y-coordinate, z-coordinates,  Provide a function increment with one, two and three parameters to transform  the values of all the three coordinates. When the function with one parameter is called increment all the three , by same value .  When the function with two arguments is called multiply each coordinates by the sum  of the two parameters. when the function with three arguments is called, increment x-coordinate  by the value of first parameter, y-coordinate by the value of the second parameter and z-coordinate  by the value of the third parameter.</div>
		<br><br>
		<pre>
			//start
			#include&lt;iostream>
			using namespace std;
			class dim{
			    int x, y, z;
			    public:
			    void get(){
			        cin>>x>>y>>z;
			    }
			    void print(){
			        cout&lt;&lt;x&lt;&lt;endl&lt;&lt;y&lt;&lt;endl&lt;&lt;z&lt;&lt;endl;
			    }
			    void increment(int a, int b=-1, int c=-1){
			        if(b&lt;0){
			            x+=a;
			            y+=a;
			            z+=a;
			        }
			        else if(c&lt;0){
			            x*=a+b;
			            y*=a+b;
			            z*=a+b;
			        }
			        else{
			            x+=a;
			            y+=b;
			            z+=c;
			        }
			    }
			};
			//end

			main()
			{
			    dim d1;
			    d1.get();
			    int inc;
			    cin>>inc;
			    int p1,p2;
			    cin>>p1>>p2;
			    int ix,iy,iz;
			    cin>>ix>>iy>>iz;
			    d1.increment(inc);
			    d1.print();
			    d1.increment(p1,p2);
			    d1.print();
			    d1.increment(ix,iy,iz);
			    d1.print();
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>