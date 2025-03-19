<?php

use frontend\models\SetOtomatisTindakanRalanDokterpetugas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalanDokterpetugasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Otomatis Tindakan Ralan Dokterpetugas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-otomatis-tindakan-ralan-dokterpetugas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Otomatis Tindakan Ralan Dokterpetugas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_dokter',
            'kd_jenis_prw',
            'kd_pj',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetOtomatisTindakanRalanDokterpetugas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_dokter' => $model->kd_dokter, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj]);
                 }
            ],
        ],
    ]); ?>


</div>
