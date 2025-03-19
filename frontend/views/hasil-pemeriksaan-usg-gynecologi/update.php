<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgGynecologi $model */

$this->title = 'Update Hasil Pemeriksaan Usg Gynecologi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usg Gynecologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-pemeriksaan-usg-gynecologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
