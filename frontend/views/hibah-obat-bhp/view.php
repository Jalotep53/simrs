<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\HibahObatBhp $model */

$this->title = $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Hibah Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hibah-obat-bhp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_hibah' => $model->no_hibah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_hibah' => $model->no_hibah], [
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
            'no_hibah',
            'kode_pemberi',
            'nip',
            'tgl_hibah',
            'totalhibah',
            'totalnilai',
            'kd_bangsal',
        ],
    ]) ?>

</div>
