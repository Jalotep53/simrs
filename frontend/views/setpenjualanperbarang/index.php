<?php

use frontend\models\Setpenjualanperbarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetpenjualanperbarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Setpenjualanperbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setpenjualanperbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Setpenjualanperbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ralan',
            'kelas1',
            'kelas2',
            'kelas3',
            'utama',
            //'vip',
            //'vvip',
            //'beliluar',
            //'jualbebas',
            //'karyawan',
            //'kode_brng',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Setpenjualanperbarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
