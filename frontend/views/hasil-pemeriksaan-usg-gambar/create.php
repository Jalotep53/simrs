<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgGambar $model */

$this->title = 'Create Hasil Pemeriksaan Usg Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usg Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
