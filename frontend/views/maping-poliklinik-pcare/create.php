<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliklinikPcare $model */

$this->title = 'Create Maping Poliklinik Pcare';
$this->params['breadcrumbs'][] = ['label' => 'Maping Poliklinik Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-poliklinik-pcare-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
