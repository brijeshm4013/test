<?php
/**
 * Created by PhpStorm.
 * User: reglobbe
 * Date: 28/8/15
 * Time: 4:31 PM
 */

namespace backend\widgets\grid;


use yii\grid\Column;
use kartik\date\DatePicker;

class DatePickerColumn extends  Column{

    /**
     * @var string [

     *
     *<?= $form->field($model, 'start_date')->widget(DatePicker::className(),[
    'pluginOptions' => [
    'format' => 'yyyy-mm-dd',
    'todayHighlight' => true,
    'autoclose'=>true,
    'clearDate' => true,
    ],
    'options' => [
    'value' => Yii::$app->formatter->asDate($model->start_date ,'php:Y-m-d'),
    ]
    ]) ?>
    ],
     */

    public $header = 'Create date';

    public $dateColumn = 'create_date';


    protected function renderDataCellContent($model, $key, $index)
    {

        $dateColumn = $this->dateColumn;
        return \Yii::$app->formatter->asDate($model->$dateColumn);

    }

    protected function renderFilterCellContent()
    {
        return DatePicker::widget([
            'model' => $this->grid->filterModel,
            'attribute' => $this->dateColumn,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true,
                'autoclose'=>true,
                'clearDate' => true,
            ],
            'options' => [
                'data-pjax' => '0',
            ]
        ]);
    }
}