/*
 Instructions
 1. Print all numbers between -10 & 19
 2.Print all even numbers between 10 & 40
 3. Print all odd numbers between 300 & 333
 4. Print all numbers that are divisible  by 5 & 3 that are between 5 & 50
 */

var count = -10;
while(count < 19) {
console.log(count);
count++;
}
/***************/

var varTwo = 12;
while(varTwo < 40){
console.log(varTwo);
varTwo+=2;
}
/*********/
var varThree =301;
while(varThree < 333){
console.log(varThree);
varThree +=2;
}
/**********/
var varFour = 5;
while(varFour <= 50){
    if(varFour % 3 === 0 && varFour % 5 === 0){
      console.log(varFour);  
    }
    varFour++; 
}