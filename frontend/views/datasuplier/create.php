<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Datasuplier $model */

$this->title = 'Create Datasuplier';
$this->params['breadcrumbs'][] = ['label' => 'Datasupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datasuplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
