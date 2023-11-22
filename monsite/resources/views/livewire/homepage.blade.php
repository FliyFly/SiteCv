<div id="header"
    x-data="{
        backgroundImage: '/images/fondp.jpg',
        zoomed: false,
        zoomedOnce: false,
        bonjour: {
            last_name: 'FLIFLI',
            first_name: 'Oussama',
            location: 'Bordeaux',
            available: true,
            properties: 'PHP/Laravel, Livewire AlpineJs/Tailwind css',
        },
        typedText: '',
    }"
    x-init="() => {
        setTimeout(() => {
            zoomed = true;
            zoomedOnce = true;
        }, 1000);

        const fullText = 'Last Name: Oussama\nFirst Name: FLIFLI\nLocation: Bordeaux\nAvailable: true\nProperties: PHP/Laravel, Livewire AlpineJs/Tailwind css';
        let currentIndex = 0;

        const textInterval = setInterval(() => {
            if (currentIndex < fullText.length) {
                typedText = fullText.slice(0, currentIndex + 1);
                currentIndex++;
            } else {
                clearInterval(textInterval);
            }
        }, 50);
    }"
    class="relative z-20 overflow-auto transition-all duration-1000 bg-center"
    :class="{ 'bg-cover': zoomed, 'transform scale-101': zoomedOnce }"
    :style="`background-image: url(${backgroundImage}); height: 100vh;`"
    >
    <div class="inset-0 grid justify-center mt-4 md:mt-36 md:mr-52">
        <span class="text-xl text-white md:text-5xl">FLIFLI Oussama</span>
    </div>
    <div class="absolute inset-0 grid items-center content-center justify-center">
        <div class="p-4 text-xs text-white bg-white bg-opacity-20 md:text-lg">
            <pre x-text="typedText"></pre>
        </div>
    </div>
</div>
