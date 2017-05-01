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
		<h2> Find a Route</h2>
		<div>Rahul is fond of travelling and he visits cities and towns in the country whenever possible. All cities in the country are not connected to each other. Given the details of the cities that are connected to each city, source city from where he begins the travel and the destination city of the travel, design an algorithm and write a C++ code to list down the cities in the travel. Rahul must not visit a city more than once. When the destination city name is in the connected cities of the current city, chose it and complete the route. When the destination city name is not in the list of connected cities to current city and there are more than one city from the current city, he sorts the city names and include the first minimum city name that is not yet visited. For example, if the connection between the cities are given as follows, source city as A and destination city as F the list of cities in the travel are A, B, D and F.</div>
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			#include&lt;string>
			#include&lt;vector>
			#include&lt;map>
			#include&lt;algorithm>
			class travel
			{
			    int num_Of_Cities;
			    map&lt;string,vector&lt;string> > city_Connection;
			    string source;
			    string destn;
			    vector&lt;string> route;
			    public:
			    //In this function form the map that depicts the
			    // the connection of cities,key is the name of the
			    // city and value is a vector of cities that are
			    // connected to the city
			    void get();
			    void find_Route();
			    void print_Route();
			};

			//start
			void travel::get(){
			    int t, i=0, j;
			    vector&lt;string> s;
			    cin>>num_Of_Cities;
			    for(; i&lt;num_Of_Cities; i++){
			        cin>>source>>t;
			        s.clear();
			        for(j=0; j&lt;t; j++){
			            cin>>destn;
			            s.push_back(destn);
			        }
			        sort(s.begin(),s.end());
			        cout&lt;&lt;endl;
			        city_Connection[source]=s;
			    }
			    cin>>source>>destn;
			    route.push_back(source);
			}
			void travel::find_Route(){
			    vector&lt;string> s;
			    int j, k;
			    while(source!=destn){
			        j=0;
			        s=city_Connection[source];
			        for(k=0; k&lt;route.size(); k++)
			        if(route[k]==s[j]){
			            j++;
			            k=0;
			        }
			        for(k=0; k&lt;s.size(); k++)
			        if(destn==s[k])
			        j=k;
			        route.push_back(s[j]);
			        source=s[j];
			    }
			}
			void travel::print_Route(){
			    for(int i=0; i&lt;route.size(); i++)
			    cout&lt;&lt;route[i]&lt;&lt;endl;
			}
			//end

			int main()
			{
			    travel t;
			    t.get();
			    t.find_Route();
			    t.print_Route();
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include '../adCode.php'; ?>
<?php include '../adCode.php'; ?>
</body>
</html>