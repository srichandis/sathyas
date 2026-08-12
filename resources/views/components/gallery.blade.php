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
                ['id' => 1, 'title' => 'Traditional Banana Leaf Thali', 'url' => 'https://media.istockphoto.com/id/1360655247/photo/traditional-south-indian-meal-served-in-banana-leaf.jpg?b=1&s=612x612&w=0&k=20&c=Nke5vlaBLT4sws819qU3yg7l2MD6LCwPyKUC2Msl9Lw='],
                ['id' => 2, 'title' => 'Grand Wedding Mandap Feast', 'url' => 'https://images.pexels.com/photos/15459821/pexels-photo-15459821.jpeg?auto=compress&cs=tinysrgb&w=800'],
                ['id' => 3, 'title' => 'Festive Sweets & Mysore Pak', 'url' => 'https://images.unsplash.com/photo-1605494639915-0d67ec16ae03?auto=format&fit=crop&w=800&q=80'],
                ['id' => 4, 'title' => 'Pure Ghee Preparation', 'url' => 'https://images.unsplash.com/photo-1631451095975-31295988358c?auto=format&fit=crop&w=800&q=80'],
                ['id' => 5, 'title' => 'Serving Guests with Warm Hospitality', 'url' => 'https://images.unsplash.com/photo-1588166524941-3bf61a9c41db?auto=format&fit=crop&w=800&q=80'],
                ['id' => 6, 'title' => 'Religious Function & Seemantha Feast', 'url' => 'https://images.pexels.com/photos/6359420/pexels-photo-6359420.jpeg?auto=compress&cs=tinysrgb&w=800'],
                ['id' => 7, 'title' => 'Authentic Bisibele Bath', 'url' => 'https://images.pexels.com/photos/6363501/pexels-photo-6363501.jpeg?auto=compress&cs=tinysrgb&w=800'],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
            @foreach($galleryImages as $img)
                <div class="relative h-32 sm:h-40 rounded-lg overflow-hidden border border-[#e5d8c3] group cursor-pointer shadow-xs hover:shadow-md transition" onclick="openLightbox('{{ $img['url'] }}')">
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
