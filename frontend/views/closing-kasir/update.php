<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ClosingKasir $model */

$this->title = 'Update Closing Kasir: ' . $model->shift;
$this->params['breadcrumbs'][] = ['label' => 'Closing Kasirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shift, 'url' => ['view', 'shift' => $model->shift]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="closing-kasir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
