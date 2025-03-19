<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\GolonganTni $model */

$this->title = 'Update Golongan Tni: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Golongan Tnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golongan-tni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
