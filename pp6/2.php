<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8" />
</head>
<body>
	<h1><a href='../index.php'>Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2>Check if a Matrix is Sparse or Not</h2>
		<div>There are numerous applications of matrices, both in mathematics and other sciences. Some of them merely take advantage of the compact representation of a set of numbers in a matrix. Few to mention the application of matrices are game theory, economics, graph theory, quantum theory, probabilty theory and statistics. Each type of application use different type of data. Design a generic class matrix with functions to check if a matrix is sparse and add two matrices. A matrix is said to be sparse, if the number of zero’s in the matrix is larger than the number of non-zero elements. Define a user defined exception mismatchDimension and throw it when the dimension of matrix1 is not equal to dimension of matrix 2. Print “Dimension of matrices do not match” when the exception is caught.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include &lt;exception>
			using namespace std;
			 
			class mismatchDimension:public exception
			{
			    public:
			    void error_Msg()const;
			};
			template&lt;class T>
			class matrix
			{
			    int row;
			    int col;
			    T ele[10][10];
			    public:
			    void get();
			    bool check_Sparse();
			    matrix add(matrix&);
			    void print();
			};
			
			//start
			void mismatchDimension::error_Msg() const{
			    cout&lt;&lt;"Dimension of matrices do not match"&lt;&lt;endl;
			}
			template&lt;class T> void matrix&lt;T>::get(){
			    int i, j;
			    cin>>row>>col;
			    for(i=0; i&lt;row; i++)
			    for(j=0; j&lt;col; j++)
			    cin>>ele[i][j];
			}
			template&lt;class T> bool matrix&lt;T>::check_Sparse(){
			    int i=0, j, c=0;
			    int t=row*col;
			    for(; i&lt;row; i++)
			    for(j=0; j&lt;col; j++)
			    if(ele[i][j]==0)
			    c++;
			    if(c>t/2)
			    return true;
			    else
			    return false;
			}
			template&lt;class T> matrix&lt;T> matrix&lt;T>::add(matrix&lt;T> &a){
			    int i, j;
			    if(row!=a.row || col!=a.col)
			    throw mismatchDimension();
			    else
			    for(i=0; i&lt;row; i++)
			    for(j=0; j&lt;col; j++)
			    a.ele[i][j]+=ele[i][j];
			    return a;
			}
			template&lt;class T> void matrix&lt;T>::print(){
			    int i=0, j;
			    for(; i&lt;row; i++)
			    for(j=0; j&lt;col; j++)
			    cout&lt;&lt;ele[i][j]&lt;&lt;endl;
			}
			//end

			int main()
			{
			    matrix&lt;int> m1,m2,m3;
			    m1.get();
			    m2.get();
			    try
			    {
			    m3 = m1.add(m2);
			    m3.print();
			    }catch(mismatchDimension &m)
			    {
			    m.error_Msg();
			    }
			    if(m1.check_Sparse())
			    cout&lt;&lt;"Matrix is sparse"&lt;&lt;endl;
			    else
			    cout&lt;&lt;"Matrix is not sparse"&lt;&lt;endl;
			     
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>