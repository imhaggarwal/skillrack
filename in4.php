<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Cracking Skillrack</h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include './adCode.php'; ?>
		<h2> Terms in an Arithmetic Progression</h2>
		<br>An Arithmetic Progression(AP) is described by the first term 'f' and the common difference’. The n-th term of an AP is described by a_n= f+(n-1)d. The progression 1,4,9 .. is an AP.  Given the f,d n, k, p , q, Develop a program in C++ using the class, to represent an arithmetic progression and provide methods to compute:<br>(i)  n-th term of the arithmetic progression<br>(ii)  r such that a_r=k. If there is no r such that a_r=k, the program should print zero.<br>(iii) Absolute Difference between a_p and a_q
<br>
		<pre>
			#include&lt;iostream>
			#include&lt;stdlib.h>
			using namespace std;
			class apr
			{
			    int first;
			    int diff;
			    public:
			    void get();

			    int compute_term(unsigned int n);
			    int find_r(int k);
			    int abs_diff(unsigned int p,unsigned int q);
			};

			//start
			#include&lt;math.h>
			void apr::get(){
				cin>>first>>diff;
			}

			int apr::compute_term(unsigned int n){
				return first+(n-1)*diff;
			}

			int apr::find_r(int k){
				float r=(float) (k-first)/diff+1;
				if(r>=first && r==round(r))
				return r;
				else
				return 0;
			}

			int apr::abs_diff(unsigned int p,unsigned int q){
				return abs((p-q)*diff);
			}
			//end
			int main()
			{
			    apr ap1;
			    unsigned int n,p,q;
			    int k;
			    ap1.get();
			    cin>>n;
			    cout&lt;&lt;ap1.compute_term(n)&lt;&lt;endl;
			    cin>>k;
			    cout&lt;&lt;ap1.find_r(k)&lt;&lt;endl;
			    cin>>p>>q;
			    cout&lt;&lt;ap1.abs_diff(p,q)&lt;&lt;endl;
			}

	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
<?php include './adCode.php'; ?>
</body>
</html>