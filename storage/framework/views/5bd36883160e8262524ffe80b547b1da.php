<nav class="border-gray-200 bg-primary-500 border shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <h1>
            <a href="<?php echo e(route('home')); ?>"
                class="font-bold text-xl text-gray-50 focus:outline focus:outline-2 focus:rounded-sm focus:outline-white">
                <?php echo e(config('app.name')); ?>

            </a>
        </h1>
        <button data-collapse-toggle="navbar-hamburger" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-50 rounded-lg hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full" id="navbar-hamburger">
            <?php if(Route::has('login')): ?>
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-primary-500 dark:bg-gray-800 dark:border-gray-700">
                    <?php if(auth()->guard()->check()): ?>
                        <li>
                            <a href="<?php echo e(route('profile')); ?>"
                                class="font-bold text-lg text-gray-50 hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-white flex items-center">
                                <span class="mr-2">
                                    <?php echo e(auth()->user()->username); ?>

                                </span>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                    Balance: Rp <?php echo e(number_format(auth()->user()->balance)); ?>

                                </span>
                            </a>
                        </li>
                        <hr class="my-2 border-gray-200">
                        <li>
                            <a href="<?php echo e(route('bookings.index')); ?>"
                                class="font-semibold text-gray-50 hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-white">
                                Bookings
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="<?php echo e(route('logout')); ?>" class="inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit"
                                    class="font-semibold text-gray-50 hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-rose-500">
                                    Log out
                                </button>
                            </form>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(route('login')); ?>"
                                class="font-semibold text-gray-50 hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-rose-500">
                                Log in
                            </a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li>
                                <a href="<?php echo e(route('register')); ?>"
                                    class="font-semibold text-gray-50 hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-rose-500">
                                    Register
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>

        </div>
</nav>
<?php /**PATH E:\UAS PAW\sea-cinema-tix-main\resources\views/components/navbar.blade.php ENDPATH**/ ?>