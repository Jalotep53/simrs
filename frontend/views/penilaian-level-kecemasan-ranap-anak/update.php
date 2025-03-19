<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLevelKecemasanRanapAnak $model */

$this->title = 'Update Penilaian Level Kecemasan Ranap Anak: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Level Kecemasan Ranap Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-level-kecemasan-ranap-anak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
