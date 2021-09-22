<?php
/**
 * Register and configure assets for My account PayPal payments page.
 *
 * @package WooCommerce\PayPalCommerce\Vaulting\Assets
 */

declare(strict_types=1);

namespace WooCommerce\PayPalCommerce\Vaulting\Assets;

class MyAccountPaymentsAssets {

	/**
	 * The URL to the module.
	 *
	 * @var string
	 */
	private $module_url;

	/**
	 * WebhooksStatusPageAssets constructor.
	 *
	 * @param string $module_url The URL to the module.
	 */
	public function __construct(
		string $module_url
	) {
		$this->module_url = untrailingslashit( $module_url );
	}

	/**
	 * Enqueues the necessary scripts.
	 *
	 * @return void
	 */
	public function enqueue(): void {
		wp_enqueue_script(
			'ppcp-vaulting-myaccount-payments',
			$this->module_url . '/assets/js/myaccount-payments.js',
			array( 'jquery' ),
			'1',
			true
		);
	}
}
