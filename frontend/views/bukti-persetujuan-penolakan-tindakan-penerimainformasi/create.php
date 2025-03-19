<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanPenolakanTindakanPenerimainformasi $model */

$this->title = 'Create Bukti Persetujuan Penolakan Tindakan Penerimainformasi';
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Penolakan Tindakan Penerimainformasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-persetujuan-penolakan-tindakan-penerimainformasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
