<?php

use frontend\models\AuditPembuanganLimbahCairInfeksius;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganLimbahCairInfeksiusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Pembuangan Limbah Cair Infeksiuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-pembuangan-limbah-cair-infeksius-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Pembuangan Limbah Cair Infeksius', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'id_ruang',
            'audit1',
            'audit2',
            'audit3',
            //'audit4',
            //'audit5',
            //'audit6',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditPembuanganLimbahCairInfeksius $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>
