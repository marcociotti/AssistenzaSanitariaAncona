<?php
class Zend_View_Helper_ImgProfilo extends Zend_View_Helper_HtmlElement
{
    private $_attrs;

    public function imgProfilo($imgFile, $attrs = false)
    {
        if (empty($imgFile)) {
            $imgFile = 'default.jpg';
        }
        if (null !== $attrs) {
            $_attrs = $this->_htmlAttribs($attrs);
        } else {
            $_attrs = '';
        }
        $tag = '<img src="' . $this->view->baseUrl('images/profilo/' . $imgFile) . '" ' . $_attrs . '>';
        return $tag;
    }
}