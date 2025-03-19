<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratRak $model */

$this->title = 'Update Surat Rak: ' . $model->kd;
$this->params['breadcrumbs'][] = ['label' => 'Surat Raks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd, 'url' => ['view', 'kd' => $model->kd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-rak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
