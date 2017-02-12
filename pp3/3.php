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
		<h2>Snakes and Ladders</h2>
		<div>Snakes and Ladders is an ancient Indian board game. It is played between two or more players on a gameboard having numbered, gridded squares (which is in the form a matrix). The board has a  number of  pictures of the "ladders" and "snakes"  on the board, each connecting two specific board squares. The object of the game is to navigate one's game piece, according to die rolls, from the start (bottom square) to the finish (top square), helped or hindered by ladders and snakes respectively.<br>Given an m X n board, details of snakes and ladders in the board, current position of coin of player1 and sequence of dice rolls by player1, design an algorithm and write a C++ code to find the new position of coin of player1. The grids of the board are numbered from 1 to m*n. After a die roll, if the coin ends up in a square with snake / ladder start position then update position to end position of snake / ladder. Each grid in the board is given a number ‘g’ which is computed as (r-1)*n + c, where ‘r’ and ‘c’ are the row and column position of the grid.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			typedef struct
			{
			    //elements to indicate the number of rows and columns
			    int row,col;
			}board;
			//A struct to define a position in the board
			typedef struct
			{
			    int row;
			    int col;
			}position;
			//Struct to represent the details of snake positions
			typedef struct
			{
			    int num;
			    int st_Grid[10];
			    int end_Grid[10];
			}snakes;
			//Struct to represent the details of ladder positions
			typedef struct
			{
			    int num;
			    int st_Grid[10];
			    int end_Grid[10];
			}ladders;
			//Struct to represent the details of rolls in the play
			typedef struct
			{
			    int num;
			    int roll[10];
			}rolls;
			// Function to read input from user board, snake and ladder details
			// then current position and details of rolls
			// Parameters are passed by reference
			void read_Values(board &b,snakes &snake_Det,ladders &ladder_Det,position &cur_Pos,rolls &r);
			//Function to compute new position of coin
			int find_New_Pos(board &b,snakes &snake_Det,ladders &ladder_Det,position &cur_Pos, rolls &r);

			//start
			void read_Values(board &b,snakes &snake_Det,ladders &ladder_Det,position &cur_Pos,rolls &r){
			    int i;
			    cin>>b.row>>b.col>>snake_Det.num;
			    for(i=0; i&lt;snake_Det.num; i++)
			        cin>>snake_Det.st_Grid[i]>>snake_Det.end_Grid[i];
			    cin>>ladder_Det.num;
			     for(i=0; i&lt;ladder_Det.num; i++)
			        cin>>ladder_Det.st_Grid[i]>>ladder_Det.end_Grid[i];
			     cin>>cur_Pos.row>>cur_Pos.col>>r.num;
			      for(i=0; i&lt;r.num; i++)
			        cin>>r.roll[i];
			}
			int find_New_Pos(board &b,snakes &snake_Det,ladders &ladder_Det,position &cur_Pos, rolls &r){
			    int i, pos=(cur_Pos.row-1)*b.col+cur_Pos.col, j, c;
			    for(i=0; i&lt;r.num; i++){
			            c=0;
			        pos+=r.roll[i];
			        for(j=0; j&lt;snake_Det.num; j++)
			            if(pos==snake_Det.st_Grid[i]){
			                pos=snake_Det.end_Grid[i];
			                c++;
			                break;
			            }
			        if(!c)
			        for(j=0; j&lt;ladder_Det.num; j++)
			            if(pos==ladder_Det.st_Grid[i]){
			                pos=ladder_Det.end_Grid[i];
			                break;
			            }
			    }
			    return pos;
			}
			//end

			int main()
			{
			    board b;
			    position cur_Pos;
			    int final_Grid;
			    rolls r;
			    snakes snake_Det;
			    ladders ladder_Det;
			    read_Values(b,snake_Det,ladder_Det,cur_Pos,r);
			    final_Grid = find_New_Pos(b,snake_Det,ladder_Det,cur_Pos,r);
			    cout&lt;&lt;final_Grid;
			}

	</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>