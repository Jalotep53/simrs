<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingResepApotekBpjs $model */

$this->title = $model->no_sep_apotek;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Resep Apotek Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bridging-resep-apotek-bpjs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_sep_apotek' => $model->no_sep_apotek], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_sep_apotek' => $model->no_sep_apotek], [
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
            'no_sep',
            'no_sep_apotek',
            'tgl_sep',
            'kdpoli',
            'nmpoli',
            'kdjenis',
            'nota_piutang',
            'id_user_sep',
            'tgl_resep',
            'tgl_pelayanan',
            'kodedpjp',
            'nmdpjp',
            'iterasi',
            'no_kartu',
            'nama_pasien',
            'kdppkrujukan',
            'nmppkpelayanan',
            'byTagRsp',
            'byVerRsp',
            'status',
        ],
    ]) ?>

</div>
