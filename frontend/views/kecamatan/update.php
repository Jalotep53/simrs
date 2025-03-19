<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kecamatan $model */

$this->title = 'Update Kecamatan: ' . $model->kd_kec;
$this->params['breadcrumbs'][] = ['label' => 'Kecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kec, 'url' => ['view', 'kd_kec' => $model->kd_kec]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kecamatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
