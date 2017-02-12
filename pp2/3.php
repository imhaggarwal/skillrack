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
		<h2>Identify machines in same local network</h2>
		<div></div>
		<br><br>
		<pre>
			#include&lt;stdio.h>
			#include&lt;string.h>
			main(){
			    char ip[20][20], a[20][5], b[20][5], n[20][20];
			    int t, i, j, k;
			    scanf("%d", &t);
			    for(i=0; i< t; i++)
			        scanf("%s\n%s", ip[i], n[i]);
			    for(i=0; i< t; i++){
			            j=0;
			        while(ip[i][j]!='.'){
				        a[i][j]=ip[i][j];
				        j++;
			        }
			        a[i][j]='\0';
			        k=0;
			        j++;
			        while(ip[i][j]!='.')
			        b[i][k++]=ip[i][j++];
			        b[i][k]='\0';

			    }
			    for(i=0; i< t-1; i++)
			    for(j=i+1; j< t; j++)
			        if(!strcmp(a[i],a[j]))
			        if(!strcmp(b[i],b[j]))
			        printf("Machines %s and %s are on the same network", n[i], n[j]);
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>