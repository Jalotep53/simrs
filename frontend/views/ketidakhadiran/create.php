<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ketidakhadiran $model */

$this->title = 'Create Ketidakhadiran';
$this->params['breadcrumbs'][] = ['label' => 'Ketidakhadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketidakhadiran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
