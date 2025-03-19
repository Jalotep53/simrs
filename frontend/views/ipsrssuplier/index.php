<?php

use frontend\models\Ipsrssuplier;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrssuplierSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ipsrssupliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrssuplier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ipsrssuplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_suplier',
            'nama_suplier',
            'alamat',
            'kota',
            'no_telp',
            //'nama_bank',
            //'rekening',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ipsrssuplier $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_suplier' => $model->kode_suplier]);
                 }
            ],
        ],
    ]); ?>


</div>
