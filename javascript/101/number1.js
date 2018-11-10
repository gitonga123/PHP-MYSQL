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

function precise(x) {
	return Number.parseFloat(x).toPrecision(4);
}

console.log(precise(123.456)); 