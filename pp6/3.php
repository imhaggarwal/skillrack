<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8" />
</head>
<body>
	<h1>Cracking Skillrack</h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2>Count the Number of Items</h2>
		<div>Given a collection of elements and a value specifying a value to be checked, develop a generic function count the number of elements with the value. Use the function to check a collection of primitive data types such as integers, floating point values and characters. Also given a set of books in a library and the name of the book to be searched, use the generic function to count the number of books in the library with the given name. Use predefined string class for representing name of the book, '==' operator is overloaded in predefined class string to check if two strings are same.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include &lt;exception>
			using namespace std;
			#include&lt;string>
			//Collection of data in which search has to be made
			//and data to be searched may be different
			//so have two template class variables
			template&lt;class T,class S>
			int count(T *data,int size, S search);
			class book
			{
			    int id;
			    string name;
			    string a_Name;
			    float price;
			    public:
			    void get();
			    // overload the '==' operator to check if
			    // name of book is same as the string passed
			    //return true if it is same
			    bool operator==(string);
			};

			//start
			template&lt;class T, class S> int count(T *data, int size, S search){
			    int i=0, c=0;
			    for(; i&lt;size; i++)
			    if(data[i]==search)
			    c++;
			    return c;
			}
			bool book::operator==(string n){
			    if(name==n)
			    return true;
			    else
			    return false;
			}
			void book::get(){
			    cin>>id>>name>>a_Name>>price;
			}
			main(){
			    int c, n, i=0;
			    cin>>c>>n;
			    if(c==1){
			        int a[20], sea;
			        for(; i&lt;n; i++)
			        cin>>a[i];
			        cin>>sea;
			        cout&lt;&lt;count(a,n,sea);
			    }
			    else if(c==2){
			        string a[20], sea;
			        for(; i&lt;n; i++)
			        cin>>a[i];
			        cin>>sea;
			        cout&lt;&lt;count(a,n,sea);
			    }
			    else{
			        book a[20];
			        string sea;
			        for(; i&lt;n; i++)
			        a[i].get();
			        cin>>sea;
			        cout&lt;&lt;count(a,n,sea);
			    }
			}
			//end
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>