<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareTindakanRanapDiberikan $model */

$this->title = 'Create Pcare Tindakan Ranap Diberikan';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Tindakan Ranap Diberikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-tindakan-ranap-diberikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
