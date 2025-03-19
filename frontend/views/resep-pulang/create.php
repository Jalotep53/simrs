<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepPulang $model */

$this->title = 'Create Resep Pulang';
$this->params['breadcrumbs'][] = ['label' => 'Resep Pulangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-pulang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
