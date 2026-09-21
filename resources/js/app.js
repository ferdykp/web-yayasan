import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
Alpine.plugin(focus);
Alpine.data('portal', () => ({ lightbox: null }));
window.Alpine = Alpine;
Alpine.start();
document.addEventListener('click', (event) => {
 const link = event.target.closest('a');
 if (!link || !window.gtag) return;
 const href = link.getAttribute('href') || '';
 const eventName = href.includes('wa.me') ? 'click_whatsapp' : href.includes('/ppdb') ? 'click_ppdb' : href.includes('/sekolah/') ? 'select_school' : href.startsWith('tel:') ? 'click_phone' : href.includes('maps.google') ? 'click_maps' : null;
 if (eventName) window.gtag('event', eventName, { link_url: href });
});
