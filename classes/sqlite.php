<?php
	// open database
	class MyDB extends SQLite3
	{
		function __construct($file)
		{
			$this->open($file);
		}
	}