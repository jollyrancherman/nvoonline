<?php namespace CWS\Toastr;

/**
* Toastr class
*/
class Toastr
{

	public static function set($object, $status)
	{
		$array = [
			'data' => $object,
			'status' => $status
		];

		return $array;
	}

}