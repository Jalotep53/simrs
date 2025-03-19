<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jenis $model */

$this->title = 'Update Jenis: ' . $model->kdjns;
$this->params['breadcrumbs'][] = ['label' => 'Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kdjns, 'url' => ['view', 'kdjns' => $model->kdjns]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
