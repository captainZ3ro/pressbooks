<?php

class Admin_BrandingTest extends \WP_UnitTestCase {


	/**
	 * @covers \Pressbooks\Admin\Branding\custom_login_logo
	 */
	public function test_custom_login_logo() {

		$this->expectOutputRegex( '/<\/style>/' );
		\Pressbooks\Admin\Branding\custom_login_logo();
	}


	/**
	 * @covers \Pressbooks\Admin\Branding\login_url
	 */
	public function test_login_url() {

		$this->assertRegExp( '#^https?://#i', \Pressbooks\Admin\Branding\login_url() );
	}


	/**
	 * @covers \Pressbooks\Admin\Branding\login_title
	 */
	public function test_login_title() {

		$title = \Pressbooks\Admin\Branding\login_title();

		$this->assertInternalType( 'string', $title );
		$this->assertNotEmpty( $title );
	}

}
