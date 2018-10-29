let arr = [1, 2, 3, 4, 5, ,6];

let modiefiedArray = arr.map(function (element, index, arr) {
	return element * 10;
});

// second and thir paremeter are optional
let modifiedArray = arr.map(function (element) {
	return element * 10;
});

// using array functions

let modifiedArrays = arr.map((element, index) => {
	//console.log("index " + index);

	return element * 10;
});

// simpler
let modiefiedArr = arr.map(element => element * 10);

console.log(modiefiedArr);