<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanRuang $model */

$this->title = 'Update Perpustakaan Ruang: ' . $model->kd_ruang;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_ruang, 'url' => ['view', 'kd_ruang' => $model->kd_ruang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-ruang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
