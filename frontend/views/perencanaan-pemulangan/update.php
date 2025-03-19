<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerencanaanPemulangan $model */

$this->title = 'Update Perencanaan Pemulangan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Perencanaan Pemulangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perencanaan-pemulangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
