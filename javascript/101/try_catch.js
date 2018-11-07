function getMonthName(mo) {
  mo = mo -1 // adjust month number for array index
  var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
                'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  if (months[mo]) {
    return months[mo];
  } else {
    throw 'Invalid Month Number';
  }
}

try {
  myMonth = '4r';
  monthName = getMonthName(myMonth);
  console.log(monthName);
} catch(e) {
  monthName = 'unknown';
  console.log(e)
}
