<?php
/**
 * Created by PhpStorm.
 * User: Amit Sethi
 * Date: 25-07-2015
 * Time: 11:43
 */

namespace backend\widgets;

use Yii;
use yii\bootstrap\Nav;


class BackendNav extends Nav {

    protected function renderDropdown($items, $parentItem)
    {
        return BackendDropdown::widget([
            'items' => $items,
            'encodeLabels' => $this->encodeLabels,
            'clientOptions' => false,
            'view' => $this->getView(),
            'options' => [
                'class' => 'nav nav-second-level'

            ]
        ]);
    }
}