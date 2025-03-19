<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingTindakanRanapPcare $model */

$this->title = 'Create Maping Tindakan Ranap Pcare';
$this->params['breadcrumbs'][] = ['label' => 'Maping Tindakan Ranap Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-tindakan-ranap-pcare-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
