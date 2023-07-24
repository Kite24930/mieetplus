<x-recruit.template title="Mieet Plus 就活部">
    <div class="w-full flex justify-center">
        <div class="container max-w-screen-sm flex justify-center">
            <div id="stories" class="swiper mySwiper container">
                <div class="swiper-wrapper">
                    @for($i = 1; $i < 13; $i++)
                        <div class="swiper-slide flex-col">
                            <img src="https://via.placeholder.com/72x72" alt="test" class="rounded-3xl">
                            <div class="company-name">[{{ $i }}]テスト工業株式会社</div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/recruit/recruit.js'])
</x-recruit.template>
