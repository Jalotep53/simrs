<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuanTni $model */

$this->title = 'Update Satuan Tni: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Satuan Tnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satuan-tni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
