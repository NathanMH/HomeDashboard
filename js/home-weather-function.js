/*
Copyright (c) 2016 James Fleeting, http://jamesfleeting.com/

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

$(document).ready(function() {
    $.simpleWeather({
	location: 'Montreal, QC',
	woeid: '',
	unit: 'c',
	success: function(weather) {
	    html =  '<h2><img style="float:left;" height="90px" src="assets/weather-icons/'+weather.code+'.png">Current: <i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
	    html += '<h3>L: <i class="icon-'+weather.code+'"></i> '+weather.low+'&deg;'+weather.units.temp+' &nbsp;&nbsp; | &nbsp;&nbsp; H: <i class="icon-'+weather.code+'"</i> '+weather.high+'&deg;'+weather.units.temp+'</h3>';

	    // Forecast

	    html += '<table style="width:60%;"><tr><td>Forecast: </td><td>'+weather.forecast[0].day+'</td><td>'+weather.forecast[1].day+'</td><td>'+weather.forecast[2].day+'</td><td>'+weather.forecast[3].day+'</td><td>'+weather.forecast[4].day+'</td></tr><tr><td>High: </td><td>'+weather.forecast[0].high+'</td><td>'+weather.forecast[1].high+'</td><td>'+weather.forecast[2].high+'</td><td>'+weather.forecast[3].high+'</td><td>'+weather.forecast[4].high+'</td></tr><tr><td>Low: </td><td>'+weather.forecast[0].low+'</td><td>'+weather.forecast[1].low+'</td><td>'+weather.forecast[2].low+'</td><td>'+weather.forecast[3].low+'</td><td>'+weather.forecast[4].low+'</td></tr></table>';
	    
	    $("#weather").html(html);
	},
	error: function(error) {
	    $("#weather").html('<p>'+error+'</p>');
	}
    });
});
