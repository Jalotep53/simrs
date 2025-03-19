<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePesertaKegiatanKelompok $model */

$this->title = 'Create Pcare Peserta Kegiatan Kelompok';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Peserta Kegiatan Kelompoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-peserta-kegiatan-kelompok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
