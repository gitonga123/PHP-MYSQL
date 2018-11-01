let counter = 100;

while (counter >= 1) {
    if (counter % 3 ===  0)
        console.log('Fizz');

    else if (counter % 5 === 0)
        console.log("Buzz");

    else if ((counter % 3 === 0) && (counter % 5 === 0))
        console.log("FizzBuzz");
    else
        console.log(counter);

    counter--;
}