<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsDewasa $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Pews Dewasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemantauan-pews-dewasa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'no_rawat',
            'tanggal',
            'parameter_laju_respirasi',
            'skor_laju_respirasi',
            'parameter_saturasi_oksigen',
            'skor_saturasi_oksigen',
            'parameter_suplemen_oksigen',
            'skor_suplemen_oksigen',
            'parameter_tekanan_darah_sistolik',
            'skor_tekanan_darah_sistolik',
            'parameter_laju_jantung',
            'skor_laju_jantung',
            'parameter_kesadaran',
            'skor_kesadaran',
            'parameter_temperatur',
            'skor_temperatur',
            'skor_total',
            'parameter_total',
            'nip',
        ],
    ]) ?>

</div>
