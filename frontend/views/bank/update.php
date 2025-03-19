<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Bank $model */

$this->title = 'Update Bank: ' . $model->namabank;
$this->params['breadcrumbs'][] = ['label' => 'Banks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->namabank, 'url' => ['view', 'namabank' => $model->namabank]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
