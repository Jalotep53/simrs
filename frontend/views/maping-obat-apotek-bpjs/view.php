<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MapingObatApotekBpjs $model */

$this->title = $model->kode_brng_apotek_bpjs;
$this->params['breadcrumbs'][] = ['label' => 'Maping Obat Apotek Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maping-obat-apotek-bpjs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_brng_apotek_bpjs' => $model->kode_brng_apotek_bpjs], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_brng_apotek_bpjs' => $model->kode_brng_apotek_bpjs], [
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
            'kode_brng',
            'kode_brng_apotek_bpjs',
            'nama_brng_apotek_bpjs',
        ],
    ]) ?>

</div>
