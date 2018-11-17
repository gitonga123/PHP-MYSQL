// filters an array based on some condition.

let arr = [1, 2, 3, 4, 5, ,6];

let modifiedArr = arr.filter(function (element, index, arr) {
	return element % 2 == 0;
});

let modifiedArray = arr.filter((element, index) => element % 2 == 0);
console.log(modifiedArray);