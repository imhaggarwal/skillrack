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
		<h2>Verification of 'L' shaped arrangement of coins on game board</h2>
		<br><br>
		<pre>
			#include&lt;stdio.h>
			main(){
			    char n[10][10];
			    int i, r, c, k, co=0, j, a, b, cor;
			    scanf("%d%d", &r, &c);
			    for(i=0; i< r; i++)
			        for(j=0; j< c; j++)
			        scanf("%c\n", &n[i][j]);
			    for(i=0; i< r-1; i++){
			        for(j=0; j< c; j++){
			                co=0;
			                a=n[i][j];
			                b=i;
			            while(a==n[b+1][j] && b< r-1){
			                co++;
			                b++;
			            }
			            if(co){
			                    cor=0;
			                for(k=j+1; k< c; k++)
			                if(n[b][k]==a)
			                    cor++;
			                else
			                    break;
			                if(cor>0){
			                    printf("Yes");
			                    return 0;
			                }
			            }
			        }
			    }
			    printf("No");
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
</body>
</html>