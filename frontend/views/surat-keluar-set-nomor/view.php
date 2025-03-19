<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarSetNomor $model */

$this->title = $model->id_no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluar Set Nomors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-keluar-set-nomor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_no_surat' => $model->id_no_surat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_no_surat' => $model->id_no_surat], [
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
            'id_no_surat',
            'jenis_surat',
            'digit_1',
            'digit_2',
            'digit_3',
            'digit_4',
            'digit_5',
            'digit_6',
            'digit_7',
            'digit_8',
            'digit_9',
            'digit_10',
            'digit_11',
            'digit_12',
            'digit_13',
            'digit_14',
            'digit_15',
        ],
    ]) ?>

</div>
