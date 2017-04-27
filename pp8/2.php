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
		<h2> Special Pay Increase Problem</h2>
		<div>Employees in a company are up for a special pay increase. Given a file, with each line consisting of an employee's last name, first name, current salary, and percent pay increase, write a C++ program to compute the revised pay of each employee.<br>Miller Andrew     65875.87  5<br>Green Sheila     75892.56 6<br>Sethi Amit        74900.50 6.1.<br>For example, the pay increase for Andrew is 5%. </div>
		<br><br>
		<pre>
			#include &lt;iostream>
			#include &lt;string>
			#include &lt;iomanip>
			#include &lt;fstream>
			using namespace std;
			class employee
			{
			    string lastName;
			    string firstName;
			    double salary;
			    float inc;
			    double updated_Salary;
			    public:
			    //Read lastname firstname salary and inc
			    void get(ifstream&);
			    //Print lastname firstname updated salary
			    void print();
			    //update salary
			    void update_Sal();
			};
			
			//start
			#include&lt;stdlib.h>
			void employee::get(ifstream &f){
			    char s[20];
			    f>>s;
			    lastName=s;
			    f>>s;
			    firstName=s;
			    f>>salary;
			    f>>s;
			    inc=atof(s);
			}
			void employee::print(){
			    cout&lt;&lt;lastName&lt;&lt;endl&lt;&lt;firstName&lt;&lt;endl&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;salary&lt;&lt;endl;
			}
			void employee::update_Sal(){
			    salary+=salary*inc/100;
			}
			main(){
			    ifstream f;
			    employee e[10];
			    int i=0;
			    char n[10];
			    cin>>n;
			    f.open(n);
			    while(f)
			    e[i++].get(f);
			    for(int j=0; j&lt;i-1; j++){
			        e[j].update_Sal();
			        e[j].print();
			    }
			}
			//end
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>