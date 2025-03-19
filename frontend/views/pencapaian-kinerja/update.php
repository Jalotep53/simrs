<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PencapaianKinerja $model */

$this->title = 'Update Pencapaian Kinerja: ' . $model->kode_pencapaian;
$this->params['breadcrumbs'][] = ['label' => 'Pencapaian Kinerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_pencapaian, 'url' => ['view', 'kode_pencapaian' => $model->kode_pencapaian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pencapaian-kinerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
