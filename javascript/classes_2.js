class Animal {
	construct(name) {
		this.name = name;
	}

	speak() {
		console.log(this.name + ' makes a noise');
	}
}

class Dog extends Animal {
	constructor(name) {
		super(name);
	}

	speak() {
		console.log(this.name + ' barks.');
	}
}

let a = new Animal('Dog');

let d = new Dog('Tusker');
d.speak();

