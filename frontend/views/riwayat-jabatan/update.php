<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatJabatan $model */

$this->title = 'Update Riwayat Jabatan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'jabatan' => $model->jabatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-jabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
