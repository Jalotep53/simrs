<?php

use frontend\models\AuditKepatuhanApd;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKepatuhanApdSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Kepatuhan Apds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-kepatuhan-apd-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Kepatuhan Apd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nik',
            'tindakan',
            'tanggal',
            'topi',
            'masker',
            //'kacamata',
            //'sarungtangan',
            //'apron',
            //'sepatu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditKepatuhanApd $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nik' => $model->nik, 'tindakan' => $model->tindakan, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
