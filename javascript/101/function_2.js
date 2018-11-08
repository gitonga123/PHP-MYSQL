var num1 = 20, num2 = 3, name = 'ChamaK';

function multiply() {
  return num1 * num2;
}

console.log(multiply()); // return 60

// a nested function example

function getScore() {
  var num1 = 2, num2 = 3;
  
  function add() {
    return name + ' scored ' + (num1 + num2);
  }
  
  return add();
}

console.log(getScore()); // returns "Chamak Scored 5";