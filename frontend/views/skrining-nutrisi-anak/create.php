<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiAnak $model */

$this->title = 'Create Skrining Nutrisi Anak';
$this->params['breadcrumbs'][] = ['label' => 'Skrining Nutrisi Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skrining-nutrisi-anak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
