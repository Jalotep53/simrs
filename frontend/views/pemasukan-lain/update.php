<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemasukanLain $model */

$this->title = 'Update Pemasukan Lain: ' . $model->no_masuk;
$this->params['breadcrumbs'][] = ['label' => 'Pemasukan Lains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_masuk, 'url' => ['view', 'no_masuk' => $model->no_masuk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemasukan-lain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
