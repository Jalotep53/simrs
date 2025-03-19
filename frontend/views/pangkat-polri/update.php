<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PangkatPolri $model */

$this->title = 'Update Pangkat Polri: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pangkat Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pangkat-polri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
