<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Returbeli $model */

$this->title = 'Create Returbeli';
$this->params['breadcrumbs'][] = ['label' => 'Returbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="returbeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
