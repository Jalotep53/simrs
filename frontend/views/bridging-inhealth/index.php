<?php

use frontend\models\BridgingInhealth;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingInhealthSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Inhealths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-inhealth-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Inhealth', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sjp',
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
            //'diagawal2',
            //'nmdiagnosaawal2',
            //'kdpolitujuan',
            //'nmpolitujuan',
            //'klsrawat',
            //'klsdesc',
            //'kdbu',
            //'nmbu',
            //'lakalantas',
            //'lokasilaka',
            //'user',
            //'nomr',
            //'nama_pasien',
            //'tanggal_lahir',
            //'jkel',
            //'no_kartu',
            //'tglpulang',
            //'plan',
            //'plandesc',
            //'idakomodasi',
            //'tipesjp',
            //'tipecob',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingInhealth $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_sjp' => $model->no_sjp]);
                 }
            ],
        ],
    ]); ?>


</div>
