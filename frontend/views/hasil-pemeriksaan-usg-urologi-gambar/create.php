<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgUrologiGambar $model */

$this->title = 'Create Hasil Pemeriksaan Usg Urologi Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usg Urologi Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-urologi-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
