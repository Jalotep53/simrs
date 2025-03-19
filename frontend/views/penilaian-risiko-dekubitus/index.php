<?php

use frontend\models\PenilaianRisikoDekubitus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoDekubitusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Risiko Dekubituses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-risiko-dekubitus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Risiko Dekubitus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kondisi_fisik',
            'kondisi_fisik_nilai',
            'status_mental',
            //'status_mental_nilai',
            //'aktifitas',
            //'aktifitas_nilai',
            //'mobilitas',
            //'mobilitas_nilai',
            //'inkontinensia',
            //'inkontinensia_nilai',
            //'totalnilai',
            //'kategorinilai',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianRisikoDekubitus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
