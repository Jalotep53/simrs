<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengumumanEpasien $model */

$this->title = 'Update Pengumuman Epasien: ' . $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman Epasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nik, 'url' => ['view', 'nik' => $model->nik, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengumuman-epasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
