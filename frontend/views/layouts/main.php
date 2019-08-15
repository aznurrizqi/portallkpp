<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/img/logo.png', ['alt'=>Yii::$app->name, 'style' => 'height: 25px']),
//         'brandImage' => '',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
//     $menuItems = [
//         ['label' => 'Home', 'url' => ['/site/index']],
//         ['label' => 'About', 'url' => ['/site/about']],
//         ['label' => 'Contact', 'url' => ['/site/contact']],
//     ];
//     if (Yii::$app->user->isGuest) {
//         $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//         $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//     } else {
//         $menuItems[] = '<li>'
//             . Html::beginForm(['/site/logout'], 'post')
//             . Html::submitButton(
//                 'Logout (' . Yii::$app->user->identity->username . ')',
//                 ['class' => 'btn btn-link logout']
//             )
//             . Html::endForm()
//             . '</li>';
//     }
//     echo Nav::widget([
//         'options' => ['class' => 'navbar-nav navbar-right'],
//         'items' => $menuItems,
//     ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <!-- <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p> -->

        <!-- <p class="pull-right"><?= Yii::powered() ?></p> -->
        <p>Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah<br>
Jl. Epicentrum Tengah Lot 11 B, Jakarta Selatan, DKI Jakarta - 12940</p>
        <p><b>&copy;2019 LKPP</b></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
