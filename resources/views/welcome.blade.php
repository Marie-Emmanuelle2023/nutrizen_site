@extends('layouts.app')

@section('content')
    <div class="bg-white">
        {{-- Hero --}}
        <div class="max-w-5xl mx-auto py-16 text-center">
            <h1 class="font-bold text-4xl mb-4">Manger Bien. Vivre mieux</h1>
            <h2 class="font-bold text-4xl mb-8">Décrouvrez l’accompagnement NutriZen</h2>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-900 transition" data-carousel-item>
                        <img src="/img/portrait-de-jeune-femme-nutritionniste-souriante-dans-la-salle-de-consultation-bureau-de-nutritionniste-avec-jus-de-fruits-sains-et-ruban-a-mesurer-dietetiste-travaillant-sur-un-plan-de-regime.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-900 transition" data-carousel-item>
                        <img src="/img/carousel-femmes.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-900 transition" data-carousel-item>
                        <img src="/img/coachin-repas.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

        {{-- Présentation NutriZen --}}
        <section class="max-w-5xl mx-auto py-12 px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold mb-2">Bienvenue chez NutriZen</h2>
                <p class="text-lg md:text-xl text-gray-700">Chez NutriZen, nous croyons que le bien-être commence dans
                    l’assiette… et dans le cœur. Notre mission ? Vous accompagner avec bienveillance vers une alimentation
                    équilibrée, adaptée à votre rythme de vie, et qui respecte votre corps.</p>
            </div>
            <div class="text-center mb-8">
                <span class="block text-xl md:text-2xl font-semibold italic text-[#49C840]">"Mieux manger, mieux vivre, tout
                    simplement."</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                    <img src="/img/valeurs.jpg" alt="Valeurs NutriZen" class="w-24 h-24 object-cover rounded-full mb-4" />
                    <h3 class="text-2xl font-bold mb-2">Nos valeurs</h3>
                    <ul class="text-left space-y-2">
                        <li><span class="font-semibold">Écoute</span> : Parce que chaque personne est unique, nous prenons
                            le temps de comprendre vos besoins et vos envies.</li>
                        <li><span class="font-semibold">Bienveillance</span> : Pas de jugement, seulement des conseils
                            adaptés et des encouragements.</li>
                        <li><span class="font-semibold">Simplicité</span> : Des solutions réalistes, faciles à mettre en
                            place au quotidien.</li>
                        <li><span class="font-semibold">Expertise</span> : Des accompagnements fondés sur des bases
                            scientifiques solides et une expérience confirmée.</li>
                    </ul>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                    <img src="/img/approche.jpg" alt="Approche NutriZen" class="w-24 h-24 object-cover rounded-full mb-4" />
                    <h3 class="text-2xl font-bold mb-2">Notre approche</h3>
                    <p class="mb-2">Chez NutriZen, nous ne parlons pas de régime, mais d’équilibre.<br>Nous vous proposons
                        un accompagnement sur-mesure, pour réapprendre à écouter vos sensations, à choisir des aliments qui
                        vous font du bien et à renouer avec le plaisir de manger.</p>
                </div>
            </div>

            {{-- Coaching Nutritionnel --}}
            <div class="w-full bg-white py-4 flex flex-col md:flex-row items-center justify-center gap-4">
                <div class="w-full md:w-1/2 flex flex-col items-start px-8">
                    <h3 class="text-[#49C840] font-bold text-3xl mb-2">Coaching Nutritionnel</h3>
                    <p class="font-semibold text-xl mb-4">Des séances personnalisées pour retrouver l’équilibre et le
                        plaisir de manger.</p>
                    <p class="text-gray-700 text-base">Un accompagnement individuel pour vous aider à atteindre vos
                        objectifs : équilibre alimentaire, gestion du poids, amélioration du bien-être général.</p>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                    <img src="/img/coaching-nutritionnel.jpg" alt="Coaching Nutritionnel"
                        class="w-[320px] h-[266px] object-cover rounded-2xl" />
                </div>
            </div>

            {{-- Suivi individualisé --}}
            <div class="w-full bg-white py-12 flex flex-col md:flex-row items-center justify-center gap-8">
                <div class="w-full md:w-1/2 flex justify-center">
                    <img src="/img/suivi-individuel.jpg" alt="Suivi Individuel"
                        class="w-[320px] h-[266px] object-cover rounded-2xl" />
                </div>
                <div class="w-full md:w-1/2 flex flex-col items-start px-8">
                    <h3 class="text-[#49C840] font-bold text-3xl mb-2">Suivi individualisé</h3>
                    <p class="font-semibold text-xl mb-4">Chaque parcours est unique: nous adaptons nos conseils à vos
                        besoins et envies.</p>
                    <p class="text-gray-700 text-base">Des points réguliers pour ajuster votre programme, répondre à vos
                        questions et garder la motivation.</p>
                </div>
            </div>

            {{-- Ateliers Collectifs --}}
            <div class="w-full bg-white py-4 flex flex-col md:flex-row items-center justify-center gap-4">
                <div class="w-full md:w-1/2 flex flex-col items-start px-8">
                    <h3 class="text-[#49C840] font-bold text-3xl mb-2">Ateliers collectifs</h3>
                    Des moments d’échange pour découvrir des astuces pratiques et des
                        idées de recettes simples.
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                    <img src="/img/atelier.jpg" alt="Ateliers Collectifs"
                        class="w-[320px] h-[266px] object-cover rounded-2xl" />
                </div>
            </div>


        </section>




        {{-- FAQ --}}
        <div class="w-full py-12 flex flex-col items-center">
            <h2 class="text-3xl font-bold text-black mb-8">Vous vous posez des questions?</h2>
            <div id="accordion-open" data-accordion="collapse" class="w-full max-w-4xl">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium  border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 gap-3 bg-[#49C840] text-white"
                        style="background-color: #49C840" data-accordion-target="#accordion-open-body-1"
                        aria-expanded="true" aria-controls="accordion-open-body-1">
                        <span class="flex items-center">Le coaching nutritionnel c’est pour qui?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 bg-white text-gray-700">
                        <p>Le coaching nutritionnel s’adresse à toute personne souhaitant améliorer son alimentation,
                            retrouver l’équilibre ou atteindre des objectifs de santé personnalisés.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 gap-3 bg-[#49C840] text-white"
                        style="background-color: #49C840" data-accordion-target="#accordion-open-body-2"
                        aria-expanded="false" aria-controls="accordion-open-body-2">
                        <span class="flex items-center">Pourquoi choisir un suivi personnalisé?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 bg-white text-gray-700">
                        <p>Un suivi personnalisé permet d’adapter les conseils à vos besoins, votre rythme de vie et vos
                            objectifs, pour des résultats durables et adaptés à chacun.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium border border-gray-200 focus:ring-4 focus:ring-gray-200 gap-3 bg-[#49C840] text-white"
                        style="background-color: #49C840" data-accordion-target="#accordion-open-body-3"
                        aria-expanded="false" aria-controls="accordion-open-body-3">
                        <span class="flex items-center">Peut-on voir des exemples de suivis ou résultats?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 border border-b-0 border-gray-200 bg-white text-gray-700">
                        <p>Oui, nous pouvons partager des exemples de parcours et de résultats (anonymisés) pour vous
                            inspirer et vous rassurer sur l’efficacité de notre accompagnement.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-4">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium border border-gray-200 focus:ring-4 focus:ring-gray-200 gap-3 bg-[#49C840] text-white"
                        style="background-color: #49C840" data-accordion-target="#accordion-open-body-4"
                        aria-expanded="false" aria-controls="accordion-open-body-4">
                        <span class="flex items-center">Pourquoi choisir Nutrizen?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
                    <div class="p-5 border border-b-0 border-gray-200 bg-white text-gray-700">
                        <p>Nutrizen, c’est une équipe à l’écoute, des conseils bienveillants et une approche simple pour
                            vous aider à atteindre vos objectifs de bien-être.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Témoignages --}}
        <div class="w-full bg-[#D9D9D9] py-16">
            <h2 class="text-3xl font-bold text-center mb-8">Témoignages</h2>
            <div class="flex flex-col md:flex-row justify-center gap-8">
                <div class="bg-white rounded-lg p-6 w-[300px] shadow">
                    <div class="font-bold text-xl mb-2">Kourouma</div>
                    <div class="text-center text-lg mb-2">“Je suis reparti satisfait, je recommande”</div>
                </div>
                <div class="bg-white rounded-lg p-6 w-[300px] shadow">
                    <div class="font-bold text-xl mb-2">Nadia</div>
                    <div class="text-center text-lg mb-2">“Je me sens mieux dans ma peau grâce à ce programme”</div>
                </div>
                <div class="bg-white rounded-lg p-6 w-[300px] shadow">
                    <div class="font-bold text-xl mb-2">Junior</div>
                    <div class="text-center text-lg mb-2">“Si je devais recommencer je choisirais NutriZen”</div>
                </div>
            </div>
        </div>

        {{-- Call to Action --}}
        <div class="w-full bg-white py-16 flex flex-col items-center">
            <h2 class="text-3xl font-bold mb-4" style="color: #49C840">Prêt.e à commencer?</h2>
            <p class="text-center text-2xl font-semibold mb-8">Notre équipe vous accompagne dès aujourd’hui avec écoute et
                simplicité.</p>
            <a href="/contacter" class="text-white font-semibold rounded-full px-8 py-3 text-lg"
                style="background-color: #49C840">Contactez-nous</a>
        </div>

        {{-- Bannière healthy --}}
        <div class="w-full h-[250px] ">
            <img src="/img/banniere-healthy.jpg" alt="" class="object-cover w-full rotate-180 "
                style="height: 250px">
        </div>


    </div>
@endsection
