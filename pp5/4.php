<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1><a href="../index.php">Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2> Customer discount </h2>
		<div>Design an OOP model and implement it using C++ program. Refer the declaration of classes and application program to do the design. The program must get the details, compute bill amount and print details both for ordinary and preferred customers.<br>For example, if a preferred customer makes three purchases of amounts 3000, 7000, 8000 then the amount to be paid for each bill is 3000, 6860 and 7760 and the total amount to be paid is 17620</div>
		<br><br>
		<pre>
			//start
			#include&lt;iostream>
			using namespace std;
			class customer{
			    protected:
			    char nam[20], add[20];
			    long mob;
			    float amt[10];
			    int id, bill;
			    public:
			    void get(){
			        cin>>nam>>mob>>add>>id>>bill;
			        for(int i=0; i&lt;bill; i++)
			        cin>>amt[i];
			    }
			    float calc_Total(){
			        for(int i=1; i&lt;bill; i++)
			        amt[0]+=amt[i];
			        return amt[0];
			    }
			};
			class preferred_Customer : public customer{
			    public:
			    float calc_Total(){
			        float temp;
			        amt[bill]=0;
			        for(int i=0; i&lt;bill; i++){
			            temp=amt[bill]+amt[i];
			            if(temp>=20000)
			            amt[bill]+=amt[i]*0.96;
			            else if(temp>=15000)
			            amt[bill]+=amt[i]*0.97;
			            else if(temp>=10000)
			            amt[bill]+=amt[i]*0.98;
			            else if(temp>=5000)
			            amt[bill]+=amt[i]*0.99;
			            else 
			            amt[bill]+=amt[i];
			        }
			        return amt[bill];
			    }
			};
			//end

			int main()
			{
			    int ch;
			    //get choice of customer
			    cin>>ch;
			    if(ch==0)
			    {
			    customer c1;
			    //get the details of customer
			    c1.get();
			    //calculate total amount to be paid
			    //develop a function in customer class that will calculate
			    // the total amount and return it
			    cout&lt;&lt;c1.calc_Total();
			    }
			    else
			    {
			    //preferred customer
			    preferred_Customer pc;
			    //get details
			    pc.get();
			    //function should calculate and return total amount
			    cout&lt;&lt;pc.calc_Total();
			    }
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>