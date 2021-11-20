let js = "amazing";

if (js === "amazing") {
  // alert("Yay! i'm into JavaScript");
}

// alert(49+32+-9+44);

const users = [{name : 'Aman', job : 'developer'}];
// console.log(users);
console.log(users[0]?.email??"object not found");

const question = new Map([
  ['question','which is the best programming language in the world'],
  [1,'C'],
  [2,'Java'],
  [3,'Javascript'],
  ['correct',3],
  ['true','correct'],
  ['false','incorrect'],
]);

console.log(question.get('question'));
for(const [key,value] of question){
  if(typeof key === 'number') console.log(`Answer ${key}: ${value}`);
}
const ans = prompt('Your Answer');
if(ans == [question.get('correct')]){
  console.log([question.get('true')]);
}
else{
  console.log([question.get('false')]);
}