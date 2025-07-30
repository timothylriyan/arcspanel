// 1. Impor bootstrap.js (yang sudah menyediakan jQuery global)
import './bootstrap';

// 2. Impor library lain yang butuh jQuery
import 'select2';
import 'bootstrap'; // Komponen JS Bootstrap

// 3. Impor library lain yang TIDAK butuh jQuery
import Alpine from 'alpinejs';
import Swiper from 'swiper/bundle';
import Sortable from 'sortablejs';


// --- INISIALISASI ---

// Inisialisasi AlpineJS
window.Alpine = Alpine;
Alpine.start();

// Jalankan semua kode yang berinteraksi dengan HTML setelah halaman siap
document.addEventListener('DOMContentLoaded', function() {

    
    // --- Logika untuk Select2 Icon Picker ---
    function formatIcon(state) {
        if (!state.id || state.element.value.toLowerCase().includes('pilih')) {
            return state.text;
        }
        return $('<span><i class="' + state.element.value + ' me-2"></i> ' + state.text + '</span>');
    }

    if ($('#icon').length) {
        $('#icon').select2({
            theme: "bootstrap-5",
            templateResult: formatIcon,
            templateSelection: formatIcon,
            escapeMarkup: function(m) { return m; }
        });
    }

    // --- Logika untuk Sortable Table ---
    const sortableTable = document.getElementById('sortable-table');
    if (sortableTable) {
        const tableBody = sortableTable.querySelector('tbody');
        const reorderUrl = sortableTable.dataset.reorderUrl;

        new Sortable(tableBody, {
            animation: 150,
            handle: '.fa-grip-vertical',
            onEnd: function (evt) {
                const rows = evt.to.children;
                let ids = Array.from(rows).map(row => row.getAttribute('data-id'));
                
                axios.post(reorderUrl, { ids: ids })
                .then(response => {
                    console.log('Order saved successfully!');
                })
                .catch(error => {
                    console.error('Failed to save order:', error);
                    alert('Failed to save order. Please check the console for details.');
                });
            }
        });
    }

    // --- Logika untuk Swiper Slider (Layanan) ---
    if (document.querySelector('.services-slider')) {
        new Swiper('.services-slider', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
            breakpoints: {
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 }
            }
        });
    }

});