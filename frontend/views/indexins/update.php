<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Indexins $model */

$this->title = 'Update Indexins: ' . $model->dep_id;
$this->params['breadcrumbs'][] = ['label' => 'Indexins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dep_id, 'url' => ['view', 'dep_id' => $model->dep_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indexins-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
