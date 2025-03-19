<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoJatuhNeonatus $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Risiko Jatuh Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-risiko-jatuh-neonatus-view">

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
            'intervensi1',
            'intervensi2',
            'intervensi3',
            'intervensi4',
            'intervensi5',
            'intervensi6',
            'intervensi7',
            'intervensi8',
            'intervensi9',
            'edukasi1',
            'edukasi2',
            'edukasi3',
            'edukasi4',
            'edukasi5',
            'sasaran1',
            'sasaran2',
            'sasaran3',
            'sasaran4',
            'evaluasi1',
            'evaluasi2',
            'evaluasi3',
            'nip',
        ],
    ]) ?>

</div>
