<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1><a href='../index.php'>Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2>Boarding Pass</h2>
		<div>Generate boarding pass for the passengers of a ship which starts from Chennai  to Andaman. The boarding pass must be generated automatically with a pass number that begins with "CA" and followed by a number that is automatically incremented from value 'x', details like passenger name, age, mobile number, address, date of journey and fare. There is a seasonal discount based on the age of the passengers. Write a non member function called discount which calculates the discount in the fare for the passenger with the following discounts. For the  age group `between 12 and 58, both inclusive’  there is 20% discount in the fare,  for the age group ‘above 58’, there is 40% discount and for the children (age under 12), 50% discount. Write a C++ program to generate pass for 'n' users.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			class pass{
			    public:
			    int age, x;
			    float fare;
			    long mobile;
			    string name, add, date;
			};
			void discount(int age, float &fare){
			    if(age>=12 && age&lt;=58)
			    fare-=fare/5;
			    else if(age>58)
			    fare-=fare*2/5;
			    else
			    fare/=2;
			}
			main(){
			    pass obj;
			    cin>>obj.name>>obj.x>>obj.age>>obj.add>>obj.date>>obj.mobile>>obj.fare;
			    discount(obj.age,obj.fare);
			    cout&lt;&lt;obj.name&lt;&lt;"\nCA"&lt;&lt;obj.x&lt;&lt;endl&lt;&lt;obj.age&lt;&lt;endl&lt;&lt;obj.date&lt;&lt;endl&lt;&lt;obj.mobile&lt;&lt;endl&lt;&lt;obj.fare;
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>