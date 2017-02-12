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
		<h2>Salary of Employees</h2>
		<div>A company stores the following details of employees such as name, employee id, basic pay, % of DA and HRA. Given details of 'n' employees of an organization. Write a C code to<br>
                          i. get the details of each employee.<br>
                          ii. print their employee id and<br>
                          iii. Total salary.<br>
Total salary = Basic Pay + % of DA * basic pay + HRA.</div>
		<br><br>
		<pre>
			#include&lt;stdio.h>
			struct emp{
			    char nam[20];
			    int id, pay, da, hra, tot;
			};
			main(){
			    struct emp obj[10];
			    int n, i;
			    scanf("%d", &n);
			    for(i=0; i< n; i++){
			        scanf("%s %d %d %d %d", obj[i].nam, &obj[i].id, &obj[i].pay, &obj[i].da, &obj[i].hra);
			        obj[i].tot=obj[i].pay*(1+obj[i].da/100.0)+obj[i].hra;
			        printf("");
			    }
			    for(i=0; i< n; i++)
			    printf("%d\n%d\n", obj[i].id, obj[i].tot);
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>