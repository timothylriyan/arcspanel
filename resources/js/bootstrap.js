import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// ===== TAMBAHKAN KODE INI =====
// Impor jQuery dan jadikan global agar bisa diakses oleh plugin lain
import $ from 'jquery';
window.$ = window.jQuery = $;
// ===============================
