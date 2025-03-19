<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPulangAtasPermintaanSendiriPembuatPernyataan $model */

$this->title = 'Create Surat Pulang Atas Permintaan Sendiri Pembuat Pernyataan';
$this->params['breadcrumbs'][] = ['label' => 'Surat Pulang Atas Permintaan Sendiri Pembuat Pernyataans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pulang-atas-permintaan-sendiri-pembuat-pernyataan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
