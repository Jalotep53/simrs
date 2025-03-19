<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatNaikGaji $model */

$this->title = 'Update Riwayat Naik Gaji: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Naik Gajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'pangkatjabatan' => $model->pangkatjabatan, 'gapok' => $model->gapok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-naik-gaji-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
