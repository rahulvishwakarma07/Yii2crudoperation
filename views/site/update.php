<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $model */

$this->title = 'Update Product: ' . $model->title;
?>
<div class="product-update">
    <div class="container">
        <div class="row d-flex align-items-stretch">
            <!-- Form Section -->
            <div class="col-md-6">
                <div class="product-form mt-3 rounded p-4" style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <h3 class="bg-primary p-3 rounded mb-3 text-white fw-bold"><?= Html::encode($this->title) ?></h3>
                    
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'category')->textInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Cancel', ['index'], ['class' => 'ms-3 btn btn-dark']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center mt-3">
                <div class="text-center w-100" style="height: 100%; padding: 0;">
                    <?= Html::img(Url::to('@web/images/Custom.jpg'), ['alt' => 'Product Image', 'class' => 'img-fluid rounded', 'style' => 'width: 100%; height: 100%; object-fit: cover;']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
