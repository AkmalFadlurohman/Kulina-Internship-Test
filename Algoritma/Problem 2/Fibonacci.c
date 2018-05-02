#include <stdio.h>
#include <stdlib.h>

int main() {
	int nFibo;
	int firstFibo = 0;
	int secondFibo = 1;

	printf("Masukkan jumlah bilangan fibonacci : ");
	scanf("%d",&nFibo);

	if (nFibo < 1) {
		printf("Jumlah bilangan fibonacci harus lebih dari 0\n");
		exit(0);
	}

	printf("%d bilangan fibonacci pertama : \n", nFibo);
	for (int i = 1; i <= nFibo; i++) {
        printf("%d ", firstFibo);
        int currentFibo = firstFibo + secondFibo;
        firstFibo = secondFibo;
        secondFibo = currentFibo;
    }
	printf("\n");
	return 0;
}