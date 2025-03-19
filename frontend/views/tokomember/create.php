<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokomember $model */

$this->title = 'Create Tokomember';
$this->params['breadcrumbs'][] = ['label' => 'Tokomembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokomember-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
