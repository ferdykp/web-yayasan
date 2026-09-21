@php
    $foundationName = $foundation?->title ?: 'Yayasan Pendidikan Harapan Mulia';
    $shortName = data_get($foundation?->data, 'short_name', 'Harapan Mulia');
    $address = data_get($foundation?->data, 'address', 'Jl. Pendidikan No. 1, Cilandak, Jakarta Selatan');
    $phone = data_get($foundation?->data, 'phone', '+62 21 1234 5678');
    $whatsapp = data_get($foundation?->data, 'whatsapp');
    $email = data_get($foundation?->data, 'email', 'info@yayasanharapanmulia.sch.id');
    $socials = data_get($foundation?->data, 'social_media', []);
@endphp

<footer class="border-t pt-16 pb-12 bg-forest-night border-white/10" data-purpose="site-footer">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-white/10">
            <div class="lg:col-span-4">
                <a href="/" class="flex items-center gap-3.5 mb-4 group" aria-label="{{ $shortName }} Home">
                    <div class="w-9 h-9 rounded-full bg-forest-deep text-lime flex items-center justify-center border border-white/10 transition-transform duration-300 group-hover:scale-105">
                        <svg class="w-5 h-5 stroke-current fill-none stroke-[2.2]" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 0 1 10 10c0 5.523-4.477 10-10 10a10 10 0 0 1-7.071-2.929"></path>
                            <path d="M12 6a6 6 0 0 1 6 6"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-lime/80 block uppercase tracking-wider">Yayasan Pendidikan</span>
                        <span class="text-base font-bold text-white leading-none">{{ $shortName }}</span>
                    </div>
                </a>

                <p class="text-xs sm:text-sm text-neutral-300 leading-relaxed max-w-sm mb-6">
                    {{ $foundation?->description ?: 'Bersama Mendidik, Bersama Membangun Masa Depan generasi bangsa dengan integritas dan kecerdasan seimbang.' }}
                </p>

                @if (is_array($socials) && count($socials))
                    <div class="flex items-center gap-3 text-neutral-300">
                        @foreach ($socials as $label => $url)
                            <a aria-label="{{ ucfirst($label) }}"
                                class="w-8 h-8 rounded-full bg-white/10 border border-white/15 flex items-center justify-center hover:bg-lime hover:text-forest-dark transition-colors"
                                href="{{ $url }}" target="_blank" rel="noopener noreferrer">
                                <span class="text-[10px] font-bold uppercase">{{ mb_substr($label, 0, 2) }}</span>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="lg:col-span-2">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Tautan Cepat</h4>
                <ul class="space-y-2.5 text-xs text-neutral-300 font-medium">
                    <li><a class="hover:text-lime transition-colors" href="/">Beranda</a></li>
                    <li><a class="hover:text-lime transition-colors" href="/tentang">Tentang Kami</a></li>
                    <li><a class="hover:text-lime transition-colors" href="/sekolah">Sekolah</a></li>
                    <li><a class="hover:text-lime transition-colors" href="/berita">Berita</a></li>
                    <li><a class="hover:text-lime transition-colors" href="/kontak">Kontak</a></li>
                </ul>
            </div>

            <div class="lg:col-span-2">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Unit Pendidikan</h4>
                <ul class="space-y-2.5 text-xs text-neutral-300 font-medium">
                    @foreach ($schools as $unit)
                        <li><a class="hover:text-lime transition-colors" href="{{ $unit->public_url }}">{{ $unit->title }}</a></li>
                    @endforeach
                    <li><a class="hover:text-lime transition-colors" href="/ppdb">Informasi PPDB 2026/2027</a></li>
                </ul>
            </div>

            <div class="lg:col-span-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Hubungi Kami</h4>
                <ul class="space-y-3 text-xs text-neutral-300">
                    <li class="flex items-start gap-2.5">
                        <svg class="w-4 h-4 text-lime flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>{{ $address }}</span>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-lime flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <a class="hover:text-lime transition-colors" href="tel:{{ preg_replace('/[^0-9+]/', '', $phone) }}">{{ $phone }}</a>
                        @if ($whatsapp)
                            <span class="text-neutral-500">/</span>
                            <a class="hover:text-lime transition-colors" href="https://wa.me/{{ preg_replace('/\D/', '', $whatsapp) }}" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                        @endif
                    </li>
                    <li class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-lime flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <a class="hover:text-lime transition-colors" href="mailto:{{ $email }}">{{ $email }}</a>
                    </li>
                    <li class="flex items-center gap-2.5 text-neutral-400">
                        <svg class="w-4 h-4 text-lime flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>Senin - Jumat: 07.30 - 16.00 WIB</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-neutral-400 gap-4">
            <p>© {{ date('Y') }} {{ $foundationName }}. Hak Cipta Dilindungi.</p>
            <div class="flex items-center gap-6">
                <a class="hover:text-lime transition-colors" href="#">Kebijakan Privasi</a>
                <a class="hover:text-lime transition-colors" href="#">Syarat &amp; Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
