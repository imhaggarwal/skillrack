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
		<h2> Overload Polynomial</h2>
		<br>Define a class Polynomial that represents a polynomial of degree ‘n’. Overload the operators >>, <<, + to read input, print output, add two polynomials. Also overload pre increment and post increment (++) so that it adds a new term which has the exponent one more than   the highest exponent  of the polynomial and the coefficient one more  than the coefficient of the highest power of the polynomial.  (i.e.) if polynomial p1 is x^3 + 4x^2 + 3  then p1++ should be 2x^4 + x^3 + 4x^2 + 3 .  Given two polynomials p1,p2, preincrement (p1+p2) is got by  preincrementing the individual polynomials and then adding those incremented ones. Postincrement (p1+p2) is got by adding the polynomials and then incrementing the polynomial.<br><br>
		Note: This question doesn`t makes any sense at all for the ++ operators
		<br><br>
		<pre>
			#include&lt;iostream>
			using namespace std;
			class term
			{
				public:
				int coeff;
				int expo;
				friend istream& operator>>(istream&,term&);
				friend ostream& operator&lt;&lt;(ostream&,term&);
			};
			class poly
			{
				int num;
				term *terms;
				public:
				//default constructor
				// allocate memory for 20 terms
				poly();
				//parameterized constructor
				//allocate memory as per user input
				poly(int);
				poly(poly&);
				poly operator+(poly&);
				poly operator++();
				poly operator++(int);
			    //Assignment operator overloading
				poly& operator=(const poly&);
				friend istream& operator>>(istream&,poly&);
				friend ostream& operator&lt;&lt;(ostream&,poly&);
			};

			//start
			poly::poly(){
			    terms= new term[20];
			    num=0;
			}
			poly *p0, *p1;
			poly::poly(int m){}
			poly::poly(poly &p){}
			istream& operator>>(istream &in, poly &p){
			    in>>p.num;
			    for(int i=0; i&lt;p.num; i++)
			        in>>p.terms[i].coeff>>p.terms[i].expo;
			    p0=&p;
			    return in;
			}
			poly poly::operator+(poly &p){
			    poly pol;
			    pol=p;
			    int i, j, f, n=pol.num;
			    for(i=0; i&lt;n; i++)
			        for(j=0; j&lt;num; j++){
			        if(pol.terms[i].expo==terms[j].expo)
			            pol.terms[i].coeff+=terms[j].coeff;
			        }
			    for(i=0; i&lt;num; i++){
			            f=0;
			        for(j=0; j&lt;n; j++)
			        if(pol.terms[j].expo==terms[i].expo)
			            f++;
			        if(!f)
			            pol.terms[pol.num++]=terms[i];
			    }
			    return pol;
			}
			poly poly::operator++()
			{
				int i, e=0;
				for(i=1;i &lt; num;i++)
				if(terms[i].expo>terms[e].expo)
			        e=i;
				terms[num].expo=terms[e].expo+1;
				terms[num++].coeff=terms[e].coeff+1;
				e=0;
				p1=this;
				poly g;
				g=*p0;
				for(i=1;i &lt;g.num;i++)
				if(g.terms[i].expo>g.terms[e].expo)
			        e=i;
				g.terms[g.num].expo=g.terms[e].expo+1;
				g.terms[g.num++].coeff=g.terms[e].coeff+1;
				poly p2;
				p2=*this+g;
			    return p2;
			}
			poly poly :: operator++(int)
			{
			    int i, e=0;
			    *this=*p1;
				for(i=1;i &lt; num;i++)
				if(terms[i].expo>terms[e].expo)
			        e=i;

				terms[num].expo=terms[e].expo+1;
				terms[num++].coeff=terms[e].coeff+1;
			    return *this;
			}
			poly& poly :: operator = (const poly& p)
			{
			    num=p.num;
			    for(int i=0; i&lt;num; i++)
			        terms[i]=p.terms[i];
			    return *this;
			}
			ostream& operator&lt;&lt;(ostream& out,poly& pol)
			{
			    int i=0,j;
			    term t;
				for(;i &lt; pol.num-1;i++)
				for(j=i+1;j &lt; pol.num;j++)
				if(pol.terms[i].expo&lt;pol.terms[j].expo)
				{
					t=pol.terms[i];
					pol.terms[i]=pol.terms[j];
					pol.terms[j]=t;
				}
				for(i=0;i &lt; pol.num;i++)
				out&lt;&lt;pol.terms[i].coeff&lt;&lt;endl&lt;&lt;pol.terms[i].expo&lt;&lt;endl;
			}

			//end

			int main()
			{
				poly p1,p2,p3;
				poly p4(5),p5(p4);
				poly p6,p7;
				cin>>p1>>p2;
				p3 = p1+p2;
				cout&lt;&lt;p3;
				p7=++p1;
				cout&lt;&lt;p7;
				p2++;
				cout&lt;&lt;p2;
			}
		</pre>
	</div>
	<p>Follow us at:<br><br><a href="http://www.facebook.com/doctorcodes/">Facebook.com/DoctorCodes</a><br><a href="http://www.youtube.com/doctorcodes">Youtube.com/DoctorCodes</p>
<?php include './adCode.php'; ?>
<?php include './adCode.php'; ?>
</body>
</html>