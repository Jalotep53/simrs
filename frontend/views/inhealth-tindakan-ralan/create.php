<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanRalan $model */

$this->title = 'Create Inhealth Tindakan Ralan';
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Tindakan Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-tindakan-ralan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
