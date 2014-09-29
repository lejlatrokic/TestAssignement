<?php 
	require_once('PrintArray.php');

	$data = array(
		array(
			'Name' => 'Trixie',
			'Color' => 'Green',
			'Element' => 'Earth',
			'Likes' => 'Flowers',
			),
		array(
			'Name' => 'Tinkerbell',
			'Element' => 'Air',
			'Likes' => 'Singning',
			'Color' => 'Blue',
			), 
		array(
			'Element' => 'Water',
			'Likes' => 'Dancing',
			'Name' => 'Blum',
			'Color' => 'Pink',
			),
	);

	$print = new PrintArray();
	$result = $print->print_array($data);
	
	echo $result;
?>