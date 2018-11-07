function UserException(message) {
  this.message = message;
  this.name = 'UserException';
}

UserException.prototype.toString = function() {
  return this.name + ': "' + this.message + '"';
}

throw new UserException('Value too High');

/*
Exception: UserException: "Value too High"
*/