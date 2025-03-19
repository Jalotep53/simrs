<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPemeriksaanRadiologi $model */

$this->title = 'Create Permintaan Pemeriksaan Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Pemeriksaan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-pemeriksaan-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
