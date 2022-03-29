/**
 * \file vernam.c
 * \brief Vernam Cipher
 * \author pgah
 * \version 0.2
 *
 * Implementation du chiffrement de Vernam. Ce chiffrement a été prouvé
 * mathématiquement comme sûr en 1940 par Shannon.
 */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void vernam_encipher(char * data, char* mask){
  int i, j;
  for(i = 0; i < strlen(data); i++){
	  printf("%c", ((data[i] + mask[i % strlen(mask)]) % 26 ) + 'A');
  }
  printf("\n");
}

int main(int argc, char ** argv){
  if(argc < 3) { return 1; }

  int data_length = 10;
  char * data = (char*)malloc(data_length);
  strcpy(data, argv[1]);

  char * mask = (char*)malloc(data_length);
  strcpy(mask, argv[2]);

  vernam_encipher(data, mask);

  free (data);
  free (data);

  return 0;
}
