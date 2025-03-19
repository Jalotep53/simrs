<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingVaksin $model */

$this->title = 'Create Satu Sehat Mapping Vaksin';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Vaksins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-vaksin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
