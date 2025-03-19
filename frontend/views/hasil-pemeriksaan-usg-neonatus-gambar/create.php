<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgNeonatusGambar $model */

$this->title = 'Create Hasil Pemeriksaan Usg Neonatus Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usg Neonatus Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-neonatus-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
