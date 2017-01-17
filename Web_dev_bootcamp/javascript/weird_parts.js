//
//function largestOfFour(arr) {
//  for(var i = 0; i < arr.length; i++) {
//    for(var j = 0; j < arr[i].length; j++)
//      return arr[i][j];
//   }
//}
//
//largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]);

//function a() {
//  console.log(this);
//  this.newVariable = "Hi there";
//}
//
//a();
//
//console.log(newVariable);
//
//const d = {
//  name: "The D object",
//  log: function() {
//    let thing = this;
//    
//    thing.name = "Object has a new name";
//    console.log(this);// this is pointing at the object D
//    
//    let giveName = function(newName) {
//      thing.name = newName;
//    }
//      giveName("This object has another new Name");
//      console.log(thing);
//  }
//}
//
//d.log();


const firstName = "Jose";
(function(name) {
  let greeting = "Hello ";
  console.log(greeting + " " + name); 
}(firstName));// example of an Immediately Invoked Function Expression (IFFE)




