<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Databarang $model */

$this->title = 'Create Databarang';
$this->params['breadcrumbs'][] = ['label' => 'Databarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="databarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
