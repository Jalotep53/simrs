<?php

use frontend\models\PemantauanMeowsObstetri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanMeowsObstetriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemantauan Meows Obstetris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemantauan-meows-obstetri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemantauan Meows Obstetri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'parameter_pernapasan',
            'skor_pernapasan',
            'parameter_saturasi',
            //'skor_saturasi',
            //'parameter_temperatur',
            //'skor_temperatur',
            //'parameter_tekanan_darah_sistole',
            //'skor_tekanan_darah_sistole',
            //'parameter_tekanan_darah_diastole',
            //'skor_tekanan_darah_diastole',
            //'parameter_denyut_jantung',
            //'skor_denyut_jantung',
            //'parameter_kesadaran',
            //'skor_kesadaran',
            //'parameter_ketuban',
            //'skor_ketuban',
            //'parameter_discharge',
            //'skor_discharge',
            //'parameter_proteinuria',
            //'skor_proteinuria',
            //'skor_total',
            //'parameter_total',
            //'code_blue',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemantauanMeowsObstetri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
