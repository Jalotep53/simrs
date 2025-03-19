<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetWarung $model */

$this->title = 'Create Set Warung';
$this->params['breadcrumbs'][] = ['label' => 'Set Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-warung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
