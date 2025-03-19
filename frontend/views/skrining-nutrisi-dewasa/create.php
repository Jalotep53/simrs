<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiDewasa $model */

$this->title = 'Create Skrining Nutrisi Dewasa';
$this->params['breadcrumbs'][] = ['label' => 'Skrining Nutrisi Dewasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skrining-nutrisi-dewasa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
