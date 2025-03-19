<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususProsedur $model */

$this->title = $model->no_rujukan;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs Khusus Prosedurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bridging-rujukan-bpjs-khusus-prosedur-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rujukan' => $model->no_rujukan, 'kode_prosedur' => $model->kode_prosedur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rujukan' => $model->no_rujukan, 'kode_prosedur' => $model->kode_prosedur], [
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
            'no_rujukan',
            'kode_prosedur',
            'nama_prosedur',
        ],
    ]) ?>

</div>
