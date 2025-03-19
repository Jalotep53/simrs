<?php

use frontend\models\InventarisHibah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisHibahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Hibahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-hibah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Hibah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_hibah',
            'kode_pemberi',
            'nip',
            'tgl_hibah',
            'totalhibah',
            //'kd_rek_aset',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisHibah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_hibah' => $model->no_hibah]);
                 }
            ],
        ],
    ]); ?>


</div>
