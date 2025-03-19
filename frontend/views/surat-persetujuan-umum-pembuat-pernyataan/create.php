<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanUmumPembuatPernyataan $model */

$this->title = 'Create Surat Persetujuan Umum Pembuat Pernyataan';
$this->params['breadcrumbs'][] = ['label' => 'Surat Persetujuan Umum Pembuat Pernyataans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-persetujuan-umum-pembuat-pernyataan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
