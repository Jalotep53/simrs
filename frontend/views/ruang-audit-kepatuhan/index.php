<?php

use frontend\models\RuangAuditKepatuhan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RuangAuditKepatuhanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ruang Audit Kepatuhans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-audit-kepatuhan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ruang Audit Kepatuhan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ruang',
            'nama_ruang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RuangAuditKepatuhan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ruang' => $model->id_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>
