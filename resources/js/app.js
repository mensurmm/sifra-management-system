import './bootstrap';
import './bootstrap';
import 'chart.js/auto';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.data('themeHandler', () => ({
    init() {
        this.$watch('darkMode', val => localStorage.setItem('dark_mode', val))
    }
}));

Alpine.start();
