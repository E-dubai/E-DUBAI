<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML ="Time: "+
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body onload="startTime()">

<div id="txt"></div>

<a href="http://www.accuweather.com/en/us/new-york-ny/10007/weather-forecast/349727" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1483613588269" class="aw-widget-current"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awcc1483613588269"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>

<script type="text/javascript" src="//cdn.aerisjs.com/aeris.js"></script>
<script type="text/javascript">
    var map = new aeris.maps.Map('map-canvas', {
        center: [45, -90],
        zoom: 12
    });
    var radarLayer = new aeris.maps.layers.Radar();

    radarLayer.setMap(map);
</script>
Weather is just a sample that we are planning to put advance weather measure and location based alert system and lots more , but due to api cost and time limits we are limited to use free widgets for now.<br>
Our weather measure will be Real-time alert , monitor , detection and prevention , crop guide and suggestion based on big data and AI.<br>
Build By Abhik & Team .