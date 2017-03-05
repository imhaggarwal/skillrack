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
		<h2> Electronics Store Problem</h2>
		<br>XYZ  electronics store has three different products in their store such as Television, Refrigerator and Washing machine. Create a C++ class to process the basic details about the electronic products in the store, such as the name of the product, product code, product price and number of products in stock. Create another C++ class to support the store keeper to maintain the stock details in the store. Write a non member function to help the store keeper to find the products whose stock is less than 10.<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			class store_keeper;
			class item
			{
				char prod_name[30];
				char prod_code[10];
				float prod_price;
				int stock_In_Hand;
				public:
				void get();
				void print()const;
				friend class store_keeper;
			};
			class store
			{
				int num_Of_Items;
				item items[20];
				public:
				void get_details();
				void print_details()const;
				friend class store_keeper;
			};
			class store_keeper
			{
				char name[30];
				char id[10];	
				public:
				void get();
				void print();
				//Function used to print name and id of products
				// with stock_In_Hand less than 10
				void stock_mgmt(store &);
			};

			//start
			void item::get(){
			    cin>>prod_name>>prod_code>>prod_price>>stock_In_Hand;
			}
			void store::get_details(){
			    cin>>num_Of_Items;
			    for(int i=0; i&lt;num_Of_Items; i++)
			        items[i].get();
			}
			void store_keeper::stock_mgmt(store &s){
			    for(int i=0; i&lt;s.num_Of_Items; i++)
			    if(s.items[i].stock_In_Hand&lt;10)
			    cout&lt;&lt;s.items[i].prod_name&lt;&lt;endl&lt;&lt;s.items[i].prod_code&lt;&lt;endl&lt;&lt;s.items[i].prod_price&lt;&lt;endl&lt;&lt;s.items[i].stock_In_Hand&lt;&lt;endl;
			}
			//end

			main(){
				store s;
				store_keeper sk;
				s.get_details();	
				sk.stock_mgmt(s);
			}

	</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
<?php include './adCode.php'; ?>
</body>
</html>