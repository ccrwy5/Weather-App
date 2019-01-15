<br><br>

<h2>Next 6 Hours</h2>
<ul class="list-group" style="margin: 0 auto; max-width: 320px;" id="hourly">

    <?php
    $i = 0;

    foreach($forecast->hourly->data as $hour):

    ?>

    <li class="list-group-item d-flex justify-content-between">
        <p class="lead m-0">
            <?php echo date("g:i a", $hour->time); ?>
        </p>
        <p class="lead m-0">
            <?php echo round($hour->temperature); ?>&deg;
        </p>
        <p class="lead m-0"><span class="sr-only">Humidity</span>
            <?php echo $hour->humidity*100; ?>%
        </p>
    </li>

    <?php
    $i++;
    if($i == 6) break;
    endforeach;
    ?>

</ul>


<br><br>
