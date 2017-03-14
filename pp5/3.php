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
		<h2> Cost of Pizza</h2>
		<div>Pizza is a delicious circular food item that is a favorite for many people. Given the radius of the pizza, ingredients required for the preparation of the pizza, per square cm (cm2) area of the pizza and cost of its ingredients per 100 grams, design an OOP model and write a C++ program to calculate the cost of the pizza. Add Rs 50 for veg pizza and Rs 100 for chicken pizza. Use 3.14 for pi. Your program should  get all the ingredients available in the kitchen with their cost per 100 grams, as an input.  Assume that all the ingredients required for the preparation of the pizza is available in the kitchen.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			#include&lt;string.h>
			#include&lt;iomanip>
			class circle
			{
			    protected:
			    float radius;
			    public:
			    void get_C();
			    void print_C();
			    float area();
			};
			struct ingre_Cost
			{
			    char name[30];
			    float price;
			};
			class kitchen
			{
			    protected:
			    int num1;
			    //ingredients in the kitchen and their cost
			    ingre_Cost ing_Cost[20];
			    public:
			    void get_K();
			    void print_K();
			    //Given name of ingredients
			    //return cost of 100gm of it
			    float get_Cost(char*);
			};
			struct ingre_Qty
			{
			    char name[30];
			    float qty;
			};
			class cookeditem
			{
			    protected:
			    //number of ingredients
			    int num;
			    // names of ingredients and their quantity in
			    // Pizza
			    ingre_Qty ing_Qty[20];
			    public:
			    void get_CI();
			    void print_CI();
			};
			 
			//Create a class pizza that inherits circle and cookeditem
			//Create another class veg_Pizza inherited that inherits pizza
			//Create another class chik_Pizza inherited that inherits pizza

			//start
			float kitchen::get_Cost(char na[]){
			    for(int i=0; i&lt;num1; i++)
			    if(!strcmp(ing_Cost[i].name,na))
			    return ing_Cost[i].price;
			}
			class pizza : public circle, public cookeditem{
			    float ar;
			    int i;
			    public:
			    float fin;
			    void get_P(){
			        cin>>radius>>num;
			        for(i=0; i&lt;num; i++)
			        cin>>ing_Qty[i].name>>ing_Qty[i].qty;
			        ar=3.14*radius*radius;
			    }
			    void compute_Cost(kitchen k){
			        fin=50;
			        for(i=0; i&lt;num; i++)
			            fin+=k.get_Cost(ing_Qty[i].name)*(ing_Qty[i].qty)*ar/100;
			    }
			    virtual void print_P(){
			        cout&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;fin;
			    }
			};
			void kitchen::get_K(){
			    cin>>num1;
			    for(int i=0; i&lt;num1; i++)
			    cin>>ing_Cost[i].name>>ing_Cost[i].price;
			}
			class veg_Pizza : public pizza{
			};
			class chik_Pizza : public veg_Pizza{
			    public:
			    void print_P(){
			        cout&lt;&lt;fixed&lt;&lt;setprecision(2)&lt;&lt;fin+50;
			    }
			};
			//end

			int main()
			{
			    int ch;
			    cin>>ch;
			    if (ch==0)
			    {
			    //Create an oject for veg pizza
			    veg_Pizza p;
			    //get radius of circle(pizza)
			    // get ingredients and quantity required for 1 square centimeter
			    p.get_P();
			    //get items in kitchen and their cost
			    kitchen k;
			    k.get_K();
			    //compute cost
			    p.compute_Cost(k);
			    p.print_P();
			    }
			    else
			    {
			    if (ch==1)
			    {
			    chik_Pizza c;
			    c.get_P();
			    kitchen k1;
			    k1.get_K();
			    c.compute_Cost(k1);
			    c.print_P();
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