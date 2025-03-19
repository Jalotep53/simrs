<?php

use frontend\models\Ipsrsbarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsbarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ipsrsbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrsbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ipsrsbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'nama_brng',
            'kode_sat',
            'jenis',
            'stok',
            //'harga',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ipsrsbarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
