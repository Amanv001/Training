//                          Lecture: Values and Variables

// let country = "India";
// let continent = "Asia";
let population = 1000000000;

// console.log(country, continent, population)

//                                  Lecture: Data Types

let isIsland = false;
// let language;

// console.log(typeof(country));
// console.log(typeof(continent));
console.log(typeof(population));
console.log(typeof(isIsland));
// console.log(typeof(language));

//                                Lecture: let,const,Variables

const language = "hindi"
const country = "India"
const continent = "Asia"

//                            Lecture: Basic Operators

let firstHalf = population/2;
let secondhalf = population/2;
console.log(firstHalf);
console.log(secondhalf);

population += 1;
console.log(population);

let fPopulation = 600000000;
if (fPopulation > population) {
  console.log("We have less people");
}
else {
  console.log("We have more people");
}

let avgPopulation = 33000000;
if (avgPopulation > population) {
  console.log("We have less people than avg world population ");
}
else {
  console.log("We have more people than avg world population");
}

let description = "Portugal is in Europe, and its 11 million people speak portuguese"

//                                  Lecture: Strings and Template Literals
description = `Portugal is in Europe,
and its 11 million people
speak portuguese`
console.log(description);

//                              Lecture:Taking Decisions: if / else Statements
if (population > 33000000) {
  console.log(`India's population is above average.`);
}
else {
  console.log(`India's population is $(Population-33) million below average.`);
}
population = 13;
population = 130;

//                            LECTURE: Type Conversion and Coercion
console.log(`9` - `5`);
console.log(`9` - `13` + `17`);
console.log(`9` - `13` + 17);
console.log(`123` < 57);
console.log(5+6+`4`+9-4-2);

//                            LECTURE: Equality Operators: == vs. ===
// let numNeighbours = prompt("How many neighbour countries does your country have?");
// numNeighbours = Number(numNeighbours);
// if (numNeighbours == 1) {
//   console.log("Only 1 border");
// }
// else if(numNeighbours > 1){
//   console.log("More than 1 border");
// }
// else {
//   console.log("No borders");
// }

// if (numNeighbours === 1) {
//   console.log("Only 1 border");
// }
// else if(numNeighbours > 1){
//   console.log("More than 1 border");
// }
// else {
//   console.log("No borders");
// }

//                                LECTURE: Logical Operators
if (language === "English") {
  if (population < 5000000) {
    if (isIsland == false) {
      console.log(`You should live in India`);
    }
    else {
      console.log(`India doesn't meet your criteria`);
    }
  }
  else {
    console.log(`India doesn't meet your criteria`);
  }
}
else {
  console.log(`India doesn't meet your criteria`);
}

//                            LECTURE: The switch Statement
switch (language) {
  case 'chinese || mandarin':
    console.log(`Most number of native speakers`);
    break;
  case 'spanish':
    console.log(`2nd place in number of native speakers`);
    break;
  case 'english':
    console.log(`3rd place`);
    break;
  case 'hindi':
    console.log(`Number 4`);
    break;
  case 'arabic':
    console.log(`5th most spoken language`);
    break;
  default:
    console.log(`Great lnguage too :D`);
}

//                                LECTURE: The Conditional (Ternary) Operator
console.log(population>3000000 ? `India's population is above average` : `India's population is below average`);
