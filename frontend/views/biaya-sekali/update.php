<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BiayaSekali $model */

$this->title = 'Update Biaya Sekali: ' . $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Biaya Sekalis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kamar, 'url' => ['view', 'kd_kamar' => $model->kd_kamar, 'nama_biaya' => $model->nama_biaya]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="biaya-sekali-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
