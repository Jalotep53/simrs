<?php

use frontend\models\CatatanAdimeGizi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanAdimeGiziSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Catatan Adime Gizis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-adime-gizi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Catatan Adime Gizi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'asesmen',
            'diagnosis',
            'intervensi',
            //'monitoring',
            //'evaluasi',
            //'instruksi',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CatatanAdimeGizi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
