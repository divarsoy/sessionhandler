<?php namespace Divarsoy\Illuminate\Support\Facades;

/**
 * @see \Divarsoy\Illuminate\Session\SessionManager
 * @see \Divarsoy\Illuminate\Session\Store
 */
class Session extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'session'; }

}
