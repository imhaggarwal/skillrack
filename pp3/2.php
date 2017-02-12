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
		<h2>Automatic vending machine</h2>
		<div>An automatic vending machine has many snack items arranged in its shelves. Each item has an item code and a cost. A user can enter the amount and key-in the item code. If the itemcode matches an entry in the item list and amount entered by user is less than cost of the item, then the item will be dispensed. Develop an algorithm and write a C++ code to print name of the item if the amount entered is greater than the cost of the item and item code is valid. If the amount is less than the cost of the item then throw a double exception, if the item code entered is wrong then throw a integer exception and when the item entered is not in stock throw a string exception. Print appropriate messages such as “Insufficient amount”, “Wrong item code” or “Less stock”.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			struct item{
			    int code, stock, amt;
			};
			main(){
			    int n, i, code, amt;
			    struct item obj[10];
			    cin>>n;
			    for(i=0; i&lt;n; i++)
			        cin>>obj[i].code>>obj[i].amt>>obj[i].stock;
			    cin>>code>>amt;
			    for(i=0; i&lt;n; i++){
			        if(obj[i].code==code)
			            if(obj[i].amt&lt;=amt){
			                cout&lt;&lt;code;
			                return 0;
			            }
			            else{
			                cout&lt;&lt;"Insufficient amount";
			                return 0;
			            }
			    }
			    cout&lt;&lt;"Wrong item code";
			}

	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>