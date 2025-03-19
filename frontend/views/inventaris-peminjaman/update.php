<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisPeminjaman $model */

$this->title = 'Update Inventaris Peminjaman: ' . $model->peminjam;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->peminjam, 'url' => ['view', 'peminjam' => $model->peminjam, 'no_inventaris' => $model->no_inventaris, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-peminjaman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
