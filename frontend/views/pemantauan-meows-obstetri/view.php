<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanMeowsObstetri $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Meows Obstetris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemantauan-meows-obstetri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_rawat',
            'tanggal',
            'parameter_pernapasan',
            'skor_pernapasan',
            'parameter_saturasi',
            'skor_saturasi',
            'parameter_temperatur',
            'skor_temperatur',
            'parameter_tekanan_darah_sistole',
            'skor_tekanan_darah_sistole',
            'parameter_tekanan_darah_diastole',
            'skor_tekanan_darah_diastole',
            'parameter_denyut_jantung',
            'skor_denyut_jantung',
            'parameter_kesadaran',
            'skor_kesadaran',
            'parameter_ketuban',
            'skor_ketuban',
            'parameter_discharge',
            'skor_discharge',
            'parameter_proteinuria',
            'skor_proteinuria',
            'skor_total',
            'parameter_total',
            'code_blue',
            'nip',
        ],
    ]) ?>

</div>
