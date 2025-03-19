<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanPenolakanTindakanPenerimainformasi $model */

$this->title = 'Update Bukti Persetujuan Penolakan Tindakan Penerimainformasi: ' . $model->no_pernyataan;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Penolakan Tindakan Penerimainformasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pernyataan, 'url' => ['view', 'no_pernyataan' => $model->no_pernyataan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukti-persetujuan-penolakan-tindakan-penerimainformasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
