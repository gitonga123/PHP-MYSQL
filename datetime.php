<?php 
// PHP has a class named DateTime to help you when reading, writing, comparing or calculating with date and time
$raw = "22. 11. 1968";
$start = DateTime::createFromFormat('d. m. Y', $raw);
echo "Start Date ". $start->format("Y/m/d")."\n";

$end = clone $start;

$end->add(new DateInterval('P1M6D'));
$diff = $end->diff($start);
echo 'Difference: ' . $diff->format('%m month, %d days (total: %a days)') . "\n";

$periodInterval = DateInterval::createFromDateString('first thursday');
$periodIterator = new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE);
foreach ($periodIterator as $date) {
    // output each date in the period
    echo $date->format('Y-m-d') . ' ';
}