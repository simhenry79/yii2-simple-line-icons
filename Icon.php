<?php

namespace wfcreations\simplelineicons;

use yii\helpers\Html;

class Icon {

    private $options = [];
    
    private $tag;

    public function __construct($name, $options = [], $prefix, $prefixName, $tag = 'i') {
        Html::addCssClass($options, $prefix . ' ' . $prefixName . '-' . $name);

        $this->options = $options;
        $this->tag = $tag;
    }

    public function __toString() {
        return $this->render();
    }

    public function render() {
        return Html::tag($this->tag, null, $this->options);
    }

}
