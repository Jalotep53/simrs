<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPemesananMedis $model */

$this->title = 'Create Surat Pemesanan Medis';
$this->params['breadcrumbs'][] = ['label' => 'Surat Pemesanan Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pemesanan-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
