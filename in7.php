<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1><a href='index.php'>Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include './adCode.php'; ?>
		<h2> Price of books and CD/DVD</h2>
		<br>Lally Publication House publishes two types of learning material, viz., books and recorded CDs.  Both the books and CDs have ISBN number, Title, Author, Year of publication and Price. In addition to this, books contain the total number of pages and CDs or DVDs contain duration of the video,  in minutes. Provide a function to get and print details. Also provide a function:  calculate_Price which calculates  the  price of the books based on the total number of pages, Re 1 per page and the price of CDs/DVDs  based on the  duration of the CD/DVD, Rs 2 per minute of the duration. Design an OOP model and implement it using C++. (Hierarchical inheritance)<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			class learning_Material
			{
				protected:
				char isbn[15];
				char title[20];
				char author[20];
				int year;
				float price;
				public:
				void get();
				void print();
			 };

			//start
			void learning_Material::print(){
		        cout&lt;&lt;isbn&lt;&lt;endl&lt;&lt;title&lt;&lt;endl&lt;&lt;price;
		    }
			class book : public learning_Material{
			    int page;
			public:
			    void get(){
			        cin>>isbn>>title>>author>>year>>page;
			    }
			    void calc_Price(){
			        price=page;
			    }
			};
			class CD : public learning_Material{
			    int minu;
			public:
			    void get(){
			        cin>>isbn>>title>>author>>year>>minu;
			    }
			    void calc_Price(){
			        price=2*minu;
			    }
			};

			//end

			int main()
			{
				int ch;
				cin>>ch;
				if(ch==0)
				{
				book a;
				a.get();
				a.calc_Price();
				a.print();
				}
				else
				{
				CD e;
				e.get();
				e.calc_Price();
				e.print();
				}
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
<?php include './adCode.php'; ?>
</body>
</html>