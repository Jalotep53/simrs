<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jumpasien $model */

$this->title = 'Update Jumpasien: ' . $model->thn;
$this->params['breadcrumbs'][] = ['label' => 'Jumpasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->thn, 'url' => ['view', 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jumpasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
