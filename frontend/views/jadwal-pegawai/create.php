<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JadwalPegawai $model */

$this->title = 'Create Jadwal Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
