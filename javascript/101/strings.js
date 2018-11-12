var s = new String('foo');
console.log(s); // {'0': 'f', '1': 'o'}
typeof s; //returns object
var mysting = 'HELLO KENYA';
var x = mystring.length;
mystring[0] = 'N'; // thi has no effects since strings are immutable.
console.log(mystring[0]);