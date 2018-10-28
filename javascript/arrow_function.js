// old syntax for writing functions

function oldName () {
	console.log('Hello world ....');
}

// without parameters
var newOne = () => {
	console.log('Hello World .... 2');
}

// with parameters

var newParm = (a, b) => {
	console.log(a + b);
}
oldName();
newOne();
newParm(4, 5);
