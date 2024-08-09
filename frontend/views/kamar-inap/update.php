<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KamarInap $model */

$this->title = 'Update Kamar Inap: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Kamar Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamar-inap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
