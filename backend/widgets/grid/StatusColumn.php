<?php
/**
 * Created by PhpStorm.
 * User: reglobbe
 * Date: 28/8/15
 * Time: 4:32 PM
 */

namespace backend\widgets\grid;

use yii\grid\Column;
use backend\components\DatabaseHelper;
use yii\helpers\Html;


class StatusColumn extends Column{

    public $header = 'Status';

    public $statusColumn = 'active';


    protected function renderDataCellContent($model, $key, $index)
    {

        $statusColumn = $this->statusColumn;
        return $this->dataItems($model->$statusColumn);

    }

    protected function renderFilterCellContent()
    {
        return Html::activeDropDownList($this->grid->filterModel,$this->statusColumn,$this->dataItems(),['class' => 'form-control','prompt' => '-------']);
    }

    private function dataItems($key = false){
        switch ($this->statusColumn){

            case 'multiple_use':
                return DatabaseHelper::multpleUseDropDown($key);
                break;

            case 'refund_dealer':
                return DatabaseHelper::refundDealerDropDown($key);
                break;

            default:
                return DatabaseHelper::statusDropDown($key);

        }
    }

}