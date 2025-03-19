<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareTindakanRalanDiberikan $model */

$this->title = 'Create Pcare Tindakan Ralan Diberikan';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Tindakan Ralan Diberikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-tindakan-ralan-diberikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
