<?php
/**
 * Created by PhpStorm.
 * User: reglobbe
 * Date: 2/9/15
 * Time: 4:45 PM
 */

namespace backend\widgets\grid;


use yii\grid\Column;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\HttpException;

class DatabaseColumn extends Column{

    public $header = 'Name';
    public $filterAttribute = 'name';

    public $modelClass;
    public $modelAttributeValue ='name';
    public $modelAttributeKey = 'id';
    public $relationName;


    public function init(){
        if(!class_exists($this->modelClass)){
            throw new HttpException(400, 'Model Class Must Be Set');
        }
        parent::init();
    }

    protected function renderDataCellContent($model, $key, $index)
    {
        $relation = $this->relationName;
        $relationValue = $this->modelAttributeValue;

        return $model->$relation->$relationValue;

    }

    protected function renderFilterCellContent()
    {
        //Getting Model Object From Class

        $model = \Yii::createObject($this->modelClass);

        return Html::activeDropDownList(
            $this->grid->filterModel,
            $this->filterAttribute,
            ArrayHelper::map($model->find()->distinct()->all() , $this->modelAttributeKey , $this->modelAttributeValue),
            ['class' => 'form-control','prompt' => '-------']);
    }

}