<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisCidera $model */

$this->title = 'Update K3rs Jenis Cidera: ' . $model->kode_cidera;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Jenis Cideras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_cidera, 'url' => ['view', 'kode_cidera' => $model->kode_cidera]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="k3rs-jenis-cidera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
