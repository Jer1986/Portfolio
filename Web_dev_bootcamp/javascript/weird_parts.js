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
