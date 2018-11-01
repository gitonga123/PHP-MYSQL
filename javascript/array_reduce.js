// aggregate all the elements of an array and return a single value
let arr = [1, 2, 3, 4, 5, ,6];

// 
let total = arr.reduce(function(sum, element, index, arr) {
	return sum + element;
});

// 
let totalSum = arr.reduce(function(sum, element, index, array) {
	console.log(sum +" + " + element + " = " + (sum + element));
	return sum + element;
});
console.log("Total = " +totalSum);