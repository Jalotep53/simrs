<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPeriksaLabpaGambar $model */

$this->title = 'Create Detail Periksa Labpa Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Detail Periksa Labpa Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-periksa-labpa-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
