<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhusus $model */

$this->title = $model->no_rujukan;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs Khususes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bridging-rujukan-bpjs-khusus-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rujukan' => $model->no_rujukan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rujukan' => $model->no_rujukan], [
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
            'nokapst',
            'nmpst',
            'tglrujukan_awal',
            'tglrujukan_berakhir',
        ],
    ]) ?>

</div>
