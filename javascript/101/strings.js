var s = new String('foo');
console.log(s); // {'0': 'f', '1': 'o'}
typeof s; //returns object
var mystring = 'HELLO KENYA';
var x = mystring.length;
mystring[0] = 'N'; // thi has no effects since strings are immutable.
console.log(mystring[0]);
// returns a new string consiting of the string 
// located at the specified offset into the string
console.log(mystring.charAt(6));
// this methods returns an integer between 0 and 65536  
// representing the string at the given index
console.log(mystring.charCodeAt(6));