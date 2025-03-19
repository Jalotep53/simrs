<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Inventaris $model */

$this->title = 'Create Inventaris';
$this->params['breadcrumbs'][] = ['label' => 'Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
