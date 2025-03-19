<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokoreturbeli $model */

$this->title = 'Update Tokoreturbeli: ' . $model->no_retur_beli;
$this->params['breadcrumbs'][] = ['label' => 'Tokoreturbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_retur_beli, 'url' => ['view', 'no_retur_beli' => $model->no_retur_beli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tokoreturbeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
