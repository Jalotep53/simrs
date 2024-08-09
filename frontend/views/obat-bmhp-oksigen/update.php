<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatBmhpOksigen $model */

$this->title = 'Update Obat Bmhp Oksigen: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Obat Bmhp Oksigens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-bmhp-oksigen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
