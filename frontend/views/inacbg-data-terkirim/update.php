<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgDataTerkirim $model */

$this->title = 'Update Inacbg Data Terkirim: ' . $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Data Terkirims', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sep, 'url' => ['view', 'no_sep' => $model->no_sep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inacbg-data-terkirim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
