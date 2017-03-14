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
		<h2>College Pass</h2>
		<div>A student may apply for an arts college or an engineering college after his school. Admission to arts college or engineering college, is based on the marks obtained in the six subjects : English, Second language, Maths, Physics, Chemistry and Computer Science.  Both the applications have the following details : application number, name, age, marks in all six subjects and cut-off for the eligibility. For Arts college, cut-off is the   average of  marks in all the subjects and whereas for engineering colleges cut-off is the average of marks in maths, physics, chemistry plus the marks scored in the entrance exam.  Given all the required details, Design an OOP model to compute the cut-off marks and implement it using C++.</div>
		<br><br>
		<pre>
			//start
			#include&lt;iostream>
			#include&lt;iomanip>
			using namespace std;
			class arts_Appln{
			    char name[20];
			    int age;
			    float s;
			    public:
			    void get(){
			        float temp;
			        cin>>age>>name>>age;
			        s=0;
			        for(int i=0; i&lt;6; i++){
			            cin>>temp;
			            s+=temp;
			        }
			    }
			    void calc_Cutoff(){
			        s/=6;
			    }
			    void print(){
			        cout&lt;&lt;name&lt;&lt;endl&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;s;
			    }
			};
			class engg_Appln{
			    char name[20];
			    int age;
			    float s, e, l, ent, cs;
			    public:
			    void get(){
			        float temp;
			        cin>>age>>name>>age>>e>>l;
			        s=0;
			        for(int i=0; i&lt;3; i++){
			            cin>>temp;
			            s+=temp;
			        }
			        cin>>cs>>ent;
			    }
			    void calc_Cutoff(){
			        s=s/3+ent;
			    }
			    void print(){
			        cout&lt;&lt;name&lt;&lt;endl&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;s;
			    }
			};
			//end

				int main()
			{
			    int ch;
			    cin>>ch;
			    if(ch==0)
			    {
			    arts_Appln a;
			    a.get();
			    a.calc_Cutoff();
			    a.print();
			    }
			    else
			    {
			    engg_Appln e;
			    e.get();
			    e.calc_Cutoff();
			    e.print();
			    }
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>