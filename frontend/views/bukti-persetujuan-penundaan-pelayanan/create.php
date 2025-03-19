<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanPenundaanPelayanan $model */

$this->title = 'Create Bukti Persetujuan Penundaan Pelayanan';
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Penundaan Pelayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-persetujuan-penundaan-pelayanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
