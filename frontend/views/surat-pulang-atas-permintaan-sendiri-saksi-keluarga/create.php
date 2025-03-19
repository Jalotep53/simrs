<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPulangAtasPermintaanSendiriSaksiKeluarga $model */

$this->title = 'Create Surat Pulang Atas Permintaan Sendiri Saksi Keluarga';
$this->params['breadcrumbs'][] = ['label' => 'Surat Pulang Atas Permintaan Sendiri Saksi Keluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pulang-atas-permintaan-sendiri-saksi-keluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
