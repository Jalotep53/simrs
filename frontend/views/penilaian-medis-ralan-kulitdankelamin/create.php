<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanKulitdankelamin $model */

$this->title = 'Create Penilaian Medis Ralan Kulitdankelamin';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Kulitdankelamins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-kulitdankelamin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
