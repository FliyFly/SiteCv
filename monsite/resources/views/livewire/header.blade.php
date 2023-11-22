<div x-data="{ showMenu: true }">
    <div x-show="showMenu" class="fixed z-40 flex flex-col w-3/4 pb-4 mt-5 ml-5 bg-gray-800 md:h-5/6 md:w-72 h-5/5">
        <div class="h-40 p-5 pt-5 mt-0 text-center bg-teal-400 md:pt-10 md:h-72">
            <span class="text-xl font-light text-white md:text-5xl">Oussama</span>
            <span class="text-xl font-bold text-white md:text-5xl">FLIFLI</span>
            <div class="mt-1 md:mt-2">
                <span class="text-xl font-semibold text-black">Développeur web</span>
            </div>
            <div class="mt-4 md:mt-8">
                <span class="text-base font-semibold text-black"><i class="fa-solid fa-location-dot"></i> Bordeaux, France</span>
            </div>
        </div>
        <div class="grid w-full mt-0 text-right text-white bg-gray-900 h-fit">
            <a href="#header" class="block w-full px-4 py-2 text-sm border-b border-gray-700 hover:bg-gray-700">Haut de page</a>
            <a href="#cv" class="block w-full px-4 py-2 text-sm border-b border-gray-700 hover:bg-gray-700">CV</a>
            <a href="#contact" class="block w-full px-4 py-2 text-sm border-b border-gray-700 hover:bg-gray-700">Contact</a>
        </div>
        <div class="mt-10 ml-1">
            <div class="badge-base LI-profile-badge" data-locale="fr_FR" data-size="medium" data-theme="dark" data-type="HORIZONTAL" data-vanity="oussama-flifli-b31876158" data-version="v1">
                <a class="badge-base__link LI-simple-link" href="https://fr.linkedin.com/in/oussama-flifli-b31876158?trk=profile-badge"></a>
            </div>
        </div>
        <div class="grid justify-center">
            <livewire:downloadcv />
        </div>
    </div>
    <button x-on:click="showMenu = !showMenu" class="fixed z-50 flex items-center justify-center w-12 h-12 text-white bg-teal-400 rounded-full md:hidden bottom-5 right-5">
        <i x-show="!showMenu" class="fas fa-bars"></i>
        <i x-show="showMenu" class="fas fa-times"></i>
    </button>
</div>
