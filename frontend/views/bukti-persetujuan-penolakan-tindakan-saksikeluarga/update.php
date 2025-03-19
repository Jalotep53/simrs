<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanPenolakanTindakanSaksikeluarga $model */

$this->title = 'Update Bukti Persetujuan Penolakan Tindakan Saksikeluarga: ' . $model->no_pernyataan;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Penolakan Tindakan Saksikeluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pernyataan, 'url' => ['view', 'no_pernyataan' => $model->no_pernyataan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukti-persetujuan-penolakan-tindakan-saksikeluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
