// javascript promise\
// they are objects that hellps to do async operations
 const apiCall = new Promise(function (resolve, reject) {
 	var request = new XMLHttpRequest();
 	request.open('GET', 'https://api.github.com/users/gitonga123');
 	request.onload = function () {
 		if (request.status == 200) {
 			resolve(request.response);
 		} else {
 			reject(Error(request.statusText));
 		}
 	}

 	request.send();
 });

 apiCall.then(function(x) {
 	document.getElementById('response').innerHTML = x;
 }).catch(function(x) {
 	document.getElementById('response').innerHTML = x;
 });