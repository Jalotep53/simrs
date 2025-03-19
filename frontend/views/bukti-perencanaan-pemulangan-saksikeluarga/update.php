<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPerencanaanPemulanganSaksikeluarga $model */

$this->title = 'Update Bukti Perencanaan Pemulangan Saksikeluarga: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Perencanaan Pemulangan Saksikeluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukti-perencanaan-pemulangan-saksikeluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
