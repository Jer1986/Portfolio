// function 1 to creat a function that returns true is the number is even false if it is not isEven( )
// a function that takes a single number and returns the factorial of that number factorial()
// kebab case to snake case kebabToSnake()

function isEven(num){
   if(num % 2 === 0){
    return true;
   }else {
    return false;
    }
}
 
// factorial function
function factorial(fac){
  if(fac === 0){
    return 1;
    }else{
        return fac * factorial(fac - 1);
  }
}

// Kebab to Case function
