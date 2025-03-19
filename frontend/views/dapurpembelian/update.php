<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dapurpembelian $model */

$this->title = 'Update Dapurpembelian: ' . $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Dapurpembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_faktur, 'url' => ['view', 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dapurpembelian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
