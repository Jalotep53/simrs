<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanMata $model */

$this->title = 'Update Master Masalah Keperawatan Mata: ' . $model->kode_masalah;
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatan Matas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_masalah, 'url' => ['view', 'kode_masalah' => $model->kode_masalah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-masalah-keperawatan-mata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
