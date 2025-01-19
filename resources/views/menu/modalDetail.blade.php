 <!-- Modal -->
 <div id="detailMenuModal"
 class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 invisible transition-opacity duration-300">
 <div id="detailMenu" class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full">
     <h2 id="modalTitle" class="text-2xl font-bold mb-4">Detail Menu</h2>
     <p id="modalDescription" class="text-gray-700 mb-6"></p>
     <button onclick="closeDetailMenu()"
         class="bg-red-500 text-white py-2 px-4 rounded-lg shadow hover:bg-red-600">
         Tutup
     </button>
 </div>
</div>


<script>
 // Open modal function
 function openDetailMenu(title, description) {
     const modal = document.getElementById("detailMenuModal");
     const modalTitle = document.getElementById("modalTitle");
     const modalDescription = document.getElementById("modalDescription");

     modalTitle.textContent = title;
     modalDescription.textContent = description;

     modal.classList.remove("opacity-0", "invisible");
     modal.classList.add("opacity-100", "visible");
 }

 // Close modal function
 function closeDetailMenu() {
     const modal = document.getElementById("detailMenuModal");
     modal.classList.add("opacity-0", "invisible");
     modal.classList.remove("opacity-100", "visible");
 }

</script>
