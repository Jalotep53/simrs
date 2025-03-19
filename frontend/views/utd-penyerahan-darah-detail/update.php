<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarahDetail $model */

$this->title = 'Update Utd Penyerahan Darah Detail: ' . $model->no_penyerahan;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penyerahan Darah Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_penyerahan, 'url' => ['view', 'no_penyerahan' => $model->no_penyerahan, 'no_kantong' => $model->no_kantong]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-penyerahan-darah-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
