<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Opname $model */

$this->title = 'Create Opname';
$this->params['breadcrumbs'][] = ['label' => 'Opnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
