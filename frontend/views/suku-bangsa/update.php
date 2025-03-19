<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SukuBangsa $model */

$this->title = 'Update Suku Bangsa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Suku Bangsas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suku-bangsa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
