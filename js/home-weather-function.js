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
