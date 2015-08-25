<?php
class StaticPagesController extends BaseController {

    public function getIndex() {
        return view( 'home' );
    }

    public function getGallery() {
        return view( 'gallery' );
    }

    public function getAboutUs() {
        return view( 'about' );
    }

    public function getContactUs() {
        return view( 'contact' );
    }

    public function postContactUs() {
        return 'post contact yaay';
    }
}