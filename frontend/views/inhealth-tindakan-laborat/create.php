<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanLaborat $model */

$this->title = 'Create Inhealth Tindakan Laborat';
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Tindakan Laborats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-tindakan-laborat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
