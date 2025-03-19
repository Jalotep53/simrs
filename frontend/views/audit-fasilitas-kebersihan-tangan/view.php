<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditFasilitasKebersihanTangan $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Fasilitas Kebersihan Tangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-fasilitas-kebersihan-tangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang], [
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
            'tanggal',
            'id_ruang',
            'audit1',
            'audit2',
            'audit3',
            'audit4',
            'audit5',
            'audit6',
            'audit7',
            'audit8',
            'audit9',
        ],
    ]) ?>

</div>
