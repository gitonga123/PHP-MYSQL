// syntax
// new Date(year, monthIndex, [, index [, hours, [, minutes]]]);
var dateObjectName = new Date('January 04, 1992 03:24:00');
console.log(dateObjectName);
console.log(Date.length);
console.log(dateObjectName.getDate());
console.log(dateObjectName.getDay());
console.log(dateObjectName.getFullYear());
console.log(dateObjectName.getHours());
console.log(dateObjectName.getMilliseconds());
console.log(dateObjectName.getMinutes());
console.log(dateObjectName.getSeconds());
console.log(dateObjectName.getTime());
console.log(dateObjectName.getTimezoneOffset());
console.log(dateObjectName.getYear());

dateObjectName.setDate('30');
dateObjectName.setHours('05');
dateObjectName.setFullYear('1995');
dateObjectName.setMinutes('35');

console.log(dateObjectName);
console.log(dateObjectName.toTimeString());