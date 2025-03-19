<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailBeriDiet $model */

$this->title = 'Update Detail Beri Diet: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Detail Beri Diets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu, 'kd_diet' => $model->kd_diet]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-beri-diet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
