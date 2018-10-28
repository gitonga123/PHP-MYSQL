// let is similar to var but it has scope./
if (true) {
	let a = 40;
	var b = 35;

	console.log(a); // 40
	console.log(b); // 35
}

console.log(a); // undefined out of scope.
console.log(b); // 35

const = 50;
a = 60 ; // shows error. you cannot change the value of const
