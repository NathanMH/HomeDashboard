function replace_quote() {

    var request = new XMLHttpRequest();
    request.onload = function() {
	var fileContent = this.responseText;
	var fileContentLines = fileContent.split( '\n' );
	var quoteIndex = get_even_index(fileContentLines.length - 1);
	var randomQuote = fileContentLines[quoteIndex];
	var authorIndex = quoteIndex + 1;
	var author = fileContentLines[authorIndex];
	console.log(fileContentLines.length);
	console.log(quoteIndex);
	console.log(authorIndex);
	
	document.getElementById("daily_quote").innerHTML = randomQuote;
	document.getElementById("daily_quote_author").innerHTML = author;
    };
    request.open("GET", "assets/quotes-list.txt", true);
    request.send();
}

function replace_pun() {

    var request = new XMLHttpRequest();
    request.onload = function() {
	var fileContent = this.responseText;
	var fileContentLines = fileContent.split( '\n' );
	var punIndex = get_even_index(fileContentLines.length - 1);
	var randomQuote = fileContentLines[punIndex];
	var authorIndex = punIndex + 1;
	var author = fileContentLines[authorIndex];
//	console.log(fileContentLines.length);
//	console.log(quoteIndex);
//	console.log(authorIndex);
	
	document.getElementById("daily_quote_pun").innerHTML = randomQuote;
	document.getElementById("daily_quote_pun_author").innerHTML = author;
    };
    request.open("GET", "assets/puns-list.txt", true);
    request.send();
}

function get_even_index(max_value) {
    var index = Math.floor(Math.random() * max_value);
    while(index % 2 != 0) {
	index = Math.floor(Math.random() * max_value);
    }
    return index;
}
