<?php
// This is global bootstrap for autoloading 
function helloall(){
	
}
\Codeception\Util\Autoload::registerSuffix('Page', __DIR__.DIRECTORY_SEPARATOR.'_pages');