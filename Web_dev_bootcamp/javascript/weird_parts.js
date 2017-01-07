//example of the scope chain in a lexical environment
function b() {
   //let myVar;
   console.log(myVar);
}

function a() {
   let myVar = 2;
   //console.log(myVar);
     b();
}

const myVar = 1;
console.log(myVar);
a();
/*********************/
console.log(3 < 2 < 1); //this is true because 3 is less than 2 is false and false is less than one