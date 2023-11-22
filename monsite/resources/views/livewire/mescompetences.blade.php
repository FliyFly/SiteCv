<div id="cv" class="z-30 bg-cyan-950">
    <div class="pl-4 md:p-6 md:pt-20 md:ml-96">
        <span class="text-4xl font-light text-white">Mon CV</span>
    </div>
    <div x-data="{ shown: false }" x-intersect="shown = true" class="grid grid-cols-1 md:grid-cols-4">
        <div class="col-start-1 p-5 md:col-start-2">
            <i x-show="shown" x-transition class="mb-5 fa-regular fa-message fa-beat-fade fa-5x" style="color: #2dd4bf; animation-iteration-count: 1;"></i>
            <p class="mb-5 text-2xl text-white">A propos de moi</p>
            <p class="mb-5 text-white">25 ans, permis B, vivant à Bordeaux.</p>
            <p class="text-sm font-light leading-6 text-white">En tant que diplômé de l'Epitech Bordeaux avec un Master en "Architecte Logiciels et Développeur d’Applications" (titre de niveau 7), ma spécialisation porte sur le développement web. Je suis actuellement à la recherche d'opportunités professionnelles pour mettre en application mes compétences et contribuer de manière significative à des projets passionnants dans ces domaines. N'hésitez pas à me contacter.</p>
        </div>
        <div x-data="{
            htmlcss: 0,
            javascriptJquery: 0,
            php: 0,
            laravelSymfony: 0,
            alpineTailwind: 0,
        }" x-init="() => {
            setInterval(() => {
              if (htmlcss < 90) {
                htmlcss += 1;
              }

              if (javascriptJquery < 90) {
                javascriptJquery += 1;
              }

              if (php < 80) {
                php += 1;
              }

              if (laravelSymfony < 40) {
                laravelSymfony += 1;
              }

              if (alpineTailwind < 50) {
                alpineTailwind += 1;
              }

            }, 20);
          }"
          class="p-5 md:col-start-3">
            <i x-show="shown" x-transition  class="mb-5 fa-solid fa-code fa-beat-fade fa-5x" style="color: #2dd4bf; animation-iteration-count: 1;"></i>
            <p class="mb-5 text-2xl text-white">Mes compétences</p>
            <div class="h-1 bg-gray-300">
                <div
                  x-bind:style="'width: ' + htmlcss + '%'"
                  class="h-1 transition-all duration-200 ease-linear bg-teal-400"
                ></div>
            </div>
            <p class="mb-5 text-sm font-light leading-6 text-white">HTML / CSS</p>
            <div class="h-1 bg-gray-300">
                <div
                  x-bind:style="'width: ' + javascriptJquery + '%'"
                  class="h-1 transition-all duration-200 ease-linear bg-teal-400"
                ></div>
            </div>
            <p class="mb-5 text-sm font-light leading-6 text-white">Javascript / Jquery</p>
            <div class="h-1 bg-gray-300">
                <div
                  x-bind:style="'width: ' + php + '%'"
                  class="h-1 transition-all duration-200 ease-linear bg-teal-400"
                ></div>
            </div>
            <p class="mb-5 text-sm font-light leading-6 text-white">PHP</p>
            <div class="h-1 bg-gray-300">
                <div
                  x-bind:style="'width: ' + laravelSymfony + '%'"
                  class="h-1 transition-all duration-200 ease-linear bg-teal-400"
                ></div>
            </div>
            <p class="mb-5 text-sm font-light leading-6 text-white">Laravel / Symfony</p>
            <div class="h-1 bg-gray-300">
                <div
                  x-bind:style="'width: ' + alpineTailwind + '%'"
                  class="h-1 transition-all duration-200 ease-linear bg-teal-400"
                ></div>
            </div>
            <p class="mb-5 text-sm font-light leading-6 text-white">AlpineJs / Tailwind CSS</p>
        </div>
        <div class="p-5 md:col-start-4" x-data="{ tools: [
          { image: '/images/git.png', text: 'Git' },
          { image: '/images/linux.png', text: 'Linux' },
          { image: '/images/Visual.png', text: 'Visual studio code' }
      ] }">
          <i x-show="shown" x-transition  class="mb-5 fa-solid fa-screwdriver-wrench fa-beat-fade fa-5x" style="color: #2dd4bf; animation-iteration-count: 1;"></i>
          <p class="mb-5 text-2xl text-white">Mes outils techniques</p>
          <ul class="grid grid-cols-3 gap-1">
            <li class="flex flex-col items-center p-4 rounded-md shadow-md">
                <img :src="tools[0].image" alt="Tool Image" class="w-full h-auto mb-4">
                <div class="text-center text-white" x-text="tools[0].text"></div>
            </li>
            <li class="flex flex-col items-center p-4 rounded-md shadow-md">
                <img :src="tools[1].image" alt="Tool Image" class="w-full h-auto mb-4">
                <div class="text-center text-white" x-text="tools[1].text"></div>
            </li>
            <li class="flex flex-col items-center p-4 rounded-md shadow-md">
                <img :src="tools[2].image" alt="Tool Image" class="w-full h-auto mb-4">
                <div class="text-center text-white" x-text="tools[2].text"></div>
            </li>
        </ul>
      </div>
    </div>
</div>
