'use strict'

const bills = [22,295,176,440,37,105,10,1100,86,52];
let tips = new Array();
let totals = new Array();

const calcTip = bill => {
    if (bill>50 || bill<300) {
        return (bill*15)/100;
    }
    else{
        return (bill*20)/100;
    }
}

for (let i = 0; i < bills.length; i++) {
    tips[i] = calcTip(i);
    totals[i] = bills[i] + tips[i];
}

console.log(bills);
console.log(tips);
console.log(totals);