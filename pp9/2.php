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
		<h2>How to Serve a Coffee?</h2>
		<div>Jegan organizes a family function and invite some of his friends. Many of his friends come prior to the function. Jegan has arranged for their accommodation in a hotel. The rooms are booked as the guest arrive, so the room numbers are not continous and not in any order. Jegan has the room number of the friend who had arrived first. And he has requested his friends to have a room number of the person who arrives next to him. That is the friend who arrived third will have room number of the friend who arrived fourth. The last guest will not have any room number. Given the details of each guest such as name, his room number and room number of the guest who arrived next, and room number of that Jegan has, design an algorithm and write a C++ code to print the names and room numbers to serve a coffee. For example, if the details in the following table is given</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			#include&lt;string>
			#include&lt;map>
			struct guest
			{
			    int room_No;
			    string name;
			    int friend_Room_No;
			    public:
			    void get();
			};
			class hotel
			{
			    int num_Of_Guest;
			    map&lt;int,guest> stay_Det;
			    //this room number is with jegan
			    int first_Room_No;
			    public:
			    void get();
			    //this function should print
			    //details such as name and room number
			    // of guest to serve coffee
			    void serve_Coffee();
			};
			
			//start
			void hotel::get(){
			    guest g;
			    cin>>num_Of_Guest;
			    for(int i=0; i&lt;num_Of_Guest; i++){
			        cin>>g.room_No>>g.name>>g.friend_Room_No;
			        stay_Det[g.room_No]=g;
			    }
			    cin>>first_Room_No;
			}
			void hotel::serve_Coffee(){
			    while(first_Room_No!=-1){
			        cout&lt;&lt;stay_Det[first_Room_No].name&lt;&lt;" "&lt;&lt;stay_Det[first_Room_No].room_No&lt;&lt;endl;
			        first_Room_No=stay_Det[first_Room_No].friend_Room_No;
			    }
			}
			//end

			main()
			{
			    hotel h;
			    h.get();
			    h.serve_Coffee();
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>