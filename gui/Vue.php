<?php
namespace gui;
include_once "Layout.php";

abstract class Vue {
    protected $headContent = '';
    protected $content = '';
    protected $layout;

    public function __construct($layout)
    {
        $this->layout = $layout;
    }

    public function display()
    {
        $this->layout->display( $this->headContent, $this->content );
    }
}