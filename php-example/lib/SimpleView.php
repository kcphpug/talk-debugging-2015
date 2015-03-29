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
            $sourcePath = parent::getTemplatePathname($template);
            $this->setData(array(
                '_contentFileName' => $template,
                '_content' => $content,
                '_contentSource' => highlight_file($sourcePath,true)));
            return parent::render($this->layout);
        } else {
            return parent::render($template);
        }
    }
}