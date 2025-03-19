<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Icd9 $model */

$this->title = 'Update Icd9: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Icd9s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="icd9-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
