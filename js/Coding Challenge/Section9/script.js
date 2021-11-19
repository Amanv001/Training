//                              Coding Challenge1
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

// challenge solution

console.log("1");
// const player1 = {...game.players[0]};
// console.log(player1);
// const player2 = {...game.players[1]};
// console.log(player2);
const [player1, player2] = game.players;
console.log(player1,player2);

console.log("2");
const [gk, ...fieldPlayers] = player1;
console.log(gk,fieldPlayers);

console.log(3);
const allPlayers = [...player1,...player2]
console.log(allPlayers);

console.log(4);
const players1Final = [...player1,'Thiago','Coutinho','Perisic'];
console.log(players1Final);

console.log(5);
const {odds: {team1, x:draw, team2},} = game;
console.log(team1,draw,team2);

console.log(6);
const printGoals = function(...players){
    console.log(`${players.length} goals were scored`);
}
printGoals('Lewandowski', 'Gnarby');

console.log(7);
team1 > team2 && console.log("team1");
team1 < team2 && console.log("team2");