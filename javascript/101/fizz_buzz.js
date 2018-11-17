let counter = 100;

while (counter >= 1) {
	  let message = '';
    if (counter % 3 ===  0)
        message += 'Fizz'

    else if (counter % 5 === 0)
        message += 'Buzz';

    console.log(message || counter);

    counter--;
}