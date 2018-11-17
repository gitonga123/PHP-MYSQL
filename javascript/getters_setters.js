class Person {
	constructor(name) {
		this.name = name;
	}
	
	get Name() {
		return this.name;
	}

	set Name(name) {
		this.name = name;
	}
}

let person = new Person('John Snow');
console.log(person.Name);
person.Name = 'Daniel Welbeck'; // Danny i meant
console.log(person.Name);
