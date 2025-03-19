<?php

use frontend\models\MasterMenolakAnjuranMedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMenolakAnjuranMedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Menolak Anjuran Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-menolak-anjuran-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Menolak Anjuran Medis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_penolakan',
            'nama_penolakan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterMenolakAnjuranMedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_penolakan' => $model->kode_penolakan]);
                 }
            ],
        ],
    ]); ?>


</div>
