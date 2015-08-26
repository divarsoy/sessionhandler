<?php namespace Divarsoy\Illuminate\Session;

use Illuminate\Support\Manager;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NullSessionHandler;

class FileSessionManager extends \Illuminate\Session\SessionManager {

	/**
	 * Create an instance of the file session driver.
	 *
	 * @return \Illuminate\Session\Store
	 */
	protected function createFileDriver()
	{
		return $this->createNativeDriver();
	}

	/**
	 * Create an instance of the file session driver.
	 *
	 * @return \Illuminate\Session\Store
	 */
	protected function createNativeDriver()
	{
		$path = $this->app['config']['session.files'];

		return $this->buildSession(new FileSessionHandler($this->app['files'], $path));
	}

}
