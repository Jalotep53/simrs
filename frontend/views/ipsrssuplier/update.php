<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrssuplier $model */

$this->title = 'Update Ipsrssuplier: ' . $model->kode_suplier;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrssupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_suplier, 'url' => ['view', 'kode_suplier' => $model->kode_suplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipsrssuplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
