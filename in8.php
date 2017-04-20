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
		<h2> A binary tree of depth d is an almost complete binary tree if: Each leaf in the tree is either at level d or at level (d – 1).<br>An almost complete binary tree is a tree in which each node that has a right child also has a left child. Having a left child does not require a node to have a right child in level d. Figure shows a almost complete binary tree with integer elements and the array representation of the tree is also shown. Left child of the element in index ‘x’ is located in index (2*x+1), right child of the element in index ‘x’ is given by (2*x+2). Parent of an element in index ‘x’ is given by floor(x/2). Develop a class ACBinaryTree that can store any type of elements and provide member functions to find parent, left child and right child of a node in the tree. Assume that the tree is `empty’ initially.  Position number (index) of  the root of the tree is considered as  0. In every level, `position number’ (indices)  of the nodes will be in the increasing order,  when scanned from left to right<br><br>
		<pre>
			#include&lt;iostream>
			#include &lt;exception>
			using namespace std;
			#include&lt;string>
			#include&lt;stdlib.h>
			bool ERR_Flag=false;
			template&lt;class T>
			//Set this global error flag to true when there is no
			//left/right child for a given node
			class AC_BinaryTree
			{
			    int no_Of_Ele;
			    T *ele;
			    int capacity;
			    public:
			    AC_BinaryTree();
			    bool isEmpty();
			    bool isFull();
			    void insert(T);
			    T leftChild(int pos);
			    T rightChild(int pos);
			    T parent(int pos);
			};


			//start
			template&lt;class T> AC_BinaryTree&lt;T>::AC_BinaryTree(){
			    capacity=20;
			    ele=new T[20];
			    no_Of_Ele=0;
			}
			template&lt;class T> bool AC_BinaryTree&lt;T>::isEmpty(){
			    if(!no_Of_Ele)
			        return true;
			    else
			        return false;
			}
			template&lt;class T> bool AC_BinaryTree&lt;T>::isFull(){
			    if(no_Of_Ele==capacity)
			        return true;
			    else
			        return false;
			}
			template&lt;class T> void AC_BinaryTree<T>::insert(T e){
			    if(isFull())
			        cout&lt;&lt;"Tree full insertion cannot be made"&lt;&lt;endl;
			    else
			    ele[no_Of_Ele++]=e;
			}
			template&lt;class T> T AC_BinaryTree&lt;T>::leftChild(int pos){
			    pos=pos*2+1;
			    ERR_Flag=false;
			    if(pos>no_Of_Ele-1){
			            T a;
			        cout&lt;&lt;"No left child"&lt;&lt;endl;
			        ERR_Flag=true;
			        return a;
			    }
			    else
			        return ele[pos];
			}
			template&lt;class T> T AC_BinaryTree&lt;T>::rightChild(int pos){
			    pos=pos*2+2;
			    ERR_Flag=false;
			    if(pos>no_Of_Ele-1){
			            T a;
			        cout&lt;&lt;"No right child"&lt;&lt;endl;
			        ERR_Flag=true;
			        return a;
			    }
			    else
			        return ele[pos];
			}
			template&lt;class T> T AC_BinaryTree&lt;T>::parent(int pos){
			    pos/=2;
			        return ele[pos];
			}
			//end

			int main(){
			    int d_Choice, pos;
			    cin>>d_Choice;
			    int val;
			    string val1;
			    AC_BinaryTree&lt;int> g;
			    int data;
			    AC_BinaryTree&lt;string> g1;
			    string data1;
			    if(d_Choice == 1){
			        while(1){
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
			            else if(opt_Choice==3){
			                cin>>data;
			                g.insert(data);
			            }
			            else if(opt_Choice==4){
			                cin>>pos;
			                val = g.leftChild(pos);
			                if(!ERR_Flag)
			                cout&lt;&lt;val&lt;&lt;endl;
			            }
			            else if(opt_Choice==5){
			                cin>>pos;
			                val = g.rightChild(pos);
			                if(!ERR_Flag)
			                cout&lt;&lt;val&lt;&lt;endl;
			            }
			        else if(opt_Choice==6){
			                cin>>pos;
			                val = g.parent(pos);
			                cout&lt;&lt;val&lt;&lt;endl;
			        }
			        else if(opt_Choice==7)
			            exit(1);
			    }
			    }
			    if(d_Choice == 2){
			            while(1){
			        int opt_Choice;
			        cin>>opt_Choice;
			        if(opt_Choice==1)
			        {
			        if(g1.isEmpty())
			        cout&lt;&lt;"Empty"&lt;&lt;endl;
			        else
			        cout&lt;&lt;"Not empty"&lt;&lt;endl;
			        }
			        else if(opt_Choice==2){
			            if(g1.isFull())
			            cout&lt;&lt;"Full"&lt;&lt;endl;
			            else
			            cout&lt;&lt;"Not full"&lt;&lt;endl;
			        }
			        else if(opt_Choice==3){
			                cin>>data1;
			                g1.insert(data1);
			        }
			        else if(opt_Choice==4){
			                cin>>pos;
			                val1 = g1.leftChild(pos);
			                if(!ERR_Flag)
			                cout&lt;&lt;val1&lt;&lt;endl;
			        }
			        else if(opt_Choice==5){
			            cin>>pos;
			            val1 = g1.rightChild(pos);
			            if(!ERR_Flag)
			            cout&lt;&lt;val1&lt;&lt;endl;
			        }
			        else if(opt_Choice==6){
			            cin>>pos;
			            val1 = g1.parent(pos);
			            cout&lt;&lt;val1&lt;&lt;endl;
			        }
			        else if(opt_Choice==7)
			            exit(1);
			    }
			    }
			}

		</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
<?php include './adCode.php'; ?>
</body>
</html>
