"use strict";

const calcAverage = (s1, s2, s3) => {
  return (s1 + s2 + s3) / 3;
};

const checkWinner = (avgDolphins, avgKoalas) => {
  if (avgDolphins > avgKoalas) {
    console.log(`Dolphins win (${avgDolphins} vs ${avgKoalas})`);
  } else {
    console.log(`Koalas win (${avgKoalas} vs ${avgDolphins})`);
  }
};

const dolphinAvg = calcAverage(44, 23, 71);
const koalasAvg = calcAverage(65, 54, 49);
checkWinner(dolphinAvg, koalasAvg);
