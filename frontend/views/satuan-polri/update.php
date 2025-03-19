<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuanPolri $model */

$this->title = 'Update Satuan Polri: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Satuan Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satuan-polri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
