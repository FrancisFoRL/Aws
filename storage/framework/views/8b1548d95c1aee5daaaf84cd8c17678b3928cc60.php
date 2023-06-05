
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-section','data' => ['submit' => 'updateProfileInformation']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => 'updateProfileInformation']); ?>
                         <?php $__env->slot('form', null, []); ?> 
                            <div x-data="{ photoName: null, photoPreview: '<?php echo e(Auth()->user()->profile_photo_url); ?>' }"
                                class="col-span-6 sm:col-span-4">
                                <div class="position-absolute bottom-0 start-50 translate-middle-x" style="top:155px">
                                    <div class="img-overlay d-flex align-items-center justify-content-center">
                                        <input type="file" class="visually-hidden" wire:model="photo" x-ref="photo"
                                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                                " />
                                        <button type="button" class="btn px-4 py-2 fw-bold" id="cambiar-img"
                                            x-on:click.prevent="$refs.photo.click()">Cambiar imagen</button>
                                    </div>
                                    <div class="img-container mt-4">

                                        <div class="mt-2" x-show="!photoPreview">
                                            <img src="<?php echo e(Auth::user()->profile_photo_url); ?>"
                                                alt="<?php echo e(Auth::user()->name); ?>" class="rounded-circle" width="100"
                                                height="100">
                                        </div>

                                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                                            <div class="rounded-circle "
                                                :style="'background-image: url(\'' + photoPreview + '\'); width: 250px; height: 250px;'"
                                                id="img-perfil"></div>
                                        </div>


                                        <h2 class="text-center mt-4 fw-bold"><?php echo e(Auth()->user()->name); ?></h2>

                                        <?php if(Auth::user()->profile_photo_path): ?>
                                        <button type="button" class="btn btn-secondary mt-2"
                                            wire:click="deleteProfilePhoto">
                                            <?php echo e(__('Remove Photo')); ?>

                                        </button>
                                        <?php endif; ?>
                                    </div>



                                </div>
                            </div>
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('actions', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['wire:loading.attr' => 'disabled','wire:target' => 'photo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:loading.attr' => 'disabled','wire:target' => 'photo']); ?>
                                <?php echo e(__('Save')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                
<style>
    #fondo-image {
        height: 350px;
        background-color: #d1d1d1;
    }

    #img-perfil {
        border: 3px solid #6D9886;
    }

    #cambiar-img {
        background-color: #6D9886;
    }

    #cambiar-img:hover {
        background-color: transparent;
        border-color: #6D9886;
        box-shadow: 2px 2px 0 #6D9886;
    }
</style>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/user/perfil.blade.php ENDPATH**/ ?>