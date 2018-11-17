// MAPS hold key value pair. Index are unique in maps;

var newMap = new Map();
newMap.set('name', 'John');
newMap.set('phone', 23456789);
newMap.set('interest', ['Python', 'JAVA', 'PHP']);

console.log(newMap.get('name'));
console.log(newMap.get('phone'));
console.log(newMap.get('interest'));
newMap.size;
newMap.keys();
newMap.values();

for (let key of newMap.keys()) {
	console.log(key);
}

var newSet = new Set();
newSet.add('a');
newSet.add('b');
newSet.add('ab');
newSet.add('a');// adding a duplicate value ignored

for (let element of newSet) {
	console.log(element);
}

console.log(newSet.size);
console.log(newSet.has(1));
console.log(newSet.has('b'));
