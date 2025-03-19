<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturjual $model */

$this->title = 'Create Tampreturjual';
$this->params['breadcrumbs'][] = ['label' => 'Tampreturjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampreturjual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
