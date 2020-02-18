<?php
namespace lsx\starter_scripts;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

/**
 * Undocumented class
 */
class Scripts {

	/**
	 * Occurs after the update command has been executed, or after the install command has been executed without a lock file present.
	 *
	 * @param Event $event
	 * @return void
	 */
	public static function postUpdate( Event $event ) {
		$composer = $event->getComposer();
		// do stuff
	}

	/**
	 * Occurs after a package has been installed.
	 *
	 * @param PackageEvent $event
	 * @return void
	 */
	public static function postPackageInstall( PackageEvent $event ) {
		$installed_package = $event->getOperation()->getPackage();
		// Possibly do somthing with CMB2 once it has been installed, like remove uneccesary files.
		// Or reomve the plugin headers.
	}

	/**
	 * Occurs after the install command has been executed with a lock file present.
	 *
	 * @param [type] $event
	 * @return void
	 */
	public static function post_install( $event ) {
	// make cache toasty
	}
}
