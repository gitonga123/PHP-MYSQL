function myConcat(separator) {
  var result = '';
  var i;
  
  for (i = 1; i < arguments.length; i++) {
    result += arguments[i] + separator;
  }
  
  return result;
}

colors = myConcat(' ', 'red', 'orange', 'blue');

console.log(colors);