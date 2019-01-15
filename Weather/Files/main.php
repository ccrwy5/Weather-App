<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="https://www.chrisrehagen.com/Weather">Weather App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" id="currentNavLink" href="#current">Current Weather <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="hourlyNavLink" href="#hourly">Hourly Forecast</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="weeklyNavLink" href="#weekly">Weekly Forecast</a>
            </li>

        </ul>
    </div>
</nav>


<main class="container text-center">
    <h1 class="display-1">Weather App</h1>

    <form class="form-inline" method="post">
       
        <div class="form-group mx-auto my-5">

            <label class="sr-only" for="location">Enter a location</label>

            <input type="text" class="form-control" id="location" placeholder="Location" name="location" style="width: 30vw">

            <button class="btn btn-primary" type="submit" id="button" onclick="showLinks()">Search</button>

        </div>
    </form>
    

    <?php

    if( isset($_POST['location']))
    {
        if($location_data->status === 'OK')
        {
            echo '<h2 class="display-4 my-5">Results for '.$place.'</h2>';    
            require 'forecast-current.php';
            require 'forecast-hourly.php';
            require 'forecast-daily.php'; 
        } else{
            echo '<h2>Location Not Found</h2>';
        }
    }
    ?>





</main>