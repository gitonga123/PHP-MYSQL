// the scope of a function is the function in which it is declared, or the entire program
// if is declared at the top,
// That means, function hoisting only works with function declaration and not with function expression.

console.log(square); 
console.log(square(5)); //TypeError: square is not a function

var square = function(n) {
  return n * n;
}

function square (num) {
  return num * num;
}
/*
Exception: TypeError: square is not a function
@Scratchpad/1:6:13
*/