// defining a class in javascript
class Rectangle {
	constructor(height, width) {
		this.height = height;
		this.width = width;
	}

	// getter
	get area() {
		return this.calcArea();
	}

	// method
	calcArea() {
		return this.height * this.width;
	}

	static distance(a, b) {
		const dx = a.height - b.height;
		const dy = a.width - b.width;


		return Math.hypot(dx, dy);
	}
}

const square = new Rectangle(5, 5);
const rect = new Rectangle(10, 10);
console.log(square.area);

console.log(Rectangle.distance(square, rect));