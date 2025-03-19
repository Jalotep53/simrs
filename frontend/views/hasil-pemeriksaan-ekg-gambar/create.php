<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanEkgGambar $model */

$this->title = 'Create Hasil Pemeriksaan Ekg Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Ekg Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-ekg-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
