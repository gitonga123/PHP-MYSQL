function addSquares(a, b) {
  // square is a closure
  function sqaure(x) {
    return x * x;
  }
  
  return sqaure(a) + square(b);
}

a = addSquares(2, 3);
b = addSquares(3, 4);
c = addSquares(4, 5);

console.log(a);
console.log(c);
console.log(b);


function outside(x) {
  function inside(y) {
    return x + y;
  }
  
  return inside;
}

fn_inside = outside(3);

result = fn_inside(5); // returns 8

result1 = outside(3)(5); // returns 8


console.log(result);
console.log(result1);