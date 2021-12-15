#include <iostream>
using namespace std;
int tong(int a, int b);
{
	return a+b;
}
int hieu(int a, int b);
{
	return	a-b;
}
int tich(int a, int b){
	return a*b;	
}



int main()
{
	int a, b;
	char phepToan;
	cout <<"hello";
	cout << "Nhap so nguyen 1: ";
	cin >> a;
	cout << "Nhap so nguyen 2: ";
	cin >> b;
	cout << "Chon phep toan (+,-) ";
	cin >> phepToan;
	if(pheptoan == "-")
	cout<<"Hieu 2 so la"<<hieu(a,b);
	if(pheptoan == "+")
	cout<< "Tong 2 so la"<<tong(a,b);
	system("pause");
	return 0;
}