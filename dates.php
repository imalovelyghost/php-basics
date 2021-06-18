<?php echo '<H1>PHP DATES</H1>';

echo '<H3>Dates</H3>';
echo '<li>DateTime is able to process more date string formats comparing to strtotime.
</li><br>';
echo '<li>Working with object is just easier than arbitrary functions. E.g. Comparison of two date is direct with DateTime. Whereas with strtotime, we need to convert dates to timestamps and compare them.
</li><br>';
echo '<li>DateTime is an object-oriented interface encapsulates a lot of back-end logic and provides a clean interface for us to use.
</li><br>';

echo '<h5>new DateTime() output: </h5>';
$currentDateTime = new DateTime();
var_dump($currentDateTime);

// Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
echo '<h5>Formatted output: Año-Mes-Dia --> Y-m-d </h5>';
$currentDateTimeFormattedYmd = $currentDateTime->format('Y-m-d');
print_r($currentDateTimeFormattedYmd);

// Get the current date in any format

echo '<h5>Formatted output: Año-Mes-Dia... --> Y/m/d s:i:H </h5>';
$currentDateTimeFormattedgagSMY = $currentDateTime->format('ga jS M Y');
print_r($currentDateTimeFormattedgagSMY);

// Get the current day

echo '<h5>Formatted output: Dia --> D </h5>';
$currentDateTimeDay= $currentDateTime->format('D');
print_r($currentDateTimeDay);

// Get the current month in numerical format (1-12)

echo '<h5>Formatted output: Mes --> M </h5>';
$currentDateTimeMonth= $currentDateTime->format('M');
print_r($currentDateTimeMonth);

// Get the current minute with leading zeros (00 - 59)

echo '<h5>Formatted output: Minuto --> s:i </h5>';
$currentDateTimeMinute= $currentDateTime->format('s:i');
print_r($currentDateTimeMinute);

?>