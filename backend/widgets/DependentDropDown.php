<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DependentDropDown
 *
 * @author Double H
 */

namespace backend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Usage 
  <?= $form->field($model, 'username')->dropDownList(['Harish' ,'Teacher'] ,['id' => 'dependent-drop']) ?>
  <?= $form->field($model, 'password')->widget(\backend\widgets\DependentDropDown::className(), [
  'model' => $model,
  'attribute' => 'password',
  'onChangeSelector' => 'dependent-drop',
  'sourceUrl' => yii\helpers\Url::to(['site/source'])
  ]) ?>
 */
class DependentDropDown extends Widget {

    //model object 
    public $model;
    //model attribute
    public $attribute;
    //on change Selector
    public $onChangeSelector;
    //source Url
    public $sourceUrl;

    //source Array
    public $source;

    public function run() {
        $this->registerJs();
        echo Html::activeDropDownList($this->model, $this->attribute, [], ['class' => 'form-control']);
    }

    private function registerJs() {
        $view = $this->view;
        $view->registerJs('
        
            jQuery(document).on("change" ,"#' . $this->onChangeSelector . '" ,function(){
                var val = $(this).val();
                $.ajax({
                    type : "post",
                    url : "' . $this->sourceUrl . '",
                    data : {val: val},
                    success : function(data){
                        json = $.parseJSON(data);
                        var selector = $("#' . Html::getInputId($this->model, $this->attribute) . '");
                        selector.html("");
                        $.each(json , function(index , value){
                            selector.append($("<option></option>").val(index).html(value));
                        });
                    },
                    error : function(xhr , ajaxOptions , thrownError){
                        alert("Check Your Url");
                    },
                });
                return false;
            });
        
        ');
    }
}

?>
