<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanAnak $model */

$this->title = 'Update Master Masalah Keperawatan Anak: ' . $model->kode_masalah;
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatan Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_masalah, 'url' => ['view', 'kode_masalah' => $model->kode_masalah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-masalah-keperawatan-anak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
