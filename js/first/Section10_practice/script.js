'use strict';

const bookings = [];
const createBooking = (flightNum, numPassanger = 1, price = 1) => {
    const booking = {
        flightNum, numPassanger, price,
    };
    console.log(typeof(booking));
    console.log(booking);
    bookings.push(booking);
};
createBooking(22321);

const greet = greeting => name => console.log(`${greeting} ${name}`);

const greetHey = greet('Hey')('Aman');