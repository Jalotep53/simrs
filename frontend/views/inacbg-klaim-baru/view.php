<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaru $model */

$this->title = $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Klaim Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inacbg-klaim-baru-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_sep' => $model->no_sep], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_sep' => $model->no_sep], [
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
            'no_sep',
            'patient_id',
            'admission_id',
            'hospital_admission_id',
        ],
    ]) ?>

</div>
