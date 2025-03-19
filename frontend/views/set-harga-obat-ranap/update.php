<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaObatRanap $model */

$this->title = 'Update Set Harga Obat Ranap: ' . $model->kd_pj;
$this->params['breadcrumbs'][] = ['label' => 'Set Harga Obat Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pj, 'url' => ['view', 'kd_pj' => $model->kd_pj, 'kelas' => $model->kelas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-harga-obat-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
