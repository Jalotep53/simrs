<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsg $model */

$this->title = 'Create Hasil Pemeriksaan Usg';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
