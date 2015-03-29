<?php
class SimpleView extends \Slim\View
{
    protected $layout;

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($template)
    {
        if ($this->layout){
            $content =  parent::render($template);
            $this->setData(array('_content' => $content));
            return parent::render($this->layout);
        } else {
            return parent::render($template);
        }
    }
}