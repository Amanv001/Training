"use strict";

let tips = new Array();
const bills = [125, 555, 44];

const calcTip = (bill) => {
  if (bill > 50 || bill < 300) {
    return (bill * 15) / 100;
  } else {
    return (bill * 20) / 100;
  }
};

for (let i = 0; i < bills.length; i++) {
  tips[i] = calcTip(i);
}

console.log(bills);
console.log(tips);
console.log(calcTip(100));
