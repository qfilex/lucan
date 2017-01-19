
#include <iostream>
#include <iomanip>
#include <math.h>
using namespace std;
double f(double x,double y){
     	return 2*x -cos(y/(pow(6,1/2)));


	}
double Euler(double x,double y,double h){
	return y+h*f(x,y);
	}
double EulerModificata(double x,double x1,double y,double h){
	return y+h*(f(x,y)+f(x1,Euler(x,y,h)))/2;
	}

int main(){
	system("cls");
	double a,b,h,x0,y0,y1,y2,y3;
	cout<<"Introduceti a si b:\n";
	cin>>a>>b;
	cout<<"Introduceti pasul h:\n";
	cin>>h;
	cout<<"Introduceti x0 si y(-1):\n";
	cin>>x0>>y0;
	y1=y2=y3=y0;
	cout<<setw(6)<<"xi"<<"    Metoda          Metoda\n";
	cout<<"     "<<setw(10)<<"Euler"<<"      "
	    <<setw(16)<<"Euler Modificata"<<endl;
	  
	for (;x0-h<b-h;x0+=h){
		y1=Euler(x0,y1,h);
		y2=EulerModificata(x0,x0+h,y2,h);
	
		cout<<setw(6)<<x0+h<<"  "<<setw(10)<<y1<<"  "
		    <<setw(13)<<y2<<endl;
	
		};
}