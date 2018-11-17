// converts a list of elements to an array
// and an array to a list
// example without the spread operator

let sumElements = (arr) => {
	console.log(arr);

	let sum = 0;

	for (let element of arr) {
		sum += element;
	}

	console.log(sum);
}

sumElements([1, 3, 4, 5.6, 6]);

// with the spread operator.

let sumNew = (...arra) => {
	console.log(arra);

	let sum = 0;

	for (let element of arra) {
		sum += element;
	}

	console.log(sum);
}

sumNew(4, 5, 6, 7, 10);

console.log(Math.max(4, 5, 6, 7, 10)); // 10
let arr = [4, 5, 6, 7, 10];

console.log(Math.max(...arr)); //10

console.log(Math.max(arr)); // NaN