<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaru $model */

$this->title = 'Create Inacbg Klaim Baru';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Klaim Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-klaim-baru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
