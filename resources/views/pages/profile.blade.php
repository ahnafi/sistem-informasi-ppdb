@extends("layouts.default")
@section("title","Tentang kami")

@section("main")

    <!--HERO SECTION-->
<div class="relative overflow-hidden">
    <!-- Enhanced gradient overlay with more pronounced blue tones -->
    <div class="absolute inset-0 bg-gradient-to-b from-blue-950/90 via-blue-800/80 to-blue-600/60 z-10"></div>
    
    <div class="w-full">
      <!-- Added more blur for enhanced effect -->
      <div class="w-full h-[400px] md:h-[500px] lg:h-[600px] bg-cover bg-center backdrop-blur-md" style="background-image: url('{{ asset('images/school-hero.jpg') }}');">
      </div>
    </div>
    
    <!-- Profile Sekolah Title -->
    <div class="absolute inset-0 z-20 flex items-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-wider drop-shadow-lg ml-8 md:ml-16 lg:ml-24">PROFILE SEKOLAH</h1>
    </div>
</div>

<!--DESCRIPTION SECTION-->
<section class="py-12 md:py-16 lg:py-20 bg-gradient-to-b from-blue-50 via-white to-blue-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Left column: Description text -->
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold text-blue-950 mb-6">About Our School</h2>
                <p class="text-gray-700 mb-4">
                    Founded in the 10th century, Hogwarts School of Witchcraft and Wizardry is one of the world's finest institutions for magical education. 
                    Located in the Scottish Highlands, our castle is home to students from ages 11 to 18 who develop their magical abilities 
                    through a comprehensive curriculum spanning seven years.
                </p>
                <p class="text-gray-700 mb-4">
                    Our school is divided into four houses—Gryffindor, Hufflepuff, Ravenclaw, and Slytherin—each with its own rich history and values. 
                    Students are sorted into these houses upon arrival and participate in the annual House Cup competition, fostering a spirit of 
                    friendly rivalry and collaboration.
                </p>
                <p class="text-gray-700">
                    At Hogwarts, we pride ourselves on offering not just magical education, but a transformative experience that prepares young 
                    witches and wizards for the challenges of the magical world. Our distinguished faculty includes some of the most accomplished 
                    wizards and witches of our time, dedicated to nurturing the next generation of magical talent.
                </p>
                <a href="#"
                    class="inline-block mt-6 px-6 py-3 bg-blue-950 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-800 transition duration-300">
                    Jadi Bagian dari SMA Hogwarts
                </a>
            </div>
            
            <!-- Right column: Image -->
            <div class="rounded-lg overflow-hidden shadow-xl">
                <img 
                    src="{{ asset('images/school-building.jpg') }}" 
                    alt="Hogwarts School Building" 
                    class="w-full h-auto rounded-lg transition duration-300 hover:scale-105"
                >
            </div>
        </div>
    </div>
</section>

<!--VISION AND MISSION SECTION-->
<section class="py-16 bg-gradient-to-b from-blue-50 via-blue-100/50 to-blue-50">
    <div class="container mx-auto px-4">
        
        <div class="grid md:grid-cols-2 gap-12 items-stretch">
            <!-- Vision Card -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-3 bg-blue-800"></div>
                <div class="p-8">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-center text-blue-950 mb-4">Our Vision</h3>
                    <p class="text-gray-700 leading-relaxed text-center">
                        To be the premier institution for magical education, fostering excellence, 
                        integrity, and innovation in all aspects of wizardry, while preparing 
                        students to become responsible leaders in the magical community.
                    </p>
                </div>
            </div>
            
            <!-- Mission Card -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-3 bg-blue-600"></div>
                <div class="p-8">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-center text-blue-950 mb-4">Our Mission</h3>
                    <p class="text-gray-700 leading-relaxed text-center">
                        To provide a comprehensive magical education that empowers students to 
                        develop their unique talents, embrace diversity, and contribute positively 
                        to the wizarding world through rigorous academics, practical training, 
                        and character development.
                    </p>
                    
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2">Excellence</h4>
                            <p class="text-sm text-gray-600">Pursuing the highest standards in magical education</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2">Integrity</h4>
                            <p class="text-sm text-gray-600">Upholding ethical principles in all endeavors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--PURPOSE SECTION-->
<section class="py-16 bg-gradient-to-b from-blue-50 via-white to-blue-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-950 relative inline-block pb-2">
                School Values
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-blue-600 rounded-full"></span>
            </h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">The fundamental principles that guide our educational approach</p>
        </div>
        
        <!-- Interactive Values Panel -->
        <div class="max-w-4xl mx-auto" x-data="{ activeTab: 'excellence' }">
            <!-- Value Tabs -->
            <div class="flex flex-wrap justify-center mb-8">
                <button 
                    @click="activeTab = 'excellence'" 
                    :class="{ 'bg-blue-800 text-white': activeTab === 'excellence', 'bg-gray-100 text-blue-800 hover:bg-gray-200': activeTab !== 'excellence' }"
                    class="px-6 py-3 m-2 font-semibold rounded-lg transition duration-300 focus:outline-none">
                    Academic Excellence
                </button>
                <button 
                    @click="activeTab = 'character'" 
                    :class="{ 'bg-blue-800 text-white': activeTab === 'character', 'bg-gray-100 text-blue-800 hover:bg-gray-200': activeTab !== 'character' }"
                    class="px-6 py-3 m-2 font-semibold rounded-lg transition duration-300 focus:outline-none">
                    Character Development
                </button>
                <button 
                    @click="activeTab = 'innovation'" 
                    :class="{ 'bg-blue-800 text-white': activeTab === 'innovation', 'bg-gray-100 text-blue-800 hover:bg-gray-200': activeTab !== 'innovation' }"
                    class="px-6 py-3 m-2 font-semibold rounded-lg transition duration-300 focus:outline-none">
                    Magical Innovation
                </button>
                <button 
                    @click="activeTab = 'community'" 
                    :class="{ 'bg-blue-800 text-white': activeTab === 'community', 'bg-gray-100 text-blue-800 hover:bg-gray-200': activeTab !== 'community' }"
                    class="px-6 py-3 m-2 font-semibold rounded-lg transition duration-300 focus:outline-none">
                    Community Service
                </button>
            </div>
            
            <!-- Content Panels -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <!-- Excellence Content -->
                <div x-show="activeTab === 'excellence'" class="transition duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-950">Academic Excellence</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        At Hogwarts, we cultivate a rigorous academic environment where students are challenged to reach their full potential in magical studies. 
                        Our curriculum is designed to develop critical thinking, problem-solving skills, and magical proficiency across all disciplines.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Students receive personalized attention from our expert faculty, who employ innovative teaching methods to accommodate different 
                        learning styles and abilities. Regular assessments ensure that each student is making appropriate progress and receives the support 
                        they need to excel.
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Comprehensive curriculum covering all magical disciplines</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Personalized learning plans tailored to individual abilities</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Advanced placement opportunities for exceptional students</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Character Development Content -->
                <div x-show="activeTab === 'character'" class="transition duration-300 ease-in-out" style="display: none;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-950">Character Development</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We believe that true education extends beyond academic knowledge to encompass the development of strong moral character. 
                        At Hogwarts, we emphasize values such as courage, loyalty, wisdom, and determination through our house system and 
                        everyday interactions.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Students learn to navigate complex ethical dilemmas, demonstrate respect for differences, and uphold the highest 
                        standards of magical ethics. Our approach integrates character education throughout all aspects of school life.
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>House system that promotes healthy competition and teamwork</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Regular reflection on ethical questions and personal growth</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Recognition programs that celebrate acts of kindness and integrity</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Innovation Content -->
                <div x-show="activeTab === 'innovation'" class="transition duration-300 ease-in-out" style="display: none;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-950">Magical Innovation</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        Hogwarts fosters a spirit of innovation and creativity in the magical arts. We encourage students to experiment, 
                        discover, and push the boundaries of magical knowledge through supervised research projects and creative applications.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Our state-of-the-art facilities, including specialized laboratories and extensive magical libraries, provide students 
                        with the resources they need to explore new magical theories and develop innovative spells and potions under expert guidance.
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Student research initiatives and magical innovation competitions</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Cross-disciplinary projects that combine different magical fields</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Partnerships with leading magical research institutions</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Community Service Content -->
                <div x-show="activeTab === 'community'" class="transition duration-300 ease-in-out" style="display: none;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-950">Community Service</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We believe in the importance of using magical abilities to benefit the wider community. Hogwarts students are 
                        encouraged to participate in service activities that make a positive difference in both the magical and non-magical worlds.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Through organized volunteer programs, charity events, and community partnerships, students develop empathy, 
                        social responsibility, and leadership skills while applying their magical knowledge to address real-world challenges.
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Regular volunteer opportunities in magical and muggle communities</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>Student-led initiatives to address social and environmental issues</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span>International exchange programs that promote global citizenship</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--PRINCIPAL SAYS SECTION-->
<section class="py-16 bg-gradient-to-b from-blue-50 via-blue-100/70 to-blue-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-950 relative inline-block pb-2">
                Principal's Foreword
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-blue-600 rounded-full"></span>
            </h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">A message from our esteemed Headmaster</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center max-w-5xl mx-auto">
            <!-- Left: Principal's Image -->
            <div class="md:col-span-5">
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-200 rounded-full transform -rotate-6 scale-95"></div>
                    <div class="relative z-10">
                        <img 
                            src="{{ asset('images/principal.jpg') }}" 
                            alt="Professor Albus Dumbledore, Headmaster" 
                            class="rounded-full w-full h-auto shadow-xl border-4 border-white"
                        >
                    </div>
                    <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-blue-900 text-white py-2 px-6 rounded-full shadow-lg z-20">
                        <p class="text-sm font-semibold">Prof. Albus Dumbledore</p>
                    </div>
                </div>
            </div>
            
            <!-- Right: Principal's Message -->
            <div class="md:col-span-7">
                <div class="bg-white/90 backdrop-blur-sm p-6 md:p-8 rounded-xl shadow-lg relative">
                    <!-- Quotation mark decoration -->
                    <div class="absolute -top-5 -left-2 text-6xl text-blue-200 opacity-50">"</div>
                    
                    <h3 class="text-xl md:text-2xl font-semibold text-blue-950 mb-4">Welcome to Hogwarts School of Witchcraft and Wizardry</h3>
                    
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
                    
                    <div class="mt-6 flex items-center justify-end">
                        <img 
                            src="{{ asset('images/signature.png') }}" 
                            alt="Professor Dumbledore's Signature" 
                            class="h-12 w-auto"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

@endsection
