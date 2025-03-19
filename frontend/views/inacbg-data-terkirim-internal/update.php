<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgDataTerkirimInternal $model */

$this->title = 'Update Inacbg Data Terkirim Internal: ' . $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Data Terkirim Internals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sep, 'url' => ['view', 'no_sep' => $model->no_sep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inacbg-data-terkirim-internal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
