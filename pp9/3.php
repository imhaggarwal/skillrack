<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8" />
</head>
<body>
	<h1>Cracking Skillrack</h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2>Jobs with and without Priority</h2>
		<div>Jobs are submitted to an operating system. Operating system does something called job scheduling when a number of jobs are submitted to an operating system at the same time. Some of the jobs have only job id and time required to complete the job. Whereas some other jobs are having priority in addition to job id and time required. Given a set of jobs without priority print the id of the job that requires minimum time to execute and given a set of jobs with priority, print the id and priority of the job which requires minimum time to execute. Design a OOP model to solve the problem.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include&lt;iomanip>
			#include&lt;string.h>
			using namespace std;
			class job
			{
			    int id;
			    float time;
			    public:
			    void get();
			    //function to return time
			    float gettime();
			    int getid();
			};
			class job_Sch
			{
			int num;
			job j[20];
			public:
			//function to print job with maximum time
			void find_Max();
			void get();
			};

			//start
			struct priority{
			    int prior;
			}p[20];
			void job::get(){
			    cin>>id>>time;
			}
			float job::gettime(){
			    return time;
			}
			int job::getid(){
			    return id;
			}
			void job_Sch::get(){
			    int i=0;
			    cin>>num;
			    for(; i&lt;num; i++)
			    j[i].get();
			}
			void job_Sch::find_Max(){
			    int m=0, i=1;
			    for(; i&lt;num; i++)
			    if(j[m].gettime()&lt;j[i].gettime())
			    m=i;
			    cout&lt;&lt;j[m].getid()&lt;&lt;endl;
			}
			main(){
			    job_Sch a;
			    job b[20];
			    int i=0, n, m=0;
			    a.get();
			    cin>>n;
			    for(; i&lt;n; i++){
			        b[i].get();
			        cin>>p[i].prior;
			    }
			    a.find_Max();
			    for(i=1; i&lt;n; i++)
			    if(b[i].gettime()>b[m].gettime())
			    m=i;
			    cout&lt;&lt;b[m].getid()&lt;&lt;endl&lt;&lt;p[m].prior&lt;&lt;endl;
			}
			//end
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>