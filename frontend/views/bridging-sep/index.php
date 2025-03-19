<?php

use frontend\models\BridgingSep;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSepSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Seps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-sep-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Sep', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'no_rawat',
            'tglsep',
            'tglrujukan',
            'no_rujukan',
            //'kdppkrujukan',
            //'nmppkrujukan',
            //'kdppkpelayanan',
            //'nmppkpelayanan',
            //'jnspelayanan',
            //'catatan',
            //'diagawal',
            //'nmdiagnosaawal',
            //'kdpolitujuan',
            //'nmpolitujuan',
            //'klsrawat',
            //'klsnaik',
            //'pembiayaan',
            //'pjnaikkelas',
            //'lakalantas',
            //'user',
            //'nomr',
            //'nama_pasien',
            //'tanggal_lahir',
            //'peserta',
            //'jkel',
            //'no_kartu',
            //'tglpulang',
            //'asal_rujukan',
            //'eksekutif',
            //'cob',
            //'notelep',
            //'katarak',
            //'tglkkl',
            //'keterangankkl',
            //'suplesi',
            //'no_sep_suplesi',
            //'kdprop',
            //'nmprop',
            //'kdkab',
            //'nmkab',
            //'kdkec',
            //'nmkec',
            //'noskdp',
            //'kddpjp',
            //'nmdpdjp',
            //'tujuankunjungan',
            //'flagprosedur',
            //'penunjang',
            //'asesmenpelayanan',
            //'kddpjplayanan',
            //'nmdpjplayanan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingSep $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_sep' => $model->no_sep]);
                 }
            ],
        ],
    ]); ?>


</div>
