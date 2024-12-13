<?php if (session()->has('success')): ?>
    <div id="success-alert"
        class="w-full mb-2 max-w-full bg-teal-50 border-t-2 border-teal-500 rounded-lg py-4 px-2 dark:bg-teal-800/30"
        role="alert" tabindex="-1" aria-labelledby="hs-bordered-success-style-label">
        <div class="flex">
            <div class="shrink-0">
                <span
                    class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                        </path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                </span>
            </div>
            <div class="ms-3">
                <h3 id="hs-bordered-success-style-label" class="text-gray-800 font-semibold dark:text-white text-lg">
                    Successfully.
                </h3>
                <p class="text-sm text-gray-700 dark:text-neutral-400">
                    <?= session()->get('success'); ?>
                </p>
            </div>
        </div>
    </div>

<?php elseif (session()->has('error')): ?>
    <div id="error-alert" class="w-full mb-2 max-w-full bg-red-50 border-s-4 border-red-500 p-4 dark:bg-red-800/30" role="alert"
        tabindex="-1" aria-labelledby="hs-bordered-red-style-label">
        <div class="flex">
            <div class="shrink-0">
                <span
                    class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </span>
            </div>
            <div class="ms-3">
                <h3 id="hs-bordered-red-style-label" class="text-gray-800 font-semibold dark:text-white">
                    Error!
                </h3>
                <p class="text-sm text-gray-700 dark:text-neutral-400">
                    <?= session()->get('error'); ?>
                </p>
            </div>
        </div>
    </div>

<?php elseif (session()->has('warning')): ?>
    <div id="warning-alert"
        class="w-full mb-2 max-w-full bg-yellow-50 border border-yellow-200 text-sm text-yellow-800 rounded-lg p-4 dark:bg-yellow-800/10 dark:border-yellow-900 dark:text-yellow-500"
        role="alert" tabindex="-1" aria-labelledby="hs-with-description-label">
        <div class="flex">
            <div class="shrink-0">
                <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                    <path d="M12 9v4"></path>
                    <path d="M12 17h.01"></path>
                </svg>
            </div>
            <div class="ms-4">
                <h3 id="hs-with-description-label" class="text-sm font-semibold">
                    Warning
                </h3>
                <div class="mt-1 text-sm text-yellow-700">
                    <p class="text-sm text-gray-700 dark:text-neutral-400">
                        <?= session()->get('warning'); ?>
                    </p>
                    Kami tidak dapat menyimpan kemajuan saat ini.
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<script>
    // Menghilangkan alert setelah 1.5 detik
    setTimeout(function () {
        var successAlert = document.getElementById('success-alert');
        if (successAlert) {
            successAlert.style.display = 'none';
        }

        var errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            errorAlert.style.display = 'none';
        }

        var warningAlert = document.getElementById('warning-alert');
        if (warningAlert) {
            warningAlert.style.display = 'none';
        }
    }, 1500);
</script>
