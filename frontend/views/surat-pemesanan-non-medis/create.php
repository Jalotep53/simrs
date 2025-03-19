<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPemesananNonMedis $model */

$this->title = 'Create Surat Pemesanan Non Medis';
$this->params['breadcrumbs'][] = ['label' => 'Surat Pemesanan Non Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pemesanan-non-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
