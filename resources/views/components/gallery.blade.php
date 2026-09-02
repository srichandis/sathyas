<section class="py-16 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Motif -->
        <div class="text-center mb-10">
            <div class="flex items-center justify-center space-x-3 mb-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-[#721c1c]">Moments We Cherish</h2>
            <div class="flex items-center justify-center space-x-3 mt-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
        </div>

        <!-- Gallery Grid -->
        @php
            $galleryImages = [
                ['id' => 1, 'title' => 'Traditional Banana Leaf Thali', 'url' => asset('images/1.webp')],
                ['id' => 2, 'title' => 'Satvik Home-Cooked Meal', 'url' => asset('images/2.webp')],
                ['id' => 3, 'title' => 'Authentic South Indian Spread', 'url' => asset('images/3.jpg')],
                ['id' => 4, 'title' => 'Fresh Vegetarian Delicacies', 'url' => asset('images/4.jpg')],
                ['id' => 5, 'title' => 'Temple Prasadam Style', 'url' => asset('images/5.jpg')],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4">
            @foreach($galleryImages as $img)
                <div class="relative h-32 sm:h-44 rounded-lg overflow-hidden border border-[#e5d8c3] group cursor-pointer shadow-xs hover:shadow-md transition" onclick="openLightbox('{{ $img['url'] }}')">
                    <img src="{{ $img['url'] }}" alt="{{ $img['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <button onclick="openLightbox('{{ $galleryImages[0]['url'] }}')" class="bg-[#4a6123] hover:bg-[#384a1a] text-white px-8 py-3 rounded text-xs font-bold uppercase tracking-widest transition shadow-md border border-[#324217]">
                VIEW GALLERY
            </button>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/80 backdrop-blur-xs" onclick="closeLightbox()">
    <div class="relative max-w-4xl w-full">
        <button onclick="closeLightbox()" class="absolute -top-10 right-0 text-white hover:text-amber-300 p-2">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <img id="lightbox-img" src="" alt="Gallery Preview" class="w-full h-auto max-h-[80vh] object-contain rounded-lg border-2 border-[#d4af37]" />
    </div>
</div>

<script>
    function openLightbox(url) {
        document.getElementById('lightbox-img').src = url;
        document.getElementById('lightbox').classList.remove('hidden');
        document.getElementById('lightbox').classList.add('flex');
    }
    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
        document.getElementById('lightbox').classList.remove('flex');
    }
</script>
