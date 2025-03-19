<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthMapingPoli $model */

$this->title = 'Create Inhealth Maping Poli';
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Maping Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-maping-poli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
