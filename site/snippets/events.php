<?php
	$calendar = calendar($data->calendar()->yaml());
	$tmpDate = getdate(0);
	$currentDate = getdate();
	// echo "<pre>";
	// print_r($calendar->getAllEvents());
	// echo "</pre>";
?>

<?php
    snippet('calendar-div', array(
        'calendar'  => $calendar,
        'subtitle'  => $data->subtitle(),
        'text'  => $data->text()->kirbytext(),
        'calendar'  => $calendar,
        'fields'        => array(
            'summary'       => l::get('title'),
            'category'       => l::get('description'),
            'description'   => l::get('category')
        )
    ));
?>
