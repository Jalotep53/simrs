<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetInsentif $model */

$this->title = 'Create Set Insentif';
$this->params['breadcrumbs'][] = ['label' => 'Set Insentifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-insentif-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
