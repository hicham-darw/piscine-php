<?php
	$nbr;
	echo "Enter The number: ";
	while(true)
	{
		$nbr = fgets(STDIN);

		if($nbr === false)
			break;

		$nbr = trim($nbr);
		if($nbr === '')
		{
			echo "'' is not a number";
		}
		else if($nbr !== '' && is_numeric($nbr))
		{
			if($nbr%2 == 1)
				echo "the number $nbr is odd";
			else
				echo "the number $nbr is even";
		}
		else 
			echo "$nbr is not a number";
		echo "\nEnter the number: ";
	}
	echo "\n";
?>
