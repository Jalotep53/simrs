<?php

use frontend\models\AuditBundleIadp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIadpSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Bundle Iadps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-iadp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Bundle Iadp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'nik',
            'handhygiene',
            'apd',
            'skin_antiseptik',
            //'lokasi_iv',
            //'perawatan_rutin',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditBundleIadp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'nik' => $model->nik]);
                 }
            ],
        ],
    ]); ?>


</div>
