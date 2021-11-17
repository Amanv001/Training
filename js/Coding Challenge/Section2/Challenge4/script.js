//                          Challenge4
let bill = 275;
let tip = (bill>50 || bill<300) ? bill * (15/100) : bill * (20/100);
let total = bill + tip;
console.log("The bill was "+bill+", the tip was "+tip+" and the total value "+total);
