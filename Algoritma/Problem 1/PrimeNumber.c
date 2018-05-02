#include <stdio.h>
#include <stdlib.h>

int isPrimeNumber(int number) {
	int isPrime = 1;
	int i = 2;
	while((i < number) && isPrime) {
		if ((number % i) == 0) {
			isPrime = 0;
		}
		i++;
	}	
	return isPrime;
}

int main() {
	int nPrimeNumber;
	int primeCount = 1;
	int primeIterator = 2;

	printf("Masukkan jumlah bilangan prima : ");
	scanf("%d",&nPrimeNumber);

	if (nPrimeNumber < 1) {
		printf("Jumlah bilangan prima harus lebih dari 0\n");
		exit(0);
	}

	printf("%d bilangan prima pertama : \n", nPrimeNumber);
	while (primeCount <= nPrimeNumber) {
		if (isPrimeNumber(primeIterator)) {
			printf("%d ",primeIterator);
			primeCount++;
		}
		primeIterator++;
	}
	printf("\n");
	return 0;
}

