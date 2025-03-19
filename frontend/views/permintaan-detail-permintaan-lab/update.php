<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanDetailPermintaanLab $model */

$this->title = 'Update Permintaan Detail Permintaan Lab: ' . $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Detail Permintaan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->noorder, 'url' => ['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-detail-permintaan-lab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
