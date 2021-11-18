'use strict';

let mark = {
  'fullname': 'MarkMiller',
  'mass': 78,
  'height': 1.69,
};

let john = {
  'full name': 'johnSmith',
  'mass': 92,
  'height': 1.95,
};

mark.calcBmi = function () {
  return mark.mass / (mark.height * mark.height);
};
mark.bmi = mark.calcBmi();

john.calcBmi = function () {
  return john.mass / (john.height * john.height);
};
john.bmi = john.calcBmi();

console.log(mark);
console.log(john);
