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
		<h2>Generic Right Shift</h2>
		<div>The grade sheet of a student to be produced in a college. As a programmer, write a program to calculate the grade of a student. Get minimum of 5 subject marks from the user. While getting the values from the keyboard, raise the following user defined exceptions in appropriate place</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include &lt;exception>
			using namespace std;
			class negException:public exception
			{
			    public:
			    void error_Msg()const;
			};
			class moreException:public exception
			{
			    public:
			    void error_Msg()const;
			};
			class student
			{
			    int rollno;
			    char name[30];
			    float marks[5];
			    float avg;
			    char grade;
			    public:
			    void get();
			    void print();
			    void calc_Avg();
			    void find_Grade();
			};
			//start
			#include&lt;cstdlib>
			void negException::error_Msg() const{
			    cout&lt;&lt;"Negative Marks Not Allowed";
			}
			void moreException::error_Msg() const{
			    cout&lt;&lt;"Marks Greater than 100 Not Allowed";
			}
			void student::get(){
			    cin>>rollno>>name;
			    for(int i=0; i&lt;5; i++)
			    cin>>marks[i];
			    avg=0;
			}
			void student::calc_Avg(){
			    for(int i=0; i&lt;5; i++){
			        try{
			            if(marks[i]&lt;0)
			            throw negException();
			            else if(marks[i]>100)
			            throw moreException();
			            else
			            avg+=marks[i];
			        }
			        catch(negException &e){
			            e.error_Msg();
			            exit(0);
			        }
			        catch(moreException &e){
			            e.error_Msg();
			            exit(0);
			        }
			    }
			    avg/=5;
			}
			void student::find_Grade(){
			    if(avg>=100 & avg&lt;=90)
			    grade='S';
			    else if(avg&lt;90 && avg>=80)
			    grade='A';
			    else if(avg&lt;80 && avg>=70)
			    grade='B';
			    else if(avg&lt;70 && avg>=60)
			    grade='C';
			    else if(avg&lt;60 && avg>=50)
			    grade='D';
			    else if(avg&lt;50 && avg>=40)
			    grade='E';
			    else
			    grade='F';
			}
			void student::print(){
			    cout&lt;&lt;rollno&lt;&lt;endl&lt;&lt;name&lt;&lt;endl&lt;&lt;grade;
			}
			main(){
			    student s;
			    s.get();
			    s.calc_Avg();
			    s.find_Grade();
			    s.print();
			}
			//end
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>