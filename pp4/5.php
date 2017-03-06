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
		<h2>String operations</h2>
		<div>Design a class stringpos to perform the operations like retrieving the letter  in the i-th position (i-th symbol) of  a string, rotation of a string,  oddfirst  of a string, evenfirst of a  string, spin of two strings,  oddevenswap of two strings, evenoddswap of two strings.  Here the terms : rotation, oddfirst, evenfirst, are the operations performed on one string. The terms : spin, oddevenswap, evenoddswap are the operations performed on two strings.  With the string S and integer n&lt;length of the string, rotation(S,n) is the string  S1 such that the the letter in the n-th position of S is the letter in the first position of S1, the letter in the (n-1)-th position of S is the second letter in S1, ... the letter in the k-th  position is the (n-k+1)-th letter in S1 and so on. In the operation, rotation(S,n), ‘n’ is called the rotation index.  rotation(abcd,4) = dcba and rotation(abcd,2) = bacd.  oddfirst of a string S is got by placing all the letters occurring in the odd positions of S sequentially  and then placing all the letters occurring in the even positions of S, sequentially.  That is, oddfirst(abcd) is acbd. Similarly,  evenfirst of a string S is got by placing all the letters occurring in the even positions of S sequentially and then placing all the letters occurring in the odd positions of S, sequentially. That is, evenfirst(abcd) is bdac. Spin of two strings S1 and S2 is got by placing the first letter of S2 between the first and the second letter  of S1, placing the second letter  of S2 between the second and the third letter of S1 and so on.  That is, k-th letter of S2 will be placed between the k-th letter and the (k+1)-th letter  of S1.  If there are no k-th , (k+1)-th letters  in S1 to place the k-th letter of S2, then, the k-th symbol is just placed at the end of the string so far formed. For example, Spin(abcd, efgh)= aebfcgdh, Spin(ab, efgh) = aebfgh, Spin(abcd,ef)= aebfcd. Spin(S1, S2) need not be the same as that of Spin(S2, S1).<br> <br> Oddevenswap(S1,S2) produces a string such that the  letters occurring in the odd positions  of S1 are  replaced by the letters occurring in the corresponding even positions of S2 and the letters occurring in the even position of S1 are left unchanged. In the above example, after a certain stage,  If there are no even-position letters in S2 to replace the odd-position letters in S1, those odd-position letters are left unreplaced.  For Example, oddevenswap(abcd, efgh)= fbhd, oddevenswap(ab,efgh)=fb, oddevenswap(abcd,fg)= gbcd.  Here also, oddevenswap(S1, S2) need not be same as that of oddevenswap(S2,S1). <br><br>Similarly, evenoddwap(S1,S2) produces a string such that the  letters occurring in the even  positions  of S1 are  replaced by the letters occurring in the corresponding odd  positions of S2 and the letters occurring in the odd  position of S1 are left unchanged.  For Example, evenoddswap(abcd, efgh)= aecg, evenoddswap(ab,efgh)=ae, evenoddswap(abcd,fg)= afcd  Here also, evenoddswap(S1, S2) need not be same as that of evenoddswap(S2,S1).<br><br>Overload shift left operator for rotation, prefix ++ for oddfirst, postfix ++ for evenfirst, '*' for spin,'+' operator for Oddevenswap, '-' operator for Evenoddswap, << and >> for I/O operations.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include&lt;string.h>
			using namespace std;
			class stringops
			{
			char str[50];
			public:
			    friend istream& operator>>(istream&,stringops&);
			    friend ostream& operator&lt;&lt;(ostream&,stringops&);
			    stringops operator>>(int);
			    stringops operator++();
			    stringops operator++(int);
			    stringops operator + (stringops&);
			    stringops operator - (stringops&);
			    stringops operator * (stringops&);
			};

			//start
			istream& operator>>(istream &in, stringops &str){
			    in>>str.str;
			}
			ostream& operator&lt;&lt;(ostream &out, stringops &str){
			    out&lt;&lt;str.str;
			}
			stringops stringops::operator>>(int n){
			    int i, l=strlen(str);
			    stringops nest;
			    for(i=0; n>0; i++)
			    nest.str[i]=str[--n];
			    for(;i&lt;l;i++)
			        nest.str[i]=str[i];
			    nest.str[i]='\0';
			    return nest;
			}
			stringops stringops::operator++(){
			    stringops nest;
			    int i, l=strlen(str), ln=0;
			    for(i=0; i&lt;l; i+=2)
			    nest.str[ln++]=str[i];
			    for(i=1; i&lt;l; i+=2)
			    nest.str[ln++]=str[i];
			    nest.str[ln]='\0';
			    return nest;
			}
			stringops stringops::operator++(int){
			    stringops nest;
			    int i, l=strlen(str), ln=0;
			    for(i=1; i&lt;l; i+=2)
			    nest.str[ln++]=str[i];
			    for(i=0; i&lt;l; i+=2)
			    nest.str[ln++]=str[i];
			    nest.str[ln]='\0';
			    return nest;
			}
			stringops stringops::operator +(stringops &s2){
			    stringops nest;
			    int i;
			    for(i=0; i&lt;strlen(str); i++)
			    if(i%2==0 && i&lt;(strlen(s2.str)-1))
			    nest.str[i]=s2.str[i+1];
			    else
			    nest.str[i]=str[i];
			    nest.str[i]='\0';
			    return nest;
			}
			stringops stringops::operator-(stringops &s2){
			    stringops nest;
			    int i;
			    for(i=0; i&lt;strlen(str); i++)
			    if(i%2!=0 && i&lt;=strlen(s2.str))
			    nest.str[i]=s2.str[i-1];
			    else
			    nest.str[i]=str[i];
			    nest.str[i]='\0';
			    return nest;
			}
			stringops stringops::operator*(stringops &s2){
			    stringops nest;
			    int i=0, l1=strlen(str), l2=strlen(s2.str), j=0, ln=0;
			    while(i&lt;l1 || j&lt;l2){
			        if(i!=l1)
			        nest.str[ln++]=str[i++];
			        if(j!=l2)
			        nest.str[ln++]=s2.str[j++];
			    }
			    nest.str[ln]='\0';
			    return nest;
			}
			//end

			
			int main()
			{
			    stringops s1,s2,s3;
			    int n;
			    cin>>s1>>s2;
			    cin>>n;
			    s3= s1>>n;
			    cout&lt;&lt;s3&lt;&lt;endl;
			    s3 = ++s2;
			    cout&lt;&lt;s3&lt;&lt;endl;
			    s3 = s1++;
			    cout&lt;&lt;s3&lt;&lt;endl;
			    s3 = s1*s2;
			    cout&lt;&lt;s3&lt;&lt;endl;
			    s3 = s1+s2;
			    cout&lt;&lt;s3&lt;&lt;endl;
			    s3 = s1-s2;
			    cout&lt;&lt;s3&lt;&lt;endl;
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>
