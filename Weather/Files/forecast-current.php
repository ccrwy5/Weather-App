<div id="current" onload="showLinks()"></div>
<div class="card p-4" style="margin: 0 auto; max-width: 320px;">

    <h2>Current Forecast</h2>
    <h3 class="display-2"><?php echo $temperature_current;?>&deg </h3>
    <h3>Humidity: <?php echo $humidity_current ?>%</h3>
    <p class="lead" id="summary"><?php echo $summary_current;?></p>
    <p class="lead">Wind Speed: <?php echo $windspeed_current; ?> <abbr title = "miles per hour">MPH</abbr></p>
</div>



<!--

<script>

    var testing = document.getElementById("summary").innerHTML;
    console.log(testing);
    if(testing === "Clear"){
        document.body.style.backgroundImage = "url('Images/clear.jpg')";
    }else if(testing === "Party Cloudy"){
        document.querySelector('.card').style.backgroundColor = "blue";
    }else if(testing === "Overcast"){
        document.querySelector('.card').style.backgroundColor = "green";
    }else if(testing === "Light Rain"){
        document.querySelector('.card').style.backgroundColor = "yellow";
    }else if(testing === "Snow"){
        document.querySelector('.card').style.backgroundColor = "cyan";
    }else if(testing === "Foggy"){
        document.querySelector('.card').style.backgroundColor = "grey";
    }
</script>
-->
