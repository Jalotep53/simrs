<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriasePemeriksaan $model */

$this->title = 'Update Master Triase Pemeriksaan: ' . $model->kode_pemeriksaan;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Pemeriksaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_pemeriksaan, 'url' => ['view', 'kode_pemeriksaan' => $model->kode_pemeriksaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-triase-pemeriksaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
