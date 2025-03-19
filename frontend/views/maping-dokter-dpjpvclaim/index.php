<?php

use frontend\models\MapingDokterDpjpvclaim;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MapingDokterDpjpvclaimSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maping Dokter Dpjpvclaims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-dokter-dpjpvclaim-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maping Dokter Dpjpvclaim', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_dokter',
            'kd_dokter_bpjs',
            'nm_dokter_bpjs',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MapingDokterDpjpvclaim $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_dokter' => $model->kd_dokter]);
                 }
            ],
        ],
    ]); ?>


</div>
