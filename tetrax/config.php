<?php
//localhost -hostname, root - username, "" - password, Vijay - db 

try
{
    if ($con=mysqli_connect("localhost","root","","Vijay"))
    {
    	//echo "connected";
    }
    else
    {
        throw new Exception('Unable to connect');
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>
