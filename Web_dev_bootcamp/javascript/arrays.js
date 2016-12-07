
var todos = [];
var answers = prompt("What would you like to get done today?");

while(answers !== "quit"){
     if (answers === "list") {
     console.log(todos);
   } else if(answers === "new") {
     var newItem = prompt("Please enter a new to do item");
     todos.push(newItem);
 }
      answers = prompt("Would you like to add another item?");
}
     console.log("Here is your to do list!");
     console.log(todos);