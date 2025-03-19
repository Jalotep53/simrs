<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPernyataanPasienUmum $model */

$this->title = 'Create Surat Pernyataan Pasien Umum';
$this->params['breadcrumbs'][] = ['label' => 'Surat Pernyataan Pasien Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pernyataan-pasien-umum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
