'use strict';

//                          LECTURE: Functions
function describeCountry(country, population, capitalCity){
  return(`${country} has ${population} million people and its capital city is ${capitalCity}.`);
}

let r1 = describeCountry("India", "10", "Delhi");
console.log(r1);

//                      LECTURE: Function Declarations vs. Expressions
function percentageOfWorld1(population){
  return (population/7900)*100;
}

let r2 = percentageOfWorld1(118);
console.log(`India is about ${r2}% of the world population.`);

const percentageOfWorld2 = function(population){
  return (population/7900)*100;
}
const r3 = percentageOfWorld2(200);
console.log(`India is about ${r3}% of the world population.`);

//                          LECTURE: Arrow Functions
const percentageOfWorld3 = population => (population/7900)*100;
console.log(percentageOfWorld3(300));

//                              LECTURE: Functions Calling Other Functions
const describePopulation = (country, population) =>{
  const per = percentageOfWorld1(population);
  const desc = `${country} has ${population} million people, which is about ${per}% of the world.`;
  console.log(desc);
};
describePopulation('India',40);
describePopulation('China',70);
describePopulation('America',30);

//                                  LECTURE: Introduction to Arrays
const worldPopulation = [120,250,370,450];
if (worldPopulation.length == 4) {
  console.log("true");
}
else {
  console.log("false");
}

const percentages = new Array(4);
percentages[0] = percentageOfWorld1(worldPopulation[0]);
percentages[1] = percentageOfWorld1(worldPopulation[1]);
percentages[2] = percentageOfWorld1(worldPopulation[2]);
percentages[3] = percentageOfWorld1(worldPopulation[3]);
console.log(percentages[0]);
console.log(percentages[1]);
console.log(percentages[2]);
console.log(percentages[3]);

//                              LECTURE: Basic Array Operations (Methods)
const neighbours = ['Nepal','Bhutan','Bangladesh','China'];
console.log(neighbours);
neighbours.push("Utopia");
console.log(neighbours);
neighbours.pop("Utopia");
if (!neighbours.includes("Germany")) {
  console.log("Probably not a central european country.");
}
const index = neighbours.indexOf('China');
neighbours[index] = "Republic of China";
console.log(neighbours);

//                            LECTURE: Introduction to Objects
const myCountry = {
  country : 'India',
  capital : 'Delhi',
  language : 'hindi',
  population : 20,
  neighbours : ['Nepal','Bhutan','China']
};

//                            LECTURE: Dot vs. Bracket Notation
console.log(`${myCountry['country']} has ${myCountry.population} billion ${myCountry['language']} speaking people,
  ${myCountry.neighbours.length} neighbouring countries and a capital called ${myCountry['capital']}.`);
myCountry.population += 2;
console.log(myCountry.population);
myCountry['population'] -= 2;
console.log(myCountry['population']);

//                            LECTURE: Iteration: The for Loop
for (var i = 0; i < 50; i++) {
  console.log("Voter 1 is currently voting");
}

//                              LECTURE: Looping Arrays, Breaking and Continuing
let population2 = new Array();
for (var i = 0; i < worldPopulation.length; i++) {
  population2[i] = percentageOfWorld1(worldPopulation[i]);
}
console.log(population2);

//                          LECTURE: Looping Backwards and Loops in Loops
const listOfNeighbours = [['Canada','Mexico'],['Spain'],['Norway','Sweden','Russia']];
for (var i = 0; i < listOfNeighbours.length; i++) {
  for (var j = 0; j < listOfNeighbours[i].length; j++) {
    console.log(`'Neighbour: ${listOfNeighbours[i][j]}' for each country.`);
  }
}

//                    LECTURE: The while Loop
const percentages3 = [];
let k = 0;
while (k < worldPopulation.length) {
  const percent = percentageOfWorld1(worldPopulation[i]);
  percentages3.push(percent);
  k++;
}
console.log(percentages3);
