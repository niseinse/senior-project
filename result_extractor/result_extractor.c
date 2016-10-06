#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <float.h>

#define MAX 1000

int main(int argc, char* argv[])
{
	// variable definition
	char result_tmp_arr[5][MAX];
	char* string_trim = NULL;
	double result_accuracy_arr[5];
	char* result_building_arr[5];
	int i, j;
	
	// extract raw data
	fgets(result_tmp_arr[0], MAX-1, stdin);
	fgets(result_tmp_arr[0], MAX-1, stdin);
	for(i=0; i<5; i++)
	{
		fgets(result_tmp_arr[i], MAX-1, stdin);
		result_tmp_arr[i][8] = '\0';
		sscanf(result_tmp_arr[i], "%lf", &result_accuracy_arr[i]);
		
		string_trim = strstr(&result_tmp_arr[i][13], " part");
		if(string_trim == NULL)
		{
			string_trim = strstr(&result_tmp_arr[i][13], "\"");
		}
		*string_trim = '\0';
		result_building_arr[i] = &result_tmp_arr[i][13];
	}
	
	// integrate same building data
	for(i=0; i<5; i++)
	{
		for(j=4; j>i; j--)
		{
			if(strcmp(result_building_arr[i], result_building_arr[j]) == 0)
			{
				result_accuracy_arr[i] += result_accuracy_arr[j];
				result_accuracy_arr[j] = 0;
			}
		}
	}
	
	// print effective data
	for(i=0; i<5; i++)
	{
		if(result_accuracy_arr[i] > DBL_EPSILON)
		{
			printf("%s\n%.4lf\n", result_building_arr[i], result_accuracy_arr[i]);
		}
	}
	
	return 0;
}