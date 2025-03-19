<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kasift $model */

$this->title = 'Update Kasift: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kasifts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kasift-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
