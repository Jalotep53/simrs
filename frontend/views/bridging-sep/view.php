<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSep $model */

$this->title = $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Seps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bridging-sep-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_sep' => $model->no_sep], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_sep' => $model->no_sep], [
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
            'no_rawat',
            'tglsep',
            'tglrujukan',
            'no_rujukan',
            'kdppkrujukan',
            'nmppkrujukan',
            'kdppkpelayanan',
            'nmppkpelayanan',
            'jnspelayanan',
            'catatan',
            'diagawal',
            'nmdiagnosaawal',
            'kdpolitujuan',
            'nmpolitujuan',
            'klsrawat',
            'klsnaik',
            'pembiayaan',
            'pjnaikkelas',
            'lakalantas',
            'user',
            'nomr',
            'nama_pasien',
            'tanggal_lahir',
            'peserta',
            'jkel',
            'no_kartu',
            'tglpulang',
            'asal_rujukan',
            'eksekutif',
            'cob',
            'notelep',
            'katarak',
            'tglkkl',
            'keterangankkl',
            'suplesi',
            'no_sep_suplesi',
            'kdprop',
            'nmprop',
            'kdkab',
            'nmkab',
            'kdkec',
            'nmkec',
            'noskdp',
            'kddpjp',
            'nmdpdjp',
            'tujuankunjungan',
            'flagprosedur',
            'penunjang',
            'asesmenpelayanan',
            'kddpjplayanan',
            'nmdpjplayanan',
        ],
    ]) ?>

</div>
