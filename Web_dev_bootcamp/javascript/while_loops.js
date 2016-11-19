/*
 Instructions
 1. Print all numbers between -10 & 19
 2.Print all even numbers between 10 & 40
 3. Print all odd numbers between 300 & 333
 4. Print all numbers that are divisible  by 5 & 3 that are between 5 & 50
 */
/**********For Loops ***************/

for(var i = -10; i < 20; i++){
    console.log(i);
}

for(var j = 10; j < 40; j+=2){
    console.log(j);
}

for(k=300; k <= 333; k+=1){
    if(k % 2 !== 0){
      console.log(k);

    }
}

for(l=5;  l <= 50; l++){
    if(l % 3 === 0 && l % 5 === 0){
    console.log(l);
    }
}


/*

var count = -10;
while(count <= 19) {
console.log(count);
count++;
}

var varTwo = 12;
while(varTwo < 40){
console.log(varTwo);
varTwo+=2;
}

var varThree =301;
while(varThree < 333){
console.log(varThree);
varThree +=2;
}

var varFour = 5;
while(varFour <= 50){
    if(varFour % 3 === 0 && varFour % 5 === 0){  
      console.log(varFour);  
}
    varFour++; 
}
*/