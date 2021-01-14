<?php
class Parametres
{
	private static $_host;
	private static $_port;
	private static $_dbname;
	private static $_login;
	private static $_pwd;

	static function getHost() 
	{
		return self::$_host;
	}

	static function getPort() 
	{
		return self::$_port;
	}

	static function getDbname() 
	{
		return self::$_dbname;
	}

	static function getLogin() 
	{
		return self::$_login;
	}

	static function getPwd() 
	{
		return self::$_pwd;
	}

	static function init() 
	{
		if (file_exists("parametres.ini"))
		{
			$fp=fopen("parametres.ini","r");
			while(!feof($fp)) 
			{
				$ligne=fgets($fp,4906);
				if ($ligne)
				{
					$info=explode(":",$ligne);
					$param[]=substr($info[1],0,strlen($info[1])-2);
				}
			}
			self::$_host=$param[0];
			self::$_port=$param[1];
			self::$_dbname=$param[2];
			self::$_login=$param[3];
			self::$_pwd=$param[4];
		}
	}
}