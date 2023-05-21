document.getElementById('fetchButton').addEventListener('click', function() {
	fetch("https://quotes15.p.rapidapi.com/quotes/random/?language_code=en", {
	  "method": "GET",
	  "headers": {
		"x-rapidapi-host": "quotes15.p.rapidapi.com",
		"x-rapidapi-key": "bf2f39f478msh414bfdf4124359bp12a043jsnb4e57f970d73"
	  }
	})
	.then(response => response.json())
	.then(response => {
	  console.log(response);
	  document.getElementById('quote').innerHTML = response.content;
	  document.getElementById('author').innerHTML = '- ' + response.originator.name + ' -';
	})
	.catch(err => {
	  console.log(err);
	});
  });