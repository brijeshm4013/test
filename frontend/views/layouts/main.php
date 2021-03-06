<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
/**
 * @var $this \yii\base\View
 * @var $content string
 */
//$this->registerAssetBundle('app');

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title><?php echo Html::encode($this->title); ?></title>
        <?php $this->head(); ?>

        <meta name="description" content="" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body class="post-template page-template page grey lighten-5">
    <?php $this->beginBody() ?>
    <nav>
        <div class="nav-wrapper cyan darken-3">
            <?php
            echo Menu::widget([
                'options' => ['id' => "nav-mobile", 'class' => 'left side-nav'],
                'items' => [
                    ['label' => 'Home', 'url' => ['site/index']],
                    ['label' => 'About', 'url' => ['site/about']],
                    ['label' => 'Contact', 'url' => ['site/contact']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]);
            ?>
            <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>
    <main class="content" role="main">
        <section id="blog-intro" class="cyan section z-depth-1 article-intro" style="background-image:url('/images/post.jpg?v=b2f76a195e');">
            <div class="col-lg-12" style="background:rgba(255, 255, 255, 0.30) none repeat scroll 0 0;margin-top: 100px;color: #e7e7e7;">
                <div style="margin-left:325px;height:155px">
                    <?php
                        echo $this->render('@frontend/modules/booking/views/booking/_form');
                    ?>
                </div>
            </div>
        </section>
        <section id="main-inner-container" class="container">
            <article class="post page card-panel z-depth-1 article-container">
                <header>
                    <time class="post-date grey-text" datetime="<?php echo  date('Y-m-d') ?>"><i class="fa fa-clock-o"></i> <?php echo  date('d M Y') ?> </time>
                </header>
                <section class="post-content">
                    <?php
                        echo $content;
                    ?>
                </section>
                <footer>
                    <section id="social-share">
                        <p>
                            Share this post: <br>
                            <a href="#" class="btn-floating white cyan-text"><i class="fa fa-twitter cyan-text"></i></a>
                            <a href="#" class="btn-floating white cyan-text"><i class="fa fa-facebook cyan-text"></i></a>
                            <a href="#" class="btn-floating white cyan-text"><i class="fa fa-google-plus cyan-text"></i></a>
                        </p>
                    </section>
                </footer>
            </article>
        </section>
    </main>

    <footer class="site-footer clearfix">
        <section class="copyright grey-text darken-2"><a href="/" class="grey-text darken-5"><?php echo Html::encode($this->title); ?></a> &copy; <?php echo date('Y')?></section>
        <section class="poweredby grey-text darken-2">Book My Taxi</section>
    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage(); ?>