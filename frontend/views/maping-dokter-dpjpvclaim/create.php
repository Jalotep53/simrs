<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingDokterDpjpvclaim $model */

$this->title = 'Create Maping Dokter Dpjpvclaim';
$this->params['breadcrumbs'][] = ['label' => 'Maping Dokter Dpjpvclaims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-dokter-dpjpvclaim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
