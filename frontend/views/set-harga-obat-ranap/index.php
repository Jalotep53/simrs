<?php

use frontend\models\SetHargaObatRanap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaObatRanapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Harga Obat Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-harga-obat-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Harga Obat Ranap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pj',
            'kelas',
            'hargajual',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetHargaObatRanap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_pj' => $model->kd_pj, 'kelas' => $model->kelas]);
                 }
            ],
        ],
    ]); ?>


</div>
