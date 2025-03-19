<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Sidikjari $model */

$this->title = 'Update Sidikjari: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sidikjaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sidikjari-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
