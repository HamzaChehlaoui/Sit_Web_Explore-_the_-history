<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - TimeTrekker</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/4645/4645379.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .timeline-dot {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }

        .scroll-trigger {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }

        .scroll-trigger.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="font-serif bg-gradient-to-b from-amber-50 to-amber-100 min-h-screen">
    <!-- Navigation -->
    @include('navbare_visitoure.nav')


    <!-- Hero Section -->
    <div class="relative pt-16 pb-32 overflow-hidden">
        <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0">
                    <div>
                        <div class="mt-6">
                            <h2 class="text-4xl font-extrabold tracking-tight text-amber-900">
                                Our Mission
                            </h2>
                            <p class="mt-4 text-lg text-amber-800">
                                TimeTrekker was founded with a simple yet powerful vision: to make history accessible, engaging, and interactive for everyone. We believe that understanding our past is key to shaping our future.
                            </p>
                            <div class="mt-6">
                                <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-amber-800 hover:bg-amber-700">
                                    Start Exploring
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img class="w-full mt-[1rem] rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://dualcreditathome.com/wp-content/uploads/2014/02/history.jpg" alt="Mission illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-amber-800 py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-amber-200 font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Experience History Like Never Before
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-amber-100 text-amber-900">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-white">Interactive Learning</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-amber-200">
                            Engage with historical events through interactive timelines, 3D models, and virtual tours.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-amber-100 text-amber-900">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-white">Expert Curated Content</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-amber-200">
                            Access thoroughly researched articles and documentation verified by historical experts.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-amber-100 text-amber-900">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-white">Community Driven</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-amber-200">
                            Join discussions, share insights, and connect with history enthusiasts worldwide.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-amber-100 text-amber-900">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-white">Personalized Learning</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-amber-200">
                            Customize your learning journey with personalized timelines and recommended content.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="bg-amber-50 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-amber-800">Our Team</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-amber-900 sm:text-4xl">
                    Meet the Historians Behind TimeTrekker
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col items-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf78nWglJ-W-tD4tGNFI4vU0k3eUMC6skWSw&s" alt="Team member" class="w-32 h-32 rounded-full mb-4">
                        <dt class="font-semibold text-amber-900">Dr. Sarah Chen</dt>
                        <dd class="text-amber-800">Ancient Civilizations Expert</dd>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="https://mediaassets.cbre.com/-/media/cbre/global-shared/headshots/m/i/c/michael-thompson3.jpg" alt="Team member" class="w-32 h-32 rounded-full mb-4">
                        <dt class="font-semibold text-amber-900">Prof. Michael Thompson</dt>
                        <dd class="text-amber-800">Medieval History Specialist</dd>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="https://media.licdn.com/dms/image/v2/D4E03AQFWCBmuwtAlgg/profile-displayphoto-shrink_400_400/B4EZSXbCmpGwAg-/0/1737707237271?e=1743638400&v=beta&t=x9JJjjcO7Ce3Sy1Ek5m4blpq7ZsLZ9dmdia-rPOWrps" alt="Team member" class="w-32 h-32 rounded-full mb-4">
                        <dt class="font-semibold text-amber-900">Prof. Hamza Chehlaoui</dt>
                        <dd class="text-amber-800">Modern History Researcher</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-amber-900 text-amber-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4 font-serif">TimeTrekker</h4>
                    <p class="text-amber-200">Exploring history, one moment at a time.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-amber-200 hover:text-amber-100">About Us</a></li>
                        <li><a href="#" class="text-amber-200 hover:text-amber-100">Contact
                            <li><a href="#" class="text-amber-200 hover:text-amber-100">Contact Us</a></li>
                            <li><a href="#" class="text-amber-200 hover:text-amber-100">Terms of Service</a></li>
                            <li><a href="#" class="text-amber-200 hover:text-amber-100">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-amber-200 hover:text-amber-100">Facebook</a></li>
                            <li><a href="#" class="text-amber-200 hover:text-amber-100">Twitter</a></li>
                            <li><a href="#" class="text-amber-200 hover:text-amber-100">Instagram</a></li>
                            <li><a href="#" class="text-amber-200 hover:text-amber-100">LinkedIn</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Contact</h4>
                        <p class="text-amber-200">123 History Lane, Timeline City, TX 12345</p>
                        <p class="text-amber-200">Email: support@timetrekker.com</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-amber-700 mt-8 pt-6 text-center">
                <p class="text-amber-200">&copy; 2025 TimeTrekker, All Rights Reserved.</p>
            </div>
        </footer>

        <!-- Scroll Animations Script -->
        <script>
            const scrollTriggers = document.querySelectorAll('.scroll-trigger');
            const options = {
                root: null,
                threshold: 0.1,
            };

            const onIntersect = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            };

            const observer = new IntersectionObserver(onIntersect, options);
            scrollTriggers.forEach(trigger => {
                observer.observe(trigger);
            });
        </script>
    </body>
    </html>
