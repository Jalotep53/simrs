<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CacatFisik $model */

$this->title = 'Update Cacat Fisik: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cacat Fisiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cacat-fisik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
