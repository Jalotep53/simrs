<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranHarian $model */

$this->title = 'Update Pengeluaran Harian: ' . $model->no_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_keluar, 'url' => ['view', 'no_keluar' => $model->no_keluar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengeluaran-harian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
