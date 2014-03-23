<?php
/**
 *
 */
class LoginProvinceAction extends ProvinceCommonAction{
	public function homepage() {
		if ( session( 'user_type' ) == 2 ) {
			$agency = M( 'agency' )->where( array( 'user_id' => session( 'user_id' ) ) )->find();
			session( 'jurisdiction_id', $agency['jurisdiction_id'] );
			$jurisdiction = M( 'jurisdiction' )->where( array( 'jurisdiction_id' => $agency['jurisdiction_id'] ) )->find();
			session( 'jurisdiction_name', $jurisdiction['jurisdiction_name'] );

			layout( './Common/frame' );
			$this->display( './Public/html/Content/Province/homepage/province_index.html' );
		}else {
			$this->redirect( 'Home/Index/index' );
		}
	}
}
?>