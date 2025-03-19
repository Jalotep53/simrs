<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrspembelian $model */

$this->title = 'Update Ipsrspembelian: ' . $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrspembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_faktur, 'url' => ['view', 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipsrspembelian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
