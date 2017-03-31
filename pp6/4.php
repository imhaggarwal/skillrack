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
		<h2>Insert into a Generic Box</h2>
		<div>A generic box has three entry points:<br>First – Points to the first element in the box<br>Last - Points to the last element in the box<br>Mid – Points to the middle element in the box (calculated as (first+last)/2)<br>Insertion and deletion can be done through all the three points. Initially all the three entry points are -1. All the three entry points are updated for the first element that is inserted into the box. And for other insertions last and mid are updated. For each delete operation, update mid and last entry points. All entry points must become -1 when the box becomes empty. Provide a function to check if the box is full and also a function to check if the box is empty. Define a function print for the generic box. If the box is empty then it must print “Box empty”, print all elements from first position to last otherwise.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include &lt;exception>
			using namespace std;
			#include&lt;string>
			template&lt;class T>
			class g_Box
			{
			    int first,mid,last;
			    //initially number of elements is 0
			    // increment for each insert and
			    // decrement for each delete
			    int no_Of_Ele;
			    //represents maximum number of elements
			    // that can be stored
			    int capacity;
			    T *ele;
			    public:
			    // allocate memory to store elements and
			    // initialize all members
			    // let the maximum capacity be 20
			    g_Box();
			    // parameterised constructor
			    // with maximum capacity as parameter
			    g_Box(int);
			    bool isEmpty();
			    bool isFull();
			    void insert_First(T);
			    void insert_Last(T);
			    void insert_Mid(T);
			    void delete_First();
			    void delete_Last();
			    void delete_Mid();
			    void print();
			};
			
			//start
			template&lt;class T> g_Box&lt;T>::g_Box(){
			    first=-1;
			    mid=-1;
			    last=-1;
			    no_Of_Ele=0;
			    ele= new T[20];
			}
			template&lt;class T> g_Box&lt;T>::g_Box(int){}
			template&lt;class T> bool g_Box&lt;T>::isEmpty(){
			    if(first==-1)
			    return true;
			    else
			    return false;
			}
			template&lt;class T> bool g_Box&lt;T>::isFull(){
			    if(no_Of_Ele==10)
			    return true;
			    else
			    return false;
			}
			template&lt;class T> void g_Box&lt;T>::insert_First(T n){
			    if(!isFull()){
			        for(int i=no_Of_Ele++; i>0; i++)
			        ele[i]=ele[i-1];
			        ele[0]=n;
			        first=0;
			        last++;
			        mid=last/2;
			    }
			}
			template&lt;class T> void g_Box&lt;T>::insert_Last(T n){
			    if(!isFull()){
			        ele[no_Of_Ele++]=n;
			        last++;
			        first=0;
			        mid=last/2;
			    }
			}
			template&lt;class T> void g_Box&lt;T>::insert_Mid(T n){
			    if(!isFull()){
			        for(int i=no_Of_Ele; i>mid; i++)
			        ele[i]=ele[i-1];
			        first=0;
			        last++;
			        mid=last/2;
			    }
			}
			template&lt;class T> void g_Box&lt;T>::delete_First(){
			    if(!isEmpty()){
			        if(last)
			        for(int i=0; i&lt;no_Of_Ele-1; i++)
			        ele[i]=ele[i+1];
			        no_Of_Ele--;
			        last--;
			        mid=last/2;
			        if(!no_Of_Ele){
			            first=-1;
			            mid=-1;
			        }
			    }
			}
			template&lt;class T> void g_Box&lt;T>::delete_Last(){
			    if(!isEmpty()){
			        no_Of_Ele--;
			        last--;
			        mid=last/2;
			        if(!no_Of_Ele){
			            first=-1;
			            mid=-1;
			        }
			    }
			}
			template&lt;class T> void g_Box&lt;T>::delete_Mid(){
			    if(!isEmpty()){
			        if(last)
			        for(int i=mid; i&lt;no_Of_Ele-1; i++)
			        ele[i]=ele[i+1];
			        no_Of_Ele--;
			        last--;
			        mid=last/2;
			        if(!no_Of_Ele){
			            first=-1;
			            mid=-1;
			        }
			    }
			}
			template&lt;class T> void g_Box&lt;T>::print(){
			    for(int i=0; i&lt;no_Of_Ele; i++)
			    cout&lt;&lt;ele[i]&lt;&lt;endl;
			}
			//end

			int main()
			{
			    int d_Choice;
			    cin>>d_Choice;   
			    g_Box&lt;int> g;
			    int data;
			    g_Box&lt;string> g1;
			    string data1;
			    if(d_Choice == 1)
			    {
			    while(1)
			    {  
			    int opt_Choice;
			    cin>>opt_Choice;
			    if(opt_Choice==1)
			    {
			    if(g.isEmpty())
			    cout&lt;&lt;"Empty"&lt;&lt;endl;
			    else
			    cout&lt;&lt;"Not empty"&lt;&lt;endl;
			    }
			    else if(opt_Choice==2)
			    {
			    if(g.isFull())
			    cout&lt;&lt;"Full"&lt;&lt;endl;
			    else
			    cout&lt;&lt;"Not full"&lt;&lt;endl;
			    }
			    else if(opt_Choice==3)
			    {
			    cin>>data;
			    g.insert_First(data);
			    }
			    else if(opt_Choice==4)
			    {
			    cin>>data;
			    g.insert_Last(data);
			    }
			    else if(opt_Choice==5)
			    {
			    cin>>data;
			    g.insert_Mid(data);
			    }
			    else if(opt_Choice==6)
			    {
			    g.delete_First();
			    }
			    else if(opt_Choice==7)
			    {
			    g.delete_Last();
			    }
			    else if(opt_Choice==8)
			    {
			    g.delete_Mid();
			    }
			    else if(opt_Choice==9)
			    {
			    g.print();
			    }
			    else if(opt_Choice==10)
			    {
			        break;
			    }  
			    }
			    }
			    if(d_Choice == 2)
			    {
			    while(1)
			    {  
			    int opt_Choice;
			    cin>>opt_Choice;
			    if(opt_Choice==1)
			    {
			    if(g1.isEmpty())
			    cout&lt;&lt;"Empty"&lt;&lt;endl;
			    else
			    cout&lt;&lt;"Not empty"&lt;&lt;endl;
			    }
			    else if(opt_Choice==2)
			    {
			    if(g1.isFull())
			    cout&lt;&lt;"Full"&lt;&lt;endl;
			    else
			    cout&lt;&lt;"Not full"&lt;&lt;endl;
			    }
			    else if(opt_Choice==3)
			    {
			    cin>>data1;
			    g1.insert_First(data1);
			    }
			    else if(opt_Choice==4)
			    {
			    cin>>data1;
			    g1.insert_Last(data1);
			    }
			    else if(opt_Choice==5)
			    {
			    cin>>data1;
			    g1.insert_Mid(data1);
			    }
			    else if(opt_Choice==6)
			    {
			    g1.delete_First();
			    }
			    else if(opt_Choice==7)
			    {
			    g1.delete_Last();
			    }
			    else if(opt_Choice==8)
			    {
			    g1.delete_Mid();
			    }
			    else if(opt_Choice==9)
			    {
			    g1.print();
			    }
			    else if(opt_Choice==10)
			    {
			        break;
			    }  
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