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
		<h2>Generic Double Ended Queue</h2>
		<div>Design a generic class queue to maintain a list of elements. Queue is a linear data structure that follow FIFO ordering of elements. It is a special kind of list where elements can be inserted at one end and deleted at the end. There are two end points called front and rear. Front is the point of deletion and that move for each deletion but always points to the element that was inserted first among the elements remaining in the queue. Rear is the point of the insertion and move for each insertion but always points to the element that was inserted last among the elements remaining in the queue. Provide member functions to check if a queue is empty, queue is full, enqueue and dequeue.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			#include&lt;string>
			//global error flag for dequeue
			bool ERR_Flag = false;
			template&lt;class T>
			class queue
			{
				protected:
				int front;
				int rear;
				int capacity;
				T *ele;
				public:
				//constructor to allocate memory and initialize data members
				queue();
				bool isempty();
				bool isfull();
				//Check if queue is full before insertion
				//if queue is full return false
				// insert element and return true otherwise
				bool enqueue(T data);
				//funtion to remove an element and return
				T dequeue();
				~queue();
				void print();
			};
			template&lt;class T>
			class deque:public queue&lt;T>
            {
                public:
                bool push_Back(T data);
                bool push_Front(T data);
                T pop_Front();
                T pop_Back();
            };

			//start
			template&lt;class T> queue&lt;T>::queue(){
			    front=-1;
			    rear=-1;
			    capacity=20;
			    ele=new T[20];
			}
			template&lt;class T> bool queue&lt;T>::isempty(){
			    if(front==-1)
			    return true;
			    else
			    return false;
			}
			template&lt;class T> bool queue&lt;T>::isfull(){
			    if(rear==19)
			    return true;
			    else
			    return false;
			}
			template&lt;class T> bool queue&lt;T>::enqueue(T data){
			    if(isfull())
			    return false;
			    else{
			        ele[++rear]=data;
			        if(!rear)
			        front++;
			        return true;
			    }
			}
			template&lt;class T> T queue&lt;T>::dequeue(){
			    if(isempty()){
			        ERR_Flag=true;
			        return ele[0];
			    }
			    else{
			        int i=front;
			        if(front+1>rear){
			            rear=-1;
			            front=-1;
			        }
			        else
			        front++;
			        return ele[i];
			    }
			}
			template&lt;class T> void queue&lt;T>::print(){
			    if(!isempty()){
			        for(int i=front; i&lt;=rear; i++)
			        cout&lt;&lt;ele[i]&lt;&lt;endl;
			    }
			    else
			    cout&lt;&lt;"Queue is empty"&lt;&lt;endl;
			}
			template&lt;class T> queue&lt;T>::~queue(){}
			template&lt;class T> bool deque&lt;T>::push_Back(T data){
			    return queue&lt;T>::enqueue(data);
			}
			template&lt;class T> bool deque&lt;T>::push_Front(T data){
			    if(!queue&lt;T>::isfull()){
			        if(queue&lt;T>::isempty()){
			            queue&lt;T>::enqueue(data);
			        }
			        else{
			            for(int i=queue&lt;T>::rear++; i>=queue&lt;T>::front; i--)
			            queue&lt;T>::ele[i+1]=queue&lt;T>::ele[i];
			            queue&lt;T>::ele[queue&lt;T>::front]=data;
			            return true;
			        }
			    }
			    return false;
			}
			template&lt;class T> T deque&lt;T>::pop_Front(){
			    return queue&lt;T>::dequeue();
			}
			template&lt;class T> T deque&lt;T>::pop_Back(){
			    if(!queue&lt;T>::isempty()){
			        if((queue&lt;T>::rear)-1>=(queue&lt;T>::front))
			        return queue&lt;T>::ele[queue&lt;T>::rear--];
			    }
			    else
			    return queue&lt;T>::ele[0];
			}
			//end

			int main()
			{
				int d_Choice;
				int op_Choice;
				deque&lt;string> d;
                queue&lt;int> q;
                cin>>d_Choice;
				if(d_Choice==1)
                {
					while(1)
					{
                        cin>>op_Choice;
                        if(op_Choice==1)
                        {
                            if(q.isempty())
                            cout&lt;&lt;"Queue is empty"&lt;&lt;endl;
                            else
                            cout&lt;&lt;"Queue is not empty"&lt;&lt;endl;
                        }
                        else if(op_Choice==2)
                        {
                            if(q.isfull())
                            cout&lt;&lt;"Queue is full"&lt;&lt;endl;
                            else
                            cout&lt;&lt;"Queue is not full"&lt;&lt;endl;
                        }
                        else if(op_Choice==3){
                            int data;
                            cin>>data;
                            if(!q.enqueue(data))
                            cout&lt;&lt;"Queue full insertion not possible";
                        }
                        else if(op_Choice==4)
                        {
                            q.dequeue();
                            if(ERR_Flag)
                            cout&lt;&lt;"Queue is empty";
                        }
                        else if(op_Choice==5)
                        {
                            q.print();
                        }
                        else if(op_Choice==6)
                            break;
                    }
                    }
                    else if(d_Choice==2)    {
                    string s_Data;
                    while(1)
                    {
                        cin>>op_Choice;
                        if(op_Choice==1)
                        {
                            if(d.isempty())
                            cout&lt;&lt;"Queue is empty"&lt;&lt;endl;
                            else
                            cout&lt;&lt;"Queue is not empty"&lt;&lt;endl;
                        }
                        else if(op_Choice==2)
                        {
                            if(d.isfull())
                            cout&lt;&lt;"Queue is full"&lt;&lt;endl;
                            else
                            cout&lt;&lt;"Queue is not full"&lt;&lt;endl;
                        }
                        else if(op_Choice==3)
                        {
                            cin>>s_Data;
                            if(!d.push_Back(s_Data))
                            cout&lt;&lt;"Queue full insertion not possible";
                        }
                        else if(op_Choice==4)
                        {
                            cin>>s_Data;
                            if(!d.push_Front(s_Data))
                                cout&lt;&lt;"Queue full insertion not possible";
			            }
                        else if(op_Choice==5)
                        {
                            d.pop_Back();
                            if(ERR_Flag)
                            cout&lt;&lt;"Queue is empty";
                        }
                        else if(op_Choice==6)
                        {
                            d.pop_Front();
                            if(ERR_Flag)
                            cout&lt;&lt;"Queue is empty";
                        }
                        else if(op_Choice==7)
                        d.print();

                        else if(op_Choice==8)
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