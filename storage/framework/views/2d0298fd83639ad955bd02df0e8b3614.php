<?php $__env->startSection('content'); ?>
    
    <section id="user-profile" class="p-6 max-w-screen-lg mx-auto">
        <div
            class="flex flex-col md:flex-row items-center justify-center bg-white border border-gray-200 rounded-lg shadow-lg w-full p-5 mb-3 max-w-screen-lg mx-auto dark:border-gray-700 dark:bg-gray-800 relative">
            <div class="flex flex-col flex-grow">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center md:text-left">
                        User Profile
                    </h2>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h3 class="py-2 text-base font-bold text-gray-900 dark:text-white">
                            Name
                        </h3>
                        <p class="text-medium text-gray-700 dark:text-gray-300">
                            <?php echo e($user->name); ?>

                        </p>
                    </div>
                    <div>
                        <h3 class="py-2 text-base font-bold text-gray-900 dark:text-white">
                            Username
                        </h3>
                        <p class="text-medium text-gray-700 dark:text-gray-300">
                            &commat;<?php echo e($user->username); ?>

                        </p>
                    </div>
                    <div>
                        <h3 class="py-2 text-base font-bold text-gray-900 dark:text-white">
                            Age
                        </h3>
                        <p class="text-medium text-gray-700 dark:text-gray-300">
                            <?php echo e($user->age); ?>

                        </p>
                    </div>
                    <div>
                        <h3 class="py-2 text-base font-bold text-gray-900 dark:text-white">
                            Balance
                        </h3>
                        <p class="text-medium text-gray-700 dark:text-gray-300">
                            <span
                                class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                Rp <?php echo e(number_format($user->balance)); ?>

                            </span>
                        </p>
                    </div>
                </div>
                <div class="flex justify-center mt-8 md:justify-end">
                    <a href="<?php echo e(route('users.edit')); ?>">
                        <button
                            class="px-4 py-2 text-sm font-medium text-white bg-primary-500 hover:bg-primary-600 rounded-lg focus:outline-none">
                            Edit Profile
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section id="top-up-balance" class="p-6 max-w-screen-lg mx-auto">
        <div
            class="flex flex-col md:flex-row items-center justify-center bg-white border border-gray-200 rounded-lg shadow-lg w-full p-5 mb-3 max-w-screen-lg mx-auto dark:border-gray-700 dark:bg-gray-800 relative">
            <div class="flex flex-col flex-grow">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center md:text-left">
                        Top Up Balance
                    </h2>
                </div>
                <form action="<?php echo e(route('users.update', $user)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="md:col-span-2 flex items-center">
                            <span class="mr-2 text-base font-medium text-gray-900 dark:text-white">
                                Rp
                            </span>
                            <input type="number" name="amount" id="amount"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                            <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.error-message','data' => ['message' => $message]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($message)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="flex justify-center mt-8 md:justify-end">
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-primary-500 hover:bg-primary-600 rounded-lg focus:outline-none">
                            Top Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\UAS PAW\sea-cinema-tix-main\resources\views/users/profile.blade.php ENDPATH**/ ?>