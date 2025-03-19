<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiDewasa $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Skrining Nutrisi Dewasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skrining-nutrisi-dewasa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
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
            'td',
            'hr',
            'rr',
            'suhu',
            'bb',
            'tbpb',
            'spo2',
            'alergi',
            'sg1',
            'nilai1',
            'sg2',
            'nilai2',
            'total_hasil',
            'nip',
        ],
    ]) ?>

</div>
