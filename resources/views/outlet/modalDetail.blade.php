<!-- Modal -->
<div id="detailOutletModal"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 invisible transition-opacity duration-300">
    <div id="detailMenu" class="bg-white rounded-lg shadow-lg p-6 w-full max-w-2xl overflow-hidden">
        <div class="bg-white text-slate-700">
            <p class="text-lg font-semibold mb-4">Map</p>
            <div id="modalMap" class="w-full h-[400px] overflow-hidden rounded-lg mb-4"></div>

            <p class="text-lg font-semibold mb-4">Layanan Online</p>
            <!-- Gambar Pesan Online -->
            <div id="modalImage" class="w-full mb-4">
                <img id="outletImage" src="" alt="Gambar Pesan Online" class="w-full h-auto rounded-lg">
            </div>
        </div>

        <div class="mt-4 flex justify-end">
            <button onclick="closeDetailOutlet()"
                class="bg-red-500 text-white py-2 px-4 rounded-lg shadow hover:bg-red-600">
                Tutup
            </button>
        </div>
    </div>
</div>

<script>
    // Function to open the modal
    function openDetailOutlet(map, imageUrl) {
        const modal = document.getElementById("detailOutletModal");
        const modalMap = document.getElementById("modalMap");
        const modalImage = document.getElementById("modalImage");
        const outletImage = document.getElementById("outletImage");

        // Insert the map iframe into the modal
        modalMap.innerHTML = map;

        // Insert the image into the modal
        if (imageUrl) {
            outletImage.src = imageUrl; // Set the image URL
            modalImage.style.display = "block"; // Show the image container
        } else {
            modalImage.style.display = "none"; // Hide if no image is provided
        }

        // Show the modal
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    // Function to close the modal
    function closeDetailOutlet() {
        const modal = document.getElementById("detailOutletModal");

        // Hide the modal
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }
</script>
