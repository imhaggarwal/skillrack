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
		<h2>Chess, Carrom and Scrabble Players</h2>
		<div>Each student in a class of 'n' plays at least one indoor game chess, carrom and scrabble. Given three list of names of students who play chess, scrabble and carrom, develop an algorithm and write a C++ code to find the students who can<br>(i) Play chess and carrom<br>(ii) Chess, carrom but not scrabble<br>Understand the template code and implement the member functions of the class</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			#include&lt;cstring>
			using namespace std;
			class set
			{
			    int num_Of_Ele;
			    char names[30][20];
			    public:
			    void get();
			    void print()const;
			    set intersection(set&);
			    set difference(set&);
			};

			void set::get(){
			    int i;
			    cin>>num_Of_Ele;
			    for(i=0; i&lt;num_Of_Ele; i++)
			        cin>>names[i];
			}
			void set::print()const{
			    int i;
			    if(num_Of_Ele>0){
			            cout&lt;&lt;names[0];
			        for(i=1; i&lt;num_Of_Ele; i++)
			            cout&lt;&lt;","&lt;&lt;names[i];
			        cout&lt;&lt;endl;
			    }
			}
			set set::intersection(set &a){
			    int i, j;
			    set b;
			    b.num_Of_Ele=0;
			    for(i=0; i&lt;num_Of_Ele; i++)
			        for(j=0; j&lt;a.num_Of_Ele; j++)
			        if(!(strcmp(names[i],a.names[j]))){
			            strcpy(b.names[b.num_Of_Ele++],names[i]);
			            break;
			        }
			    return b;
			}
			set set::difference(set &a){
			    int i, n, j;
			    set b;
			    b.num_Of_Ele=0;
			    for(i=0; i&lt;num_Of_Ele; i++){
			        n=0;
			        for(j=0; j&lt;a.num_Of_Ele; j++)
			        if(!(strcmp(names[i],a.names[j]))){
			            n++;
			            break;
			        }
			        if(!n)
			            strcpy(b.names[b.num_Of_Ele++],names[i]);
			    }
			    return b;
			}


			int main()
			{
			    set chess, carrom,scrabble;
			    chess.get();
			    carrom.get();
			    scrabble.get();
			    set inter = chess.intersection(carrom);
			    inter.print();
			    set diff = inter.difference(scrabble);
			    diff.print();
			    return 0;
			}

	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>