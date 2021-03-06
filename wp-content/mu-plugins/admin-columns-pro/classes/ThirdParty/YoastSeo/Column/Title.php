<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ACP_ThirdParty_YoastSeo_Column_Title extends ACP_ThirdParty_YoastSeo_Column
	implements ACP_Column_EditingInterface, ACP_Column_FilteringInterface {

	public function __construct() {
		parent::__construct();

		$this->set_type( 'wpseo-title' );
	}

	public function editing() {
		return new ACP_ThirdParty_YoastSeo_Editing_Title( $this );
	}

	public function filtering() {
		return new ACP_ThirdParty_YoastSeo_Filtering_Title( $this );
	}

}
