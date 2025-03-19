<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Piutang $model */

$this->title = $model->nota_piutang;
$this->params['breadcrumbs'][] = ['label' => 'Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="piutang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nota_piutang' => $model->nota_piutang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nota_piutang' => $model->nota_piutang], [
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
            'nota_piutang',
            'tgl_piutang',
            'nip',
            'no_rkm_medis',
            'nm_pasien',
            'catatan',
            'jns_jual',
            'ongkir',
            'uangmuka',
            'sisapiutang',
            'status',
            'tgltempo',
            'kd_bangsal',
        ],
    ]) ?>

</div>
