<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingTindakanPcare $model */

$this->title = 'Create Maping Tindakan Pcare';
$this->params['breadcrumbs'][] = ['label' => 'Maping Tindakan Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-tindakan-pcare-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
