<h1> Middleware 2 </h1>

<?php
use Carbon\Carbon;
$time= Carbon::now()->format('l, F j, Y');  // Sunday, February 9, 2025

?>

<h2>Today is {{$time}}</h2>
