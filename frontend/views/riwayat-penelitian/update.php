<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenelitian $model */

$this->title = 'Update Riwayat Penelitian: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Penelitians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'judul_penelitian' => $model->judul_penelitian, 'tahun' => $model->tahun]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-penelitian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
