<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailhibahObatBhp $model */

$this->title = 'Update Detailhibah Obat Bhp: ' . $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Detailhibah Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_hibah, 'url' => ['view', 'no_hibah' => $model->no_hibah, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailhibah-obat-bhp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
