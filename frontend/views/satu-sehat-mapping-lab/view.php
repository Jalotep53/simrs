<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLab $model */

$this->title = $model->id_template;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="satu-sehat-mapping-lab-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_template' => $model->id_template], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_template' => $model->id_template], [
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
            'id_template',
            'code',
            'system',
            'display',
            'sampel_code',
            'sampel_system',
            'sampel_display',
        ],
    ]) ?>

</div>
