<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPernyataanPasienUmumPembuatPernyataan $model */

$this->title = $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Pernyataan Pasien Umum Pembuat Pernyataans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-pernyataan-pasien-umum-pembuat-pernyataan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_surat' => $model->no_surat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_surat' => $model->no_surat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_surat',
            'photo',
        ],
    ]) ?>

</div>
