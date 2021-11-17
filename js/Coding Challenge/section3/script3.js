'use strict';

let mark = {
  'full name': MarkMiller,
  'mass': 78,
  'height': 1.69,
};

let john = {
  'full name': johnSmith,
  'mass': 92,
  'height': 1.95,
};

mark.calcBmi = function () {
  return mark.mass / (mark.height * mark.height);
};
// mark.bmi = mark.calcBmi();

console.log(mark.mass);
console.log(john);
