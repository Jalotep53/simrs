<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanLabmb $model */

$this->title = 'Update Permintaan Labmb: ' . $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Labmbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->noorder, 'url' => ['view', 'noorder' => $model->noorder]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-labmb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
