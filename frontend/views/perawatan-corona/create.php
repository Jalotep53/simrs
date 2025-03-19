<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerawatanCorona $model */

$this->title = 'Create Perawatan Corona';
$this->params['breadcrumbs'][] = ['label' => 'Perawatan Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perawatan-corona-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
