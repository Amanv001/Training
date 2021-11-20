'use strict';

const game = {
    team1: 'Bayern Munich',
    team2: 'Borrussia Dortmund',
    players: [
        [
        'Neuer',
        'Pavard',
        'Martinez',
        'Alaba',
        'Davies',
        'Kimmich',
        'Goretzka',
        'Coman',
        'Muller',
        'Gnarby',
        'Lewandowski',
        ],
        [
        'Burki',
        'Schulz',
        'Hummels',
        'Akanji',
        'Hakimi',
        'Weigl',
        'Witsel',
        'Hazard',
        'Brandt',
        'Sancho',
        'Gotze',
        ],
    ],
    score: '4:0',
    scored: ['Lewandowski', 'Gnarby', 'Lewandowski',
    'Hummels'],
    date: 'Nov 9th, 2037',
    odds: {
    team1: 1.33,
    x: 3.25,
    team2: 6.5,
    },
};

// Challenge Solution

console.log(1);
// const goalPlayers = [...game.scored];
// console.log(goalPlayers);

for(const [i,player] of game.scored.entries()){
    console.log(`Goal ${i+1}: ${player  }`);
};

console.log(2);
let avg = 0;
const odds = Object.values(game.odds);
for(const odd of odds){
    avg += odd;
};
avg /= odds.length;
console.log(avg);

console.log(3);
for(const [team,odd] of Object.entries(game.odds)){
    const teamStr = team==='x'? 'draw:' : `victory ${game[team]}:`
    console.log(`odd of ${teamStr} ${odd}`);
}

console.log(4);
const scorers = {

}
const p = [...game.scored];
console.log(p);
