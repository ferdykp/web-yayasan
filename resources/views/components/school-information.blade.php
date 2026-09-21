@props(['school'])
<section class="px-5 py-16 bg-cream">
    <div class="mx-auto max-w-7xl">
        <p class="text-xs font-semibold tracking-widest uppercase text-secondary">Profil & Informasi Resmi</p>
        <h2 class="mt-4 font-serif text-4xl text-primary">{{ $school->title }}</h2>
        <p class="max-w-3xl mt-5 leading-relaxed text-secondary">{{ $school->description }}</p>
        <dl class="grid gap-4 p-8 my-8 rounded-3xl bg-sage sm:grid-cols-2 lg:grid-cols-4">
            @foreach (['npsn' => 'NPSN', 'accreditation' => 'Akreditasi', 'established_year' => 'Tahun berdiri', 'principal_name' => 'Kepala sekolah', 'school_status' => 'Status sekolah', 'email' => 'Email', 'phone' => 'Telepon', 'address' => 'Alamat'] as $field => $label)
                @if (data_get($school->data, $field))
                    <div>
                        <dt class="text-xs uppercase text-secondary">{{ $label }}</dt>
                        <dd class="mt-2 font-medium">{{ data_get($school->data, $field) }}</dd>
                    </div>
                @endif
            @endforeach
        </dl>
        <div class="grid gap-8 md:grid-cols-2">
            @foreach (['vision' => 'Visi', 'mission' => 'Misi', 'principal_message' => 'Sambutan Kepala Sekolah', 'curriculum' => 'Kurikulum', 'learning_approach' => 'Pendekatan belajar', 'evaluation' => 'Evaluasi'] as $field => $label)
                @if (data_get($school->data, $field))
                    <section>
                        <h3 class="font-serif text-2xl text-primary">{{ $label }}</h3>
                        <p class="mt-4 leading-relaxed whitespace-pre-line text-secondary">
                            {{ data_get($school->data, $field) }}</p>
                    </section>
                @endif
            @endforeach
        </div>
        @foreach (['programs' => 'Program Pendidikan', 'extracurriculars' => 'Ekstrakurikuler', 'facilities' => 'Fasilitas Bersama'] as $relation => $label)
            @php($records = $school->$relation()->published()->get())@if ($records->isNotEmpty())
                <h3 class="mt-12 mb-5 font-serif text-3xl">{{ $label }}</h3>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($records as $record)
                        <a href="{{ $record->public_url }}" class="p-6 transition bg-white rounded-2xl hover:bg-sage">
                            <h4 class="font-serif text-xl text-primary">{{ $record->title }}</h4>
                            <p class="mt-3 text-sm leading-relaxed text-secondary">{{ $record->description }}</p>
                        </a>
                    @endforeach
                </div>
            @endif
        @endforeach
        <a href="/prestasi?school={{ $school->slug }}"
            class="inline-block px-6 py-3 mt-10 text-sm font-bold border rounded-full border-forest">Prestasi
            {{ $school->data['level'] }} →</a><a href="/ppdb/{{ $school->slug }}"
            class="inline-block px-6 py-3 mt-4 ml-3 text-sm font-bold text-white rounded-full bg-forest">Informasi PPDB
            →</a>
    </div>
</section>
