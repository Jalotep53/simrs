<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryPermintaanRadiologi $model */

$this->title = 'Create Temporary Permintaan Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Temporary Permintaan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-permintaan-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
