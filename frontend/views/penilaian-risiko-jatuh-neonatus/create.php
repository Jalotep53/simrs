<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoJatuhNeonatus $model */

$this->title = 'Create Penilaian Risiko Jatuh Neonatus';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Risiko Jatuh Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-risiko-jatuh-neonatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
