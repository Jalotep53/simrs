<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AsuhanGizi $model */

$this->title = 'Create Asuhan Gizi';
$this->params['breadcrumbs'][] = ['label' => 'Asuhan Gizis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asuhan-gizi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
