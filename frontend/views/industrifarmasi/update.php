<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Industrifarmasi $model */

$this->title = 'Update Industrifarmasi: ' . $model->kode_industri;
$this->params['breadcrumbs'][] = ['label' => 'Industrifarmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_industri, 'url' => ['view', 'kode_industri' => $model->kode_industri]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="industrifarmasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
