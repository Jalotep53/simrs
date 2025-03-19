<?php

use frontend\models\AuditKamarJenazah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKamarJenazahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Kamar Jenazahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-kamar-jenazah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Kamar Jenazah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'audit1',
            'audit2',
            'audit3',
            'audit4',
            //'audit5',
            //'audit6',
            //'audit7',
            //'audit8',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditKamarJenazah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
