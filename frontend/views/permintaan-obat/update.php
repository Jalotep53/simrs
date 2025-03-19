<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanObat $model */

$this->title = 'Update Permintaan Obat: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
