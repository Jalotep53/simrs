<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Icd9 $model */

$this->title = 'Create Icd9';
$this->params['breadcrumbs'][] = ['label' => 'Icd9s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="icd9-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
