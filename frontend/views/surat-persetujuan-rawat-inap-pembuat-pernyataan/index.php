<?php

use frontend\models\SuratPersetujuanRawatInapPembuatPernyataan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanRawatInapPembuatPernyataanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Persetujuan Rawat Inap Pembuat Pernyataans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-persetujuan-rawat-inap-pembuat-pernyataan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Persetujuan Rawat Inap Pembuat Pernyataan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratPersetujuanRawatInapPembuatPernyataan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
