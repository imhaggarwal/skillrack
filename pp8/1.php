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
		<h2>Code Detection Problem</h2>
		<div>For security reasons, messages are transmitted as a secret code over a transmission channel. It is usually sent as a sequence of bits, that is, 0s and 1s. Due to noise in the transmission channel, the transmitted message may become corrupted. That is, the message received at the destination may not be the same as the message transmitted. There are several techniques to check the validity of the transmitted message at the destination. One such technique is to transmit the same message twice. At the destination, both copies of the message are compared. Given a file "data.txt" with the messages that is transmitted, write a C++ program to check whether the message received at the destination is error-free. For simplicity, assume that the secret code representing the message is a sequence of digits(0 to 9) and the maximum length of the message is 250 digits. Each original message is followed by a copy message and first number in both the messages indcates the length of the message. Each character in the message is separated by a space. For example, 7 9 2 7 8 3 5 6 7 9 2 7 8 3 5 6 means that the original message is of length 7 and it is 9 2 7 8 3 5 6 and copy message is also of length 7 and it is 9 2 7 8 3 5 6. If orginal and copy message is same then print Message transmitted is ok. Print Message transmitted is not OK when the length of the original or copy message is greater than 250 or when the original message is not same as copy message.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include&lt;fstream>
			#include&lt;string>
			#include&lt;stdlib.h>
			using namespace std;
			main(){
			    ifstream f;
			    char s[10], c[3], l[5], l0[5];
			    int l1,l2;
			    string a, b;
			    cin>>s;
			    f.open(s);
			    while(f){
			        a="";
			        b="";
			        f>>l;
			        l1=atoi(l);
			        l2=l1;
			        if(l1==250){
			            cout&lt;&lt;"Message transmitted is not"&lt;&lt;endl;
			            continue;
			        }
			        while(f && l1--){
			            f>>c;
			            a.append(c);
			        }
			        f>>l0;
			        l1=atoi(l0);
			        if(l1==250 || l1!=l2){
			            cout&lt;&lt;"Message transmitted is not"&lt;&lt;endl;
			            continue;
			        }
			        while(f && l1--){
			            f>>c;
			            b.append(c);
			        }  
			        if(a!=""){
			            if(a==b)
			            cout&lt;&lt;"Message transmitted ok"&lt;&lt;endl;
			            else
			            cout&lt;&lt;"Message transmitted is not ok"&lt;&lt;endl;
			        }
			    }
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>