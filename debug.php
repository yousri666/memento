<?php 

function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

function test_input($data, $filter) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if (!filter_var($data, $filter) === false) {
		return $data;
	} else {
		return -1;
	}
}