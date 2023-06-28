<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class glob
{	
	public static function substr($text,$lenght)
	{
		return implode(' ', array_slice(explode(' ', $text), 0, $lenght));
	}

	public static function moreText($text,$lenght)
	{

		return implode(' ', array_slice(explode(' ', $text), $lenght, strlen($text)));
	}

	
}