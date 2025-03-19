<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkorStewardPascaAnestesi $model */

$this->title = 'Create Skor Steward Pasca Anestesi';
$this->params['breadcrumbs'][] = ['label' => 'Skor Steward Pasca Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skor-steward-pasca-anestesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
