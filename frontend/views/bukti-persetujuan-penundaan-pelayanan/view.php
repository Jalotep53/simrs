<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanPenundaanPelayanan $model */

$this->title = $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Penundaan Pelayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bukti-persetujuan-penundaan-pelayanan-view">

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
