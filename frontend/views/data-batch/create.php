<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataBatch $model */

$this->title = 'Create Data Batch';
$this->params['breadcrumbs'][] = ['label' => 'Data Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-batch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
