<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranObatBhp $model */

$this->title = 'Update Pengeluaran Obat Bhp: ' . $model->no_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_keluar, 'url' => ['view', 'no_keluar' => $model->no_keluar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengeluaran-obat-bhp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
