<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanEwsNeonatus $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Ews Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemantauan-ews-neonatus-view">

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
            'parameter1',
            'skor1',
            'parameter2',
            'skor2',
            'parameter3',
            'skor3',
            'parameter4',
            'skor4',
            'parameter5',
            'skor5',
            'parameter6',
            'skor6',
            'parameter7',
            'skor7',
            'parameter8',
            'skor8',
            'skor_total',
            'parameter_total',
            'code_blue',
            'nip',
        ],
    ]) ?>

</div>
