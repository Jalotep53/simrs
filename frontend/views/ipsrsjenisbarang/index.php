<?php

use frontend\models\Ipsrsjenisbarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsjenisbarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ipsrsjenisbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrsjenisbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ipsrsjenisbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_jenis',
            'nm_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ipsrsjenisbarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis' => $model->kd_jenis]);
                 }
            ],
        ],
    ]); ?>


</div>
