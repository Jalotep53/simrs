<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Hemodialisa $model */

$this->title = 'Create Hemodialisa';
$this->params['breadcrumbs'][] = ['label' => 'Hemodialisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hemodialisa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
