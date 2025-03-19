<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TokoSuratPemesanan $model */

$this->title = 'Create Toko Surat Pemesanan';
$this->params['breadcrumbs'][] = ['label' => 'Toko Surat Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toko-surat-pemesanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
