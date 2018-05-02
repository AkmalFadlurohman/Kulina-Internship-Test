#include <stdio.h>
#include <stdlib.h>
#include <string>
#include <iostream>

using namespace std;

int main() {
	string digits;

	cout << "Masukkan angka : " << endl;
	cin >> digits;

	digits.erase(remove(digits.begin(), digits.end(), '.'), digits.end());

	int zeroCount = digits.length() - 1;
	for (int i=0;i<digits.length();i++) {
		cout << digits[i];
		for (int j=1;j<=zeroCount;j++) {
			cout << '0';
		}
		cout << endl;
		zeroCount--;
	}
}