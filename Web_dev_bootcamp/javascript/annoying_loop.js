/*
var answer = prompt("Are we there yet?");
while( answer !== "yes"){
    var answer = prompt("Are we there yet?");
}
alert("Yes we made it!");
*/
// version 2
var answerOne = prompt("Are we there yet?");
while (answerOne.indexOf("yes") === -1){
    var answerOne = prompt("Are we there yet?");
}
alert("Yes we made it!");
