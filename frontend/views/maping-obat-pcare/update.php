<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingObatPcare $model */

$this->title = 'Update Maping Obat Pcare: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Maping Obat Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maping-obat-pcare-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
