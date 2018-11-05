// a method can use this to access the object that it ca retrieve values from
// the binding of this to the object happen at invocation time.
var myObject = {
	value: 0,
	increment: function (inc) {
		this.value += typeof inc === 'number' ? inc : 1;
	}
};

myObject.increment();
console.log(myObject.value);

myObject.increment(2);
console.log(myObject.value);