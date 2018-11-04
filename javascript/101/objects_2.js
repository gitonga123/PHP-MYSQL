// object update
var stooge = {
  firstName: 'Jerome',
  lastName: 'Howard',
  equipment: {
    model: 'Boeing 777',
    status: 'new',
    time: '11:00'
  }
}

console.log(stooge.firstName);
console.log(stooge.lastName);
console.log(stooge.equipment.time);
stooge['mildleName'] = 'Lester';
stooge.equipment.return_time = '13:00'

console.log(stooge.mildleName);
console.log(stooge.equipment.return_time);

// objects are passed around by reference never copied
var x = stooge;
x.nickname = 'Curly';
var nick = stooge.nickname;

console.log(x.nickname);
console.log(nick);
console.log(x.equipment.time);

var a = {}, b = {}, c = {}; // they refer to very different objects
var a = b = c = {}; // they refer to same empty object
stooge.payment = {
  status: 'paid'
};
stooge.payment.status = "paid";
stooge.payment.amount = 5000;
var amount_paid = stooge.payment.amount || 5000;
console.log(amount_paid);

console.log(stooge.payment.status);

// using prototype
if (typeof Object.create !== 'function') {
  Object.create = function(o) {
    var F = function () {};
    f.prototype = o;
    return new F();
  };
}

var another_stooge = Object.create(stooge);
console.log(another_stooge);
stooge.profession = 'actor';
console.log(another_stooge.profession);

// check if a certain object has a given property
console.log(stooge.hasOwnProperty('firstName'));

console.log(stooge.equipment.hasOwnProperty('status'));

console.log(stooge.hasOwnProperty('status'));

console.log(another_stooge.hasOwnProperty('payment'));

for (stooged of stooges) {
  console.log(stooged);
}