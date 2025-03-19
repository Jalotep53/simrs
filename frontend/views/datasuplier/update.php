<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Datasuplier $model */

$this->title = 'Update Datasuplier: ' . $model->kode_suplier;
$this->params['breadcrumbs'][] = ['label' => 'Datasupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_suplier, 'url' => ['view', 'kode_suplier' => $model->kode_suplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datasuplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
