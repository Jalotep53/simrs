<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanPenolakanTindakanPenerimainformasi $model */

$this->title = $model->no_pernyataan;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Penolakan Tindakan Penerimainformasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bukti-persetujuan-penolakan-tindakan-penerimainformasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_pernyataan' => $model->no_pernyataan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_pernyataan' => $model->no_pernyataan], [
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
            'no_pernyataan',
            'photo',
        ],
    ]) ?>

</div>
