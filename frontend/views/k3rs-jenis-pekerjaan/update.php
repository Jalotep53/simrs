<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisPekerjaan $model */

$this->title = 'Update K3rs Jenis Pekerjaan: ' . $model->kode_pekerjaan;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Jenis Pekerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_pekerjaan, 'url' => ['view', 'kode_pekerjaan' => $model->kode_pekerjaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="k3rs-jenis-pekerjaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
