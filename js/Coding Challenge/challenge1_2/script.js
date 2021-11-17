//                        Challenge1
let markMass = 78;
let markHeight = 1.69;
let johnMass = 92;
let johnHeight = 1.95;

let mBmi = markMass/(markHeight*markHeight);
mBmi = mBmi.toFixed(2);
let avgBmi = 18.5
if (avgBmi > mBmi) {
  console.log("Mark: HigherBMI");
}
else {
  console.log("Mark:LowerBMI");
}

let jBmi = johnMass/(johnHeight*johnHeight);
jBmi = jBmi.toFixed(2);
if (avgBmi > jBmi) {
  console.log("John:HigherBMI");
}
else {
  console.log("John:LowerBMI");
}

//                            Challenge2

if (mBmi > jBmi) {
  alert("Mark's BMI(" +mBmi+ ") is higher than john's BMI("+jBmi+").")
}
else {
  alert("John's BMI(" +jBmi+ ") is higher than Mark's BMI("+mBmi+").")
}
