<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaKamar $model */

$this->title = 'Update Set Harga Kamar: ' . $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Set Harga Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kamar, 'url' => ['view', 'kd_kamar' => $model->kd_kamar, 'kd_pj' => $model->kd_pj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-harga-kamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
