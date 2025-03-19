<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthMapingDokter $model */

$this->title = 'Create Inhealth Maping Dokter';
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Maping Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-maping-dokter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
