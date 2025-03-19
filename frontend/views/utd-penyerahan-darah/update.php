<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarah $model */

$this->title = 'Update Utd Penyerahan Darah: ' . $model->no_penyerahan;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penyerahan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_penyerahan, 'url' => ['view', 'no_penyerahan' => $model->no_penyerahan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-penyerahan-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
