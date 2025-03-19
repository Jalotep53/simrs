<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkpPenilaian $model */

$this->title = 'Update Skp Penilaian: ' . $model->nomor_penilaian;
$this->params['breadcrumbs'][] = ['label' => 'Skp Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor_penilaian, 'url' => ['view', 'nomor_penilaian' => $model->nomor_penilaian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skp-penilaian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
