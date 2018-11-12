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
// codePointAt method returns a non-negative integer that is the
// Unicode point value
console.log(mystring.codePointAt(6));
// the indexof method returns the index within the calling
// string object of the first occurrence of the specified values,
// starting  the search at fromIndex.
// case sensitive
var searchTearm = 'KEN';
var indexOfFirst = mystring.indexOf(searchTearm, 5);
console.log(indexOfFirst);
// returns the index within the calling String object of the
// last occurrence of the specified values, searches backwards
console.log(mystring.lastIndexOf(searchTearm));
