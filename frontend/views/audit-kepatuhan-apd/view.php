<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKepatuhanApd $model */

$this->title = $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Audit Kepatuhan Apds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-kepatuhan-apd-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nik' => $model->nik, 'tindakan' => $model->tindakan, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nik' => $model->nik, 'tindakan' => $model->tindakan, 'tanggal' => $model->tanggal], [
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
            'nik',
            'tindakan',
            'tanggal',
            'topi',
            'masker',
            'kacamata',
            'sarungtangan',
            'apron',
            'sepatu',
        ],
    ]) ?>

</div>
