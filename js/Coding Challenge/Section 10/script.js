'use strict';

const poll = {
    question: "What is your favourite programming language?",
    options: ["0: JavaScript", "1: Python", "2: Rust", 
    "3: C++"],
    // This generates [0, 0, 0, 0]. More in the next section!
    answers: new Array(4).fill(0),
    registerNewAnswer(){
        const input = prompt(`What is your favourite programming language?
        0: JavaScript
        1: Python
        2: Rust
        3: C++
        (Write option number)`)

        this.answers[input] = 1;
        console.log(this.answers);
    },
    displayResults(type = 'array'){
        if (type === 'array') {
            console.log(this.answers);
        }
        else if(type === 'string'){
            console.log(`poll results are ${this.answers.join(', ')}`);
        }
    }
    };

    // console.log(poll);
    document.querySelector(".poll").addEventListener("click",poll.registerNewAnswer.bind(poll));
    poll.displayResults.call({answers:[5,2,5]},'string');
    poll.displayResults.call({answers: [1,5,6,3,6,2]});