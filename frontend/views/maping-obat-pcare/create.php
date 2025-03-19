<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingObatPcare $model */

$this->title = 'Create Maping Obat Pcare';
$this->params['breadcrumbs'][] = ['label' => 'Maping Obat Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-obat-pcare-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
