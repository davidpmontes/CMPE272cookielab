
<?php
	extract( $_POST);

	if ( !$USERNAME || !$PASSWORD )
	{
		fieldsBlank();
		die();
	}

	if ( !( $file = fopen( __DIR__ . '/password.txt', "r" )))
	{
		print( "<title>Error</title></head><body>
				Could not open password file
				</body></html>" );
		die();
	}

	$userVerified = 0;

	while ( !feof( $file ) && !$userVerified )
	{		
		$line = fgets( $file, 255);

		$line = chop($line );

		$field = explode(",", $line);

		if ( $USERNAME == $field[0] )
		{
			$userVerified = 1;

			if ( checkPassword( $PASSWORD, $field) == true)
			{ 
				accessGranted( $USERNAME );
				checkAdmin( $USERNAME );
			}
			else
			{
				wrongPassword();
			}
		}
	}

	fclose( $file );

	if( !$userVerified )
	{
		accessDenied();
	}

	function checkAdmin( $username )
	{
		if ($username == "admin")
		{
			print("<p>Admin logged in.</p>");
			print("<p>The following users are currently logged in:</p>");
			
			$file = fopen( __DIR__ . '/currusers.txt', 'r' );

			while ($line = fgets($file)) {
				echo nl2br($line);
			}	
		}
	}

	function checkPassword( $userpassword, $filedata )
	{
		if ($userpassword == $filedata[1] )
			return true;
		else
			return false;
	}

	function accessGranted( )
	{
		print("access granted!");
	}

	function wrongPassword()
	{
		print("wrong password\n\n");
	}

	function accessDenied()
	{
		print("access denied\n\n");
	}

	function fieldsBlank()
	{
		print("Please enter a username and password.\n\n");
	}
?>