<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Parkir $model */

$this->title = 'Create Parkir';
$this->params['breadcrumbs'][] = ['label' => 'Parkirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parkir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
