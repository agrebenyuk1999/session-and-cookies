<?php 

class Cookie
{
	public function set(string $key, $value, int $limit = 0)
	{
		setcookie($key, $value, time()+$limit);
	}

	public function unset(string $key)
	{
		setcookie($key);
	}
}