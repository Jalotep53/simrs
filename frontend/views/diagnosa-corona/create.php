<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DiagnosaCorona $model */

$this->title = 'Create Diagnosa Corona';
$this->params['breadcrumbs'][] = ['label' => 'Diagnosa Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-corona-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
