//                              Challenge3

let dScore1 = 97;
let dScore2 = 112;
let dScore3 = 101;

let kScore1 = 109;
let kScore2 = 95;
let kScore3 = 106;

let dAvgScore = (dScore1+dScore2+dScore3)/3;
let kAvgScore = (kScore1+kScore2+kScore3)/3;

if (dAvgScore >= 100 && kAvgScore >= 100) {
  console.log("It's Draw");
}
else if(dAvgScore > kAvgScore){
  console.log("Team Dolphins Wins.");
}
else if(dAvgScore < kAvgScore){
  console.log("Team Koalas Wins.");
}

// if (dAvgScore > kAvgScore) {
//   if (dAvgScore == 100) {
//     console.log("Team Dolphins wins");
//   }
// }
// else if(dAvgScore < kAvgScore) {
//   if (kAvgScore == 100) {
//     console.log("Team Koalas wins");
//   }
// }
// else{
//   console.log("It's Draw");
// }
