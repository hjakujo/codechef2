<?php

$to_withdraw = 0;
$initial_account_balance = 0.0;


/*
$to_withdraw = stream_get_line(STDIN, 1024, PHP_EOL);
$initial_account_balance = stream_get_line(STDIN, 1024, PHP_EOL);
*/

$input = fgets(STDIN);
$split = strpos($input, " ");
 
 
$to_withdraw = substr($input,0, $split);
$initial_account_balance = substr($input, $split+1); 





$initial_account_balance = number_format($initial_account_balance, 2, '.', '');



if( $to_withdraw % 5 == 0 )
{
	$result = $initial_account_balance - ( $to_withdraw + 0.50 );
	
	if ( $result >= 0 )
	{
		echo number_format ( $result, 2, '.', '');
	}		
	else
	{
		echo number_format ( $initial_account_balance, 2, '.', '');
	}
}
else 
{
	echo number_format ( $initial_account_balance, 2, '.', '');
}




?>
