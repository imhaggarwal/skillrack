<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8" />
</head>
<body>
	<h1><a href="../index.php">Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2>Arrange Items for Solar Vehicle</h2>
		<div>There are 'n' bags in a corner of a city and they have to be moved to the centre of the city by a solar vehicle. The vehicle starts shunting from morning, the vehicle can carry more load in the mornings than in the evening when sunlight would be dimmer. Given the details of items in the bag, sort the bag in descending so that the vehicle can safely carry it to the centre of the city. Use vector and map in STL. Also use the sort algorithm defined in STL.</div>
		<br><br>
		<pre>
			#include &lt;iostream>
			#include&lt;map>
			#include &lt;vector>
			#include &lt;algorithm>
			using namespace std;
			class bag
			{
			    char name[30];
			    int num_Of_Items;
			    float item_Wt[20];
			    float item_Count[20];  
			    public:
			    void get();
			    //print only name of bag
			    void print();
			    //Compute weight from details given
			    float compute();
			};
			bool wayToSort(int i, int j);
			class solar
			{
			    map&lt;float,bag> m1;
			    vector&lt;float> v;
			    int num_Bags;
			    public:
			    //get details of bags and insert into map and vector
			    // In map, key - weight and value - details of bag
			    // In vector, weight of bags
			    void get();
			    void sort_Vec();
			    //print name of bags in sorted order
			    void print_In_Order();
			};
			
			//start
			void bag::get(){
			    cin>>name>>num_Of_Items;
			    for(int i=0; i&lt;num_Of_Items; i++)
			    cin>>item_Wt[i]>>item_Count[i];
			}
			void bag::print(){
			    cout&lt;&lt;name&lt;&lt;endl;
			}
			float bag::compute(){
			    float w=0;
			    for(int i=0; i&lt;num_Of_Items; i++)
			    w+=item_Wt[i]*item_Count[i];
			}
			void solar::get(){
			    bag t;
			    cin>>num_Bags;
			    for(int i=0; i&lt;num_Bags; i++){
			        t.get();
			        v.push_back(t.compute());
			        m1[v[i]]=t;
			    }
			}
			bool wayToSort(int i, int j){
			    return i>j;
			}
			void solar::sort_Vec(){
			    sort(v.begin(),v.end(),wayToSort);
			}
			void solar::print_In_Order(){
			    for(int i=0; i&lt;num_Bags; i++)
			    m1.at(v[i]).print();
			}
			//end

			int main()
			{
			    solar s;
			    s.get();
			    s.sort_Vec();
			    s.print_In_Order();
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>