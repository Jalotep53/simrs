<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\GolonganPolri $model */

$this->title = 'Update Golongan Polri: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Golongan Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golongan-polri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
