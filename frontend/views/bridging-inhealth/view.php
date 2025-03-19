<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingInhealth $model */

$this->title = $model->no_sjp;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Inhealths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bridging-inhealth-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_sjp' => $model->no_sjp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_sjp' => $model->no_sjp], [
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
            'no_sjp',
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
            'diagawal2',
            'nmdiagnosaawal2',
            'kdpolitujuan',
            'nmpolitujuan',
            'klsrawat',
            'klsdesc',
            'kdbu',
            'nmbu',
            'lakalantas',
            'lokasilaka',
            'user',
            'nomr',
            'nama_pasien',
            'tanggal_lahir',
            'jkel',
            'no_kartu',
            'tglpulang',
            'plan',
            'plandesc',
            'idakomodasi',
            'tipesjp',
            'tipecob',
        ],
    ]) ?>

</div>
