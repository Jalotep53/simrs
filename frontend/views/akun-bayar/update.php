<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunBayar $model */

$this->title = 'Update Akun Bayar: ' . $model->nama_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Akun Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_bayar, 'url' => ['view', 'nama_bayar' => $model->nama_bayar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun-bayar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
