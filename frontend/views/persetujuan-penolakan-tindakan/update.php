<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenolakanTindakan $model */

$this->title = 'Update Persetujuan Penolakan Tindakan: ' . $model->no_pernyataan;
$this->params['breadcrumbs'][] = ['label' => 'Persetujuan Penolakan Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pernyataan, 'url' => ['view', 'no_pernyataan' => $model->no_pernyataan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="persetujuan-penolakan-tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
