<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LogDukcapilAceh $model */

$this->title = 'Create Log Dukcapil Aceh';
$this->params['breadcrumbs'][] = ['label' => 'Log Dukcapil Acehs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-dukcapil-aceh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
