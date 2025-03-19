<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LogDukcapilAceh $model */

$this->title = 'Update Log Dukcapil Aceh: ' . $model->no_ktp;
$this->params['breadcrumbs'][] = ['label' => 'Log Dukcapil Acehs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_ktp, 'url' => ['view', 'no_ktp' => $model->no_ktp, 'tanggal' => $model->tanggal, 'user' => $model->user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="log-dukcapil-aceh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
