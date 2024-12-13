

<!-- Modal Konfirmasi Hapus -->
<div id="hs-scale-animation-modal"
    class="hs-overlay hidden fixed top-0 left-0 z-[80] w-full h-full overflow-x-hidden overflow-y-auto bg-gray-500 bg-opacity-75 items-center justify-center"
    role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
    <div class="hs-overlay-animation-target bg-white border shadow-sm rounded-xl w-full max-w-md">
        <div class="flex justify-between items-center py-3 px-4">
            <div class="w-full flex justify-center">
                <div class="bg-gray-100 h-16 w-16 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-triangle-exclamation fa-2xl" style="color: #f53939;"></i>
                </div>
            </div>
            <button type="button"
                class="w-8 h-8 inline-flex justify-center items-center rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none"
                aria-label="Close" onclick="closeConfirmationModal()">
                <span class="sr-only">Close</span>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="p-4 text-center">
            <h3 id="hs-scale-animation-modal-label" class="font-semibold text-gray-800">
                Konfirmasi Hapus Data
            </h3>
            <p class="text-gray-800">
                Apakah Anda yakin ingin menghapus data ini?
            </p>
        </div>
        <div class="flex justify-center items-center gap-x-2 py-3 px-4">
            <button type="button"
                class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border bg-slate-400 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none"
                onclick="closeConfirmationModal()">
                Batal
            </button>
            <button id="confirmDeleteButton" type="button"
                class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none">
                Hapus
            </button>
        </div>
    </div>
</div>

<!-- Script JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const url = this.getAttribute('data-url');
                openConfirmationModal(id, url);
            });
        });

        document.getElementById('confirmDeleteButton').addEventListener('click', function () {
            document.getElementById('deleteForm').submit();
        });
    });

    function openConfirmationModal(id, url) {
        const form = document.getElementById('deleteForm');
        form.setAttribute('action', url); // Set action URL form ke URL yang sesuai

        const modal = document.getElementById("hs-scale-animation-modal");
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    }

    function closeConfirmationModal() {
        const modal = document.getElementById("hs-scale-animation-modal");
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }
</script>
