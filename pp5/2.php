<!DOCTYPE html>
<html>
<head>
	<title>Cracking Skillrack</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1><a href='../index.php'>Cracking Skillrack</a></h1>
	<p>Powered by Doctor Codes</p>
	<div>
<?php include '../adCode.php'; ?>
		<h2>Black Coin in Board game </h2>
		<div>Colored coin game is a 8X8 board game which has many colored coins. Each coin has a weight and power. Power of a coin is defined by the moves that it can make. In a move,  a black coin can move one step vertically upwards.  A red coin can move one step either horizontally, vertically or diagonally. Given the current position of a black coin and list of movements made by it, print all possible next positions of the coin. If the total number of moves made by a black coin is greater than 6, then that coin should be treated as a red coin and the subsequent moves will be as that of the red coin. At any point of time, the coin cannot move outside the board. The rows and columns of the board are numbered as 1 to 8. Print the horizontal movement of coin in an increasing order of columns and print the vertical movement of coin in increasing order of rows. To print, the diagonal movement of the coin refer the sample board config given below. If the current position of your coin is 4,4 then print P1, P2 ... P8 in order..</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			class coin
			{
			    protected:
			    int weight;
			    int curr_X;
			    int curr_Y;
			    public:
			    void get();
			    void print();
			    //return the current row position
			    int get_Curr_X();
			    //return the current col position
			    int get_Curr_Y();
			    //return weight of the coin
			    int get_Weight();
			    //pure virtual function that the derived classes must implement
			    virtual void move()=0;
			};
			//Define two more classes black_Coin and red_Coin

			//start
			void coin::print(){
			    cout&lt;&lt;weight&lt;&lt;endl;
			}
			int coin::get_Weight(){
			    return weight;
			}
			int coin::get_Curr_X(){
			    return curr_X;
			}
			int coin::get_Curr_Y(){
			    return curr_Y;
			}
			class black_Coin : public coin{
			    int moves;
			    public:
			    void get(){
			        cin>>weight>>curr_X>>curr_Y>>moves;
			    }
			    bool gained_Power(){
			        if(moves>6)
			        return true;
			        return false;
			    }
			    void move(){
			        cout&lt;&lt;curr_X&lt;&lt;","&lt;&lt;curr_Y+1;
			    }
			};
			class red_Coin : public coin{
			    public:
			    void set_Curr_Pos_Wt(black_Coin b){
			        weight=b.get_Weight();
			        curr_X=b.get_Curr_X();
			        curr_Y=b.get_Curr_Y();
			    }
			    void move(){
			        cout&lt;&lt;curr_X-1&lt;&lt;","&lt;&lt;curr_Y&lt;&lt;endl&lt;&lt;curr_X+1&lt;&lt;","&lt;&lt;curr_Y&lt;&lt;endl&lt;&lt;curr_X&lt;&lt;","&lt;&lt;curr_Y-1&lt;&lt;endl&lt;&lt;curr_X&lt;&lt;","&lt;&lt;curr_Y+1&lt;&lt;endl&lt;&lt;curr_X-1&lt;&lt;","&lt;&lt;curr_Y-1&lt;&lt;endl&lt;&lt;curr_X+1&lt;&lt;","&lt;&lt;curr_Y-1&lt;&lt;endl&lt;&lt;curr_X-1&lt;&lt;","&lt;&lt;curr_Y+1&lt;&lt;endl&lt;&lt;curr_X+1&lt;&lt;","&lt;&lt;curr_Y+1;
			    }
			};
			//end

			int main()
			{
			    coin *c;
			    black_Coin b;
			    b.get();
			    red_Coin r;
			       //Function to check if the black coin has gained power
			       // It gains power when the number of movements made is greater than or equal to 5
			    if(b.gained_Power())
			    {
			    //Make the black coin as red coin
			        //set weight and current position of black coin to a red coin
			     r.set_Curr_Pos_Wt(b);
			     c = &r;   
			         //Print only weight of the coiin
			     c->print();
			        //Print all possible moves
			     c->move();
			    }
			    else
			    {
			        c = &b;
			            //Print only weight of the coiin
			           c->print();
			               //Print all possible moves
			           c->move();
			    }
			     
			}
	</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>