<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPengeluaranObatBhp $model */

$this->title = 'Create Detail Pengeluaran Obat Bhp';
$this->params['breadcrumbs'][] = ['label' => 'Detail Pengeluaran Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-pengeluaran-obat-bhp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
