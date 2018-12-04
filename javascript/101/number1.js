let number = '4.5';
console.log(typeof number);
let floating = parseFloat(number);
console.log(typeof floating);
let integering = parseInt(number);
console.log(typeof integering);
let finiting = isFinite(number);
console.log(finiting);
let isNumber = isNaN(number);
console.log(isNumber);
let safeInteger = Number.isSafeInteger(number);
console.log(safeInteger);
// Returns a string representing the number to a specified precision 
function precise(x) {
	return Number.parseFloat(x).toPrecision(4);
}

console.log(precise(123.456));

function financial(x) {
	return Number.parseFloat(x).toFixed(2);
}
console.log(financial(123.456));