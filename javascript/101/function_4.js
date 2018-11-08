// If an enclosed function defines a variable with the same name
// as the name of a variable in the outer scope,
// there is no way to refer to the variable in the outer scope again.
var createPet = function(name) {
  var sex;
  
  return {
    setName: function(newName) {
      name = newName;
    },
    getName: function() {
      return name;
    },
    getSex: function() {
      return sex;
    },
    
    setSex: function(newSex) {
      if (typeof newSex === 'string' && (newSex.toLowerCase() === 'male' || 
                                        newSex.toLowerCase() === 'female' )) {
        sex = newSex;
      }
    }
  }
}

var pet = createPet('Tusker');
console.log(pet.getName()); // Tusker;
pet.setName('Oliver M');
pet.setSex('male');
console.log(pet.getSex()); //male
console.log(pet.getName()); // Tusker
