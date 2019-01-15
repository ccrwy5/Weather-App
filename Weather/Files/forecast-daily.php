<h1 class="display-3" id="weekly">Weekly Forecast</h1>



<div class="row">


    <?php

    $i = 0;

    foreach($forecast->daily->data as $day):

    $average_temp = round((round($day->temperatureHigh)+round($day->temperatureLow))/2);

    ?>

    <div class="col-12 col-md-3 mb-4">

        <div class="card p-4 mb-4 h-100">
            <h2 class="h4">
                <?php echo date("l", $day->time); ?>
            </h2>
            <h3 class="display-4"><?php echo $average_temp ?>&deg;</h3>
            <div class="d-flex justify-content-between">
                <p class="lead">
                    Hi <?php echo round($day->temperatureHigh); ?>&deg;
                </p>
                <p class="lead">
                    Lo <?php echo round($day->temperatureLow); ?>&deg;
                </p>
            </div>
            <p class="lead">Humidity
                <?php echo $day->humidity*100; ?>%
            </p>
            <p class="m-0">
                <?php echo $day->summary; ?>
            </p>
        </div>


    </div>


    <?php
    $i++;
    if($i == 8) break;
    endforeach;
    ?>

</div>
