<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Antripengkajianrestrain $model */

$this->title = 'Create Antripengkajianrestrain';
$this->params['breadcrumbs'][] = ['label' => 'Antripengkajianrestrains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antripengkajianrestrain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
