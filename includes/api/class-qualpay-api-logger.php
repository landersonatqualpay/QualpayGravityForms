<?php

/**
 * Class GFP_Qualpay_Psr_Logger_Interface
 *
 * Clone of Psr\Log\AbstractLogger with Psr\Log\LogLevel constants pulled in so those files don't have to be included
 * Wrapper for the Gravity Forms Add-On Framework logging
 *
 * @since  1.0.0
 *
 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
 */
class GFP_Qualpay_Psr_Logger_Interface {

	const EMERGENCY = 'emergency';
	const ALERT = 'alert';
	const CRITICAL = 'critical';
	const ERROR = 'error';
	const WARNING = 'warning';
	const NOTICE = 'notice';
	const INFO = 'info';
	const DEBUG = 'debug';

	/**
	 * System is unusable.
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 *
	 * @param string $message
	 * @param array  $context
	 *
	 * @return null
	 */
	public function emergency( $message, array $context = array() ) {

		global $gravityformsqualpay;

		$gravityformsqualpay->get_addon_object()->log_error( strtoupper( self::EMERGENCY ) . ": {$message} " );

	}

	/**
	 * Action must be taken immediately.
	 *
	 * Example: Entire website down, database unavailable, etc. This should
	 * trigger the SMS alerts and wake you up.
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 *
	 * @param string $message
	 * @param array  $context
	 *
	 * @return null
	 */
	public function alert( $message, array $context = array() ) {

		global $gravityformsqualpay;

		$gravityformsqualpay->get_addon_object()->log_error( strtoupper( self::ALERT ) . ": {$message} " );

	}

	/**
	 * Critical conditions.
	 *
	 * Example: Application component unavailable, unexpected exception.
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 *
	 * @param string $message
	 * @param array  $context
	 *
	 * @return null
	 */
	public function critical( $message, array $context = array() ) {

		global $gravityformsqualpay;

		$gravityformsqualpay->get_addon_object()->log_error( strtoupper( self::CRITICAL ) . ": {$message} " );

	}

	/**
	 * Runtime errors that do not require immediate action but should typically
	 * be logged and monitored.
	 *
	 * @param string $message
	 * @param array  $context
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 *
	 * @return null
	 */
	public function error( $message, array $context = array() ) {

		global $gravityformsqualpay;

		$gravityformsqualpay->get_addon_object()->log_error( "{$message} " );

	}

	/**
	 * Exceptional occurrences that are not errors.
	 *
	 * Example: Use of deprecated APIs, poor use of an API, undesirable things
	 * that are not necessarily wrong.
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 *
	 * @param string $message
	 * @param array  $context
	 *
	 * @return null
	 */
	public function warning( $message, array $context = array() ) {

		global $gravityformsqualpay;

		$gravityformsqualpay->get_addon_object()->log_error( strtoupper( self::WARNING ) . ": {$message} " );

	}

	/**
	 * Normal but significant events.
	 *
	 * @param string $message
	 * @param array  $context
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 *
	 * @return null
	 */
	public function notice( $message, array $context = array() ) {

		global $gravityformsqualpay;

		$gravityformsqualpay->get_addon_object()->log_debug( strtoupper( self::NOTICE ) . ": {$message} " );

	}

	/**
	 * Interesting events.
	 *
	 * Example: User logs in, SQL logs.
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 *
	 * @param string $message
	 * @param array  $context
	 *
	 * @return null
	 */
	public function info( $message, array $context = array() ) {

		global $gravityformsqualpay;

		$gravityformsqualpay->get_addon_object()->log_debug( strtoupper( self::INFO ) . ": {$message} " );

	}

	/**
	 * Detailed debug information.
	 *
	 * @param string $message
	 * @param array  $context
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 *
	 * @return null
	 */
	public function debug( $message, array $context = array() ) {

		global $gravityformsqualpay;

		$gravityformsqualpay->get_addon_object()->log_debug( $message );

	}

}

/**
 * Class GFP_Qualpay_API_Logger
 *
 * Create PSR-compatible logger for Qualpay API
 *
 * @since  1.0.0
 *
 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
 */
class GFP_Qualpay_API_Logger {

	/**
	 * @var GFP_Qualpay_Psr_Logger_Interface
	 */
	public $log = null;

	/**
	 * Constructor
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 */
	public function __construct() {

		$this->create_logger();

	}

	/**
	 * Create the logger
	 *
	 * @since  1.0.0
	 *
	 * @author Naomi C. Bush for gravity+ for Qualpay <support@gravityplus.pro>
	 */
	private function create_logger() {

		$this->log = new GFP_Qualpay_Psr_Logger_Interface();

	}

}