<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JawabanPioApoteker $model */

$this->title = 'Create Jawaban Pio Apoteker';
$this->params['breadcrumbs'][] = ['label' => 'Jawaban Pio Apotekers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jawaban-pio-apoteker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
