<?php


require __DIR__."/config.php";

function ___load_class($class)
{
	require __DIR__."/src/".str_replace("\\", "//", $class).".php";
}

spl_autoload_register("___load_class");