<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanLabpa $model */

$this->title = 'Update Permintaan Labpa: ' . $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Labpas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->noorder, 'url' => ['view', 'noorder' => $model->noorder]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-labpa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
