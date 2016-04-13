<?php
/**
 * Created by PhpStorm.
 * User: Amit Sethi
 * Date: 25-07-2015
 * Time: 11:43
 */

namespace backend\widgets;

use yii\helpers\Html;
use yii\helpers;
use yii\bootstrap\Dropdown;


class BackendDropdown extends Dropdown {
    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        Html::addCssClass($this->options, '');
        //parent::init();
    }
}