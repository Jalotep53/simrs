<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Propinsi $model */

$this->title = 'Create Propinsi';
$this->params['breadcrumbs'][] = ['label' => 'Propinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propinsi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
