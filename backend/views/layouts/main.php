<?php
use backend\assets\AppAsset;
use kartik\alert\AlertBlock;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?php echo $this->render("common/head.php"); ?>
<body>
    <?php $this->beginBody() ?>
    <div id="wrapper">
    <!--/#header-->
    <?php echo $this->render("common/header.php"); ?>
    <!--/#header-->
        <div id="page-wrapper" class="clearfix">

            <div class="col-lg-12">
                <?php echo  Breadcrumbs::widget([
                    'homeLink'=>['label'=>'Home','url'=>''],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?php echo AlertBlock::widget() ?>

                <?= $content ?>
            </div>
        </div>


    <!--/#footer-->
    <?php echo $this->render("common/footer"); ?>
    <!--/#footer-->
    </div>
    <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
