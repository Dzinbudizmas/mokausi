<?php
$connect=mysqli_connect('localhost','root','root','api_db');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
} else {
    echo 'Yes, we did it';
}

?>