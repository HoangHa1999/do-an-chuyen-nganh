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
<<<<<<< HEAD
	cout <<"hello";
=======
	cout << "hello12345";
>>>>>>> 377047b94f40c83036e5ca0d5c40a613cbe4d382
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
