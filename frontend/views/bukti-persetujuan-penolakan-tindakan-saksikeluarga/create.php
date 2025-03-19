<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanPenolakanTindakanSaksikeluarga $model */

$this->title = 'Create Bukti Persetujuan Penolakan Tindakan Saksikeluarga';
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Penolakan Tindakan Saksikeluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-persetujuan-penolakan-tindakan-saksikeluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
