<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaruInternal $model */

$this->title = 'Create Inacbg Klaim Baru Internal';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Klaim Baru Internals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-klaim-baru-internal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
