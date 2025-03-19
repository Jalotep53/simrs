<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanRawatInapPembuatPernyataan $model */

$this->title = 'Create Surat Persetujuan Rawat Inap Pembuat Pernyataan';
$this->params['breadcrumbs'][] = ['label' => 'Surat Persetujuan Rawat Inap Pembuat Pernyataans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-persetujuan-rawat-inap-pembuat-pernyataan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
