<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JasaLain $model */

$this->title = 'Update Jasa Lain: ' . $model->thn;
$this->params['breadcrumbs'][] = ['label' => 'Jasa Lains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->thn, 'url' => ['view', 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id, 'bsr_jasa' => $model->bsr_jasa, 'ktg' => $model->ktg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jasa-lain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
