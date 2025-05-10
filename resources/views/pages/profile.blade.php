@extends("layouts.default")
@section("title","Hogwarts School - Magical Education Since 990 AD")

@section("main")
<!-- Custom styles for animations and special effects -->
<style>
    .floating {
        animation: floating 6s ease-in-out infinite;
    }
    .floating-slow {
        animation: floating 8s ease-in-out infinite;
    }
    .floating-fast {
        animation: floating 4s ease-in-out infinite;
    }
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
    
    .magic-sparkle {
        position: absolute;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.8);
        pointer-events: none;
        z-index: 100;
        opacity: 0;
        animation: sparkle 1.5s ease-in-out forwards;
    }
    @keyframes sparkle {
        0% { transform: scale(0); opacity: 0; }
        20% { transform: scale(1.2); opacity: 1; }
        100% { transform: scale(0); opacity: 0; }
    }
    
    .scroll-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease;
    }
    .scroll-reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
    
    .parallax-bg {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .magical-border {
        position: relative;
    }
    .magical-border::after {
        content: '';
        position: absolute;
        top: -3px;
        left: -3px;
        right: -3px;
        bottom: -3px;
        border-radius: inherit;
        background: linear-gradient(45deg, #ffdc74, #4680ce, #9457eb, #4680ce, #ffdc74);
        background-size: 400% 400%;
        z-index: -1;
        animation: gradientBorder 6s ease infinite;
    }
    @keyframes gradientBorder {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>

<!-- IMMERSIVE HERO SECTION -->
<div class="relative h-screen overflow-hidden bg-cover bg-center bg-fixed" 
     style="background-image: url('{{ asset('images/hogwarts-castle-night.jpg') }}');">
    <!-- Animated gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-blue-950/80 via-blue-900/60 to-blue-800/40"></div>
    
    <!-- Animated particles/stars -->
    <div class="absolute inset-0 overflow-hidden stars-container" id="stars-container"></div>
    
    <!-- Floating elements -->
    <div class="absolute w-full h-full overflow-hidden">
        <img src="{{ asset('images/floating-candle.png') }}" alt="" class="absolute w-16 h-auto left-[10%] top-[20%] floating-slow opacity-70">
        <img src="{{ asset('images/floating-candle.png') }}" alt="" class="absolute w-12 h-auto left-[30%] top-[15%] floating opacity-60">
        <img src="{{ asset('images/floating-candle.png') }}" alt="" class="absolute w-14 h-auto left-[80%] top-[25%] floating-fast opacity-75">
        <img src="{{ asset('images/floating-candle.png') }}" alt="" class="absolute w-10 h-auto left-[60%] top-[10%] floating-slow opacity-50">
    </div>
    
    <!-- Hero content -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center px-6">
            <!-- Hogwarts crest/logo -->
            <div class="mx-auto mb-6 w-28 h-28 sm:w-32 sm:h-32 md:w-40 md:h-40">
                <img src="{{ asset('images/logonobg.png') }}" alt="Hogwarts School Crest" class="w-full h-full object-contain">
            </div>
            
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white tracking-wider mb-4 drop-shadow-lg">
                <span class="block">HOGWARTS SCHOOL</span>
                <span class="block text-xl sm:text-2xl md:text-3xl font-light mt-2 text-blue-100">of Witchcraft and Wizardry</span>
            </h1>
            
            <p class="text-xl text-blue-50 max-w-2xl mx-auto mt-6 font-light">
                "Draco dormiens nunquam titillandus"
            </p>
            
            <!-- Scroll indicator -->
            <div class="absolute bottom-16 left-1/2 transform -translate-x-1/2 flex flex-col items-center">
                <span class="text-white/70 text-sm mb-2">Discover the Magic</span>
                <div class="animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Decorative bottom waves -->
    <div class="absolute bottom-0 left-0 w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" class="w-full h-auto fill-white">
            <path d="M0,128L48,138.7C96,149,192,171,288,165.3C384,160,480,128,576,117.3C672,107,768,117,864,138.7C960,160,1056,192,1152,186.7C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</div>

<!-- ABOUT SECTION: HOGWARTS HERITAGE -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none opacity-5">
        <img src="{{ asset('images/parchment-texture.jpg') }}" alt="" class="w-full h-full object-cover">
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row gap-16 items-center">
            <div class="md:w-2/5 relative">
                <div class="relative p-3">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-amber-50 rounded-xl transform rotate-2"></div>
                    <img 
                        src="{{ asset('images/hogwarts-houses.jpg') }}" 
                        alt="The Four Houses of Hogwarts" 
                        class="relative z-10 rounded-xl shadow-lg w-full h-auto transform transition duration-500 hover:scale-[1.02]"
                    >
                </div>
            </div>
            
            <!-- School description -->
            <div class="md:w-3/5 scroll-reveal">
                <div class="inline-block mb-4 px-4 py-1 bg-blue-100 rounded-full">
                    <span class="text-blue-800 font-medium">Est. 990 AD</span>
                </div>
                
                <h2 class="text-4xl font-bold text-blue-950 mb-6">A Millennium of Magical Excellence</h2>
                
                <div class="prose prose-lg max-w-none">
                    <p>
                        Founded in the 10th century, Hogwarts School of Witchcraft and Wizardry stands as one of the world's most prestigious 
                        magical institutions. Our ancient castle, nestled in the Scottish Highlands, has been home to generations of talented 
                        young witches and wizards who develop their magical abilities through our comprehensive seven-year program.
                    </p>
                    
                    <p>
                        The school is divided into four noble houses—Gryffindor, Hufflepuff, Ravenclaw, and Slytherin—each with its own 
                        rich history and values. Students are sorted into these houses upon arrival, creating a close-knit community that 
                        becomes like family during their time at Hogwarts.
                    </p>
                    
                    <p>
                        At Hogwarts, we pride ourselves on offering not just magical education, but a transformative experience that 
                        prepares young witches and wizards for the challenges of the magical world. Our distinguished faculty includes 
                        some of the most accomplished wizards and witches of our time, dedicated to nurturing the next generation of magical talent.
                    </p>
                </div>
                
                <div class="mt-8">
                    <a href="{{ route('registration') }}" class="inline-flex items-center px-8 py-4 bg-blue-800 hover:bg-blue-900 text-white font-medium rounded-full shadow-lg group transition-all duration-300 magical-border">
                        <span>Begin Your Magical Journey</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KEY STATISTICS SECTION -->
<section class="py-16 bg-gradient-to-r from-blue-900 to-indigo-900 relative overflow-hidden">
    
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-1 h-full bg-white transform rotate-45"></div>
        <div class="absolute top-0 left-2/4 w-1 h-full bg-white transform -rotate-45"></div>
        <div class="absolute top-0 left-3/4 w-1 h-full bg-white transform rotate-45"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Statistic 1 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 text-center transform transition-all hover:-translate-y-2 hover:bg-white/20">
                <div class="w-16 h-16 mx-auto mb-6 bg-blue-100/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div class="text-white">
                    <div class="text-5xl font-bold mb-2">1,000+</div>
                    <div class="text-blue-100 text-lg">Students</div>
                    <p class="mt-4 text-blue-100/70 text-sm">From across the magical world, representing diverse backgrounds and talents</p>
                </div>
            </div>
            
            <!-- Statistic 2 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 text-center transform transition-all hover:-translate-y-2 hover:bg-white/20">
                <div class="w-16 h-16 mx-auto mb-6 bg-blue-100/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <div class="text-white">
                    <div class="text-5xl font-bold mb-2">142</div>
                    <div class="text-blue-100 text-lg">Moving Staircases</div>
                    <p class="mt-4 text-blue-100/70 text-sm">Our enchanted castle adapts and changes to create new paths and adventures</p>
                </div>
            </div>
            
            <!-- Statistic 3 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 text-center transform transition-all hover:-translate-y-2 hover:bg-white/20">
                <div class="w-16 h-16 mx-auto mb-6 bg-blue-100/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="text-white">
                    <div class="text-5xl font-bold mb-2">25,000+</div>
                    <div class="text-blue-100 text-lg">Library Books</div>
                    <p class="mt-4 text-blue-100/70 text-sm">Including rare magical texts and scrolls dating back centuries</p>
                </div>
            </div>
            
            <!-- Statistic 4 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 text-center transform transition-all hover:-translate-y-2 hover:bg-white/20">
                <div class="w-16 h-16 mx-auto mb-6 bg-blue-100/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="text-white">
                    <div class="text-5xl font-bold mb-2">100%</div>
                    <div class="text-blue-100 text-lg">Graduate Employment</div>
                    <p class="mt-4 text-blue-100/70 text-sm">Our graduates excel in Ministry positions and magical professions worldwide</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VISION & MISSION SECTION WITH INTERACTIVE ELEMENTS -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <!-- Section heading -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-950 relative inline-block pb-3">
                Our Guiding Principles
                <span class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 via-blue-400 to-blue-600"></span>
            </h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">The foundational values that have guided Hogwarts through the centuries</p>
        </div>
        
        <!-- Vision & Mission Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-stretch max-w-7xl mx-auto">
            <!-- Vision Card -->
            <div class="bg-gradient-to-b from-white to-blue-50 rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 scroll-reveal">
                <div class="h-3 bg-gradient-to-r from-red-600 via-yellow-500 to-blue-600"></div>
                <div class="p-8 md:p-10">
                    <div class="w-20 h-20 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-center text-blue-950 mb-6">Our Vision</h3>
                    <p class="text-gray-700 leading-relaxed text-center text-lg mb-8">
                        To be the premier institution for magical education, fostering excellence, 
                        integrity, and innovation in all aspects of wizardry, while preparing 
                        students to become responsible leaders in the magical community.
                    </p>
                    
                    <!-- Vision highlights -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-white p-4 rounded-lg shadow-sm flex items-center">
                            <div class="w-10 h-10 mr-3 rounded-full bg-red-100 flex-shrink-0 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <span class="font-medium text-gray-800">Excellence</span>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm flex items-center">
                            <div class="w-10 h-10 mr-3 rounded-full bg-yellow-100 flex-shrink-0 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <span class="font-medium text-gray-800">Leadership</span>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm flex items-center">
                            <div class="w-10 h-10 mr-3 rounded-full bg-green-100 flex-shrink-0 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <span class="font-medium text-gray-800">Innovation</span>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm flex items-center">
                            <div class="w-10 h-10 mr-3 rounded-full bg-blue-100 flex-shrink-0 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="font-medium text-gray-800">Community</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mission Card -->
            <div class="bg-gradient-to-b from-white to-blue-50 rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 scroll-reveal" data-delay="300">
                <div class="h-3 bg-gradient-to-r from-blue-600 via-purple-500 to-indigo-600"></div>
                <div class="p-8 md:p-10">
                    <div class="w-20 h-20 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-center text-blue-950 mb-6">Our Mission</h3>
                    <p class="text-gray-700 leading-relaxed text-center text-lg mb-8">
                        To provide a comprehensive magical education that empowers students to 
                        develop their unique talents, embrace diversity, and contribute positively 
                        to the wizarding world through rigorous academics, practical training, 
                        and character development.
                    </p>
                    
                    <!-- Mission highlights as a progress bar style -->
                    <div class="space-y-6 mt-8">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 font-medium">Magical Curriculum</span>
                                <span class="text-gray-700 font-medium">Complete</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 font-medium">Character Development</span>
                                <span class="text-gray-700 font-medium">Ongoing</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-purple-500 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 font-medium">Cultural Exchange</span>
                                <span class="text-gray-700 font-medium">Growing</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-500 h-2.5 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 font-medium">Magical Innovation</span>
                                <span class="text-gray-700 font-medium">Accelerating</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-cyan-500 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PARALLAX TESTIMONIAL/QUOTE SECTION -->
<section class="relative h-[400px] bg-fixed bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/great-hall.jpg') }}');">
    
    <div class="absolute inset-0 bg-blue-900/70"></div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="max-w-4xl mx-auto">
            <div class="text-5xl text-blue-100 mb-6">"</div>
            <p class="text-2xl md:text-3xl font-light text-white mb-8">
                Hogwarts will always be there to welcome you home.
            </p>
            <p class="text-blue-200 font-medium">- Albus Dumbledore</p>
        </div>
    </div>
</section>

<!-- HEADMASTER'S MESSAGE SECTION WITH ENHANCED DESIGN -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-950 relative inline-block pb-3">
                Headmaster's Message
                <span class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 via-blue-400 to-blue-600"></span>
            </h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">A warm welcome from our esteemed leader</p>
        </div>
        
        <div class="max-w-5xl mx-auto bg-gradient-to-br from-blue-50 to-blue-100/30 rounded-2xl shadow-xl p-6 md:p-10 scroll-reveal">
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <!-- Left: Headmaster Photo -->
                <div class="md:w-1/3">
                    <div class="relative">
                        <!-- Photo frame with decorative elements -->
                        <div class="absolute inset-0 border-[6px] border-amber-100 rounded-full transform rotate-3"></div>
                        <div class="absolute inset-0 border-[6px] border-blue-100 rounded-full transform -rotate-3"></div>
                        <img 
                            src="{{ asset('images/dumbledore.jpg') }}" 
                            alt="Professor Albus Dumbledore" 
                            class="relative z-10 rounded-full w-64 h-64 mx-auto object-cover border-4 border-white shadow-xl"
                        >
                        
                        
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-yellow-400/20 backdrop-blur rounded-full transform translate-x-1/4 translate-y-1/4 flex items-center justify-center">
                            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center">
                        <h3 class="text-xl font-bold text-blue-950">Albus Dumbledore</h3>
                        <p class="text-gray-600">Headmaster</p>
                    </div>
                </div>
                
                <!-- Right: Message Content -->
                <div class="md:w-2/3">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-100 mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        
                        <p class="text-gray-700 mb-4">
                            Dear Students, Parents, and Friends of Hogwarts,
                        </p>
                        
                        <p class="text-gray-700 mb-4">
                            For over a millennium, Hogwarts has stood as a beacon of magical education and enlightenment. 
                            It is my great privilege to continue this proud tradition as we guide the next generation of 
                            witches and wizards through their magical journey.
                        </p>
                        
                        <p class="text-gray-700 mb-4">
                            At Hogwarts, we believe that education extends beyond the classroom. Our students learn not only 
                            to master spells and brew potions but also to develop character, judgment, and wisdom. The challenges 
                            they face and overcome here prepare them for the complexities of the magical world.
                        </p>
                        
                        <p class="text-gray-700">
                            Whether you are a prospective student, a curious parent, or a member of our extended magical community, 
                            I invite you to explore all that Hogwarts has to offer. Our doors—and our hearts—are open to all who 
                            seek knowledge, friendship, and magical excellence.
                        </p>
                        
                        <div class="mt-6 flex items-end justify-end">
                            <img 
                                src="{{ asset('images/signature.png') }}" 
                                alt="Albus Dumbledore's Signature" 
                                class="h-16 w-auto"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAGICAL CTA SECTION -->
<section class="py-16 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 relative overflow-hidden">
    
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/3 w-40 h-40 bg-indigo-300/10 rounded-full blur-2xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Begin Your Magical Journey?</h2>
            <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">
                Join the ranks of extraordinary witches and wizards who have walked the halls of Hogwarts.
                Your adventure in magical education awaits.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('registration') }}" class="px-8 py-4 bg-white text-blue-900 font-bold rounded-full shadow-lg hover:bg-blue-50 transform transition-all hover:scale-105 magical-border">
                    Enrollment Information
                </a>
                <a href="#" class="px-8 py-4 border-2 border-white/70 text-white font-medium rounded-full hover:bg-white/10 transform transition-all hover:scale-105">
                    Schedule a Visit
                </a>
            </div>
        </div>
    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function() {
    
    const starsContainer = document.getElementById('stars-container');
    if (starsContainer) {
        for (let i = 0; i < 50; i++) {
            createStar(starsContainer);
        }
    }
    
    const scrollRevealElements = document.querySelectorAll('.scroll-reveal');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                
                const delay = entry.target.dataset.delay || 0;
                setTimeout(() => {
                    entry.target.classList.add('active');
                }, delay);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });
    
    scrollRevealElements.forEach(element => {
        observer.observe(element);
    });
    
    
    document.querySelectorAll('.magical-border').forEach(element => {
        element.addEventListener('mousemove', createSparkleEffect);
    });
});

function createStar(container) {
    const star = document.createElement('div');
    
    const size = Math.random() * 3 + 1;
    const posX = Math.random() * 100;
    const posY = Math.random() * 100;
    const delay = Math.random() * 10;
    const duration = Math.random() * 10 + 10;
    const opacity = Math.random() * 0.7 + 0.3;
    
    
    star.style.width = `${size}px`;
    star.style.height = `${size}px`;
    star.style.borderRadius = '50%';
    star.style.backgroundColor = 'white';
    star.style.position = 'absolute';
    star.style.left = `${posX}%`;
    star.style.top = `${posY}%`;
    star.style.opacity = opacity;
    star.style.animation = `twinkle ${duration}s ease-in-out ${delay}s infinite`;
    
    container.appendChild(star);
}

function createSparkleEffect(e) {
    const x = e.offsetX;
    const y = e.offsetY;
    
    for (let i = 0; i < 4; i++) {
        const sparkle = document.createElement('div');
        sparkle.classList.add('magic-sparkle');
        
        const offsetX = Math.random() * 20 - 10;
        const offsetY = Math.random() * 20 - 10;
        const delay = Math.random() * 0.5;
        
        sparkle.style.left = `${x + offsetX}px`;
        sparkle.style.top = `${y + offsetY}px`;
        sparkle.style.animationDelay = `${delay}s`;
        
        this.appendChild(sparkle);
        

        setTimeout(() => {
            sparkle.remove();
        }, 2000);
    }
}

const style = document.createElement('style');
style.textContent = `
@keyframes twinkle {
    0% { opacity: 0.3; }
    50% { opacity: 1; }
    100% { opacity: 0.3; }
}
`;
document.head.appendChild(style);
</script>
@endsection
