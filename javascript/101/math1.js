// math.abs returns then absolute value of a number
function difference(a, b) {
	return Math.abs(a - b);
}

console.log(difference(4, 5));

// returns the sine of a number
function getCircle(radians, radius) {
	return Math.sin(radians) * radius;
}

console.log(getCircle(5, 10));
console.log(getCircle(30, 5));
console.log(Math.sin(60));
console.log(Math.pow(7, 2));
console.log(Math.pow(7, -2));
console.log(5 ** 2)

console.log(Math.exp(0));
console.log(Math.log10(100000));
console.log(Math.log2(8));
// math floor function returns the largest integer less than or equal to 
// a given number
console.log(Math.floor(5.95));
console.log(Math.floor(5.05));
console.log(Math.floor(5.99));
// math ceil function returns the smallest integer greater than or equal to a given number
console.log(Math.ceil(5.95));
console.log(Math.ceil(5.05));
console.log(Math.ceil(5.99));
console.log(Math.ceil(5.01));
var array1 = [2, 3, 1];

console.log(Math.min(...array1));
console.log(Math.max(...array1));

function getRandomInt(max) {
	return Math.floor(Math.random() * Math.floor(max));
}

console.log(getRandomInt(3));
console.log(getRandomInt(1));
console.log(Math.random());
// function returns the value of a number rounded to the nearest integer
console.log(Math.round(5.95), Math.round(5.5), Math.round(5.05));
//  function returns the integer part of a number by removing any fractional digits.
console.log(Math.trunc(13.37));

// square root
console.log(Math.sqrt(205));
// returns cube root

console.log(Math.cbrt(64));
// returns the square root of the sum of square of its arguemts

console.log(Math.hypot(3, 4)); 