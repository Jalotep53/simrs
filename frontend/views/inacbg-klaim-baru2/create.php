<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaru2 $model */

$this->title = 'Create Inacbg Klaim Baru2';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Klaim Baru2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-klaim-baru2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
