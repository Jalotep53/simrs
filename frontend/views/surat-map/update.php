<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMap $model */

$this->title = 'Update Surat Map: ' . $model->kd;
$this->params['breadcrumbs'][] = ['label' => 'Surat Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd, 'url' => ['view', 'kd' => $model->kd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-map-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
