<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PembagianAkte $model */

$this->title = 'Create Pembagian Akte';
$this->params['breadcrumbs'][] = ['label' => 'Pembagian Aktes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembagian-akte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
