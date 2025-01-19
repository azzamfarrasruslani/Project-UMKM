<!-- Modal -->
<div id="detailPromoModal" onclick="closeModalOnOutsideClick(event)"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 invisible transition-opacity duration-300 z-50">
    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-lg overflow-hidden" onclick="event.stopPropagation()">
        <!-- Header -->
        <div class="flex items-center border-b pb-3 mb-4">

            <button onclick="closeDetailPromo()" class="text-black text-2xl font-bold"><i
                    class="fa-solid fa-arrow-left mr-2"></i></button>
            <h2 class="text-xl mt-2 font-semibold  text-black">Detail Promo</h2>
        </div>

        <!-- Content -->
        <div id="modalContent" class="overflow-y-auto max-h-85">
            <img id="modalImage" src="" alt="Promo Image" class="w-full h-auto mb-4 rounded-lg object-contain">

                <h2 id="modalTitle" class="text-xl font-semibold text-slate-700">Title</h2>
                <p id="modalDate" class="text-sm text-slate-500 mb-4">Date</p>
                <div id="modalDescription" class="text-slate-600 mb-4">Description</div>
                <p>Syarat & Ketentuan</p>
                <p id="modalTerms" class="text-sm text-slate-500">Terms & Conditions</p>

        </div>


    </div>
</div>

<script>
    // Function to open the modal
    function openDetailPromo(title, description, terms, startDate, endDate, imageUrl) {
        const modal = document.getElementById("detailPromoModal");
        const modalTitle = document.getElementById("modalTitle");
        const modalDescription = document.getElementById("modalDescription");
        const modalTerms = document.getElementById("modalTerms");
        const modalDate = document.getElementById("modalDate");
        const modalImage = document.getElementById("modalImage");

        // Set modal content
        modalTitle.textContent = title;
        modalDescription.textContent = description;
        modalTerms.textContent = terms;
        modalDate.textContent = `${startDate} - ${endDate}`;
        modalImage.src = imageUrl;

        // Show the modal
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    // Function to close the modal
    function closeDetailPromo() {
        const modal = document.getElementById("detailPromoModal");

        // Hide the modal
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    // Function to close modal when clicking outside of the content
    function closeModalOnOutsideClick(event) {
        const modal = document.getElementById("detailPromoModal");

        // Check if the clicked area is outside the modal content
        if (event.target === modal) {
            closeDetailPromo();
        }
    }
</script>
