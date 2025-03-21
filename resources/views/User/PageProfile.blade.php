<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeTrekker - User Profile</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/4645/4645379.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .timeline-track {
            background: repeating-linear-gradient(
                45deg,
                #92400e,
                #92400e 10px,
                #78350f 10px,
                #78350f 20px
            );
        }

        .parchment {
            background-color: #fffbeb;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23b45309' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
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

        .time-badge {
            background: conic-gradient(from 0deg, #78350f, #b45309, #92400e, #78350f);
        }
    </style>
</head>
<body class="font-serif bg-gradient-to-b from-amber-50 to-amber-100 min-h-screen">
    <!-- Navigation Bar Placeholder -->
    <header class="bg-amber-900 text-amber-100 px-4 py-3 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="https://cdn-icons-png.flaticon.com/512/4645/4645379.png" alt="TimeTrekker Logo" class="h-10 w-10">
                <span class="text-2xl font-bold">TimeTrekker</span>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Home</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Explore</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Timeline</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Community</a></li>
                    <li><a href="#" class="font-bold text-amber-300 border-b-2 border-amber-300">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Profile Header Section -->
    <section class="relative h-64 bg-cover bg-center" style="background-image: url('https://www.pcworld.com/wp-content/uploads/2023/09/AssassinsCreedMirage_01_Aufmacher.jpg?quality=50&strip=all');">
        <div class="absolute inset-0 bg-amber-900 opacity-60"></div>
        <div class="absolute bottom-0 left-0 w-full transform translate-y-1/2 px-4">
            <div class="max-w-6xl mx-auto flex items-end">
                <div class="relative z-10">
                    <div class="rounded-full border-4 border-amber-100 overflow-hidden h-36 w-36 shadow-xl">
                        <img src=https://www.denofgeek.com/wp-content/uploads/2023/10/Mirage-Timeline.v1.jpg?resize=768%2C432" alt="Profile Picture" class="h-full w-full object-cover">
                    </div>
                </div>
                <div class="ml-6 pb-4">
                    <h1 class="text-3xl font-bold text-amber-700 ">Eleanor Timewalker</h1>
                    <p class="text-amber-700">Historian • Time Enthusiast • Professional Voyager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Profile Content -->
    <div class="max-w-6xl mx-auto px-4 pt-24 pb-16 grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-amber-100 rounded-lg shadow-md border border-amber-200 p-6 mb-8">
                <h3 class="text-xl font-semibold text-amber-900 mb-4">About Me</h3>
                <p class="text-amber-800 mb-4">
                    Medieval history enthusiast with a passion for uncovering forgotten stories and connecting the past with our present. I've been a TimeTrekker member since 2022.
                </p>

                <h4 class="text-lg font-semibold text-amber-900 mb-2 mt-6">Member Stats</h4>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-amber-700">Time Travelled:</span>
                        <span class="font-medium text-amber-900">1,245 years</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-amber-700">Expeditions:</span>
                        <span class="font-medium text-amber-900">42</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-amber-700">Artifacts Discovered:</span>
                        <span class="font-medium text-amber-900">157</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-amber-700">Community Rank:</span>
                        <span class="font-medium text-amber-900">Master Historian</span>
                    </div>
                </div>

                <h4 class="text-lg font-semibold text-amber-900 mb-2 mt-6">Favorite Eras</h4>
                <div class="flex flex-wrap gap-2 mt-3">
                    <span class="px-3 py-1 bg-amber-200 text-amber-800 rounded-full text-sm">Medieval Europe</span>
                    <span class="px-3 py-1 bg-amber-200 text-amber-800 rounded-full text-sm">Renaissance</span>
                    <span class="px-3 py-1 bg-amber-200 text-amber-800 rounded-full text-sm">Byzantine Empire</span>
                    <span class="px-3 py-1 bg-amber-200 text-amber-800 rounded-full text-sm">Viking Age</span>
                </div>

                <div class="mt-8 pt-6 border-t border-amber-200">
                    <h4 class="text-lg font-semibold text-amber-900 mb-4">Contact</h4>
                    <div class="flex items-center space-x-2 mb-2">
                        <svg class="h-5 w-5 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <a href="#" class="text-amber-700 hover:text-amber-900">eleanor@timetrekker.com</a>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="h-5 w-5 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1010 10A10.011 10.011 0 0010 0zm0 18a8 8 0 118-8 8.01 8.01 0 01-8 8z"></path>
                            <path d="M10 4a6 6 0 106 6 6.007 6.007 0 00-6-6zm0 10a4 4 0 114-4 4.004 4.004 0 01-4 4z"></path>
                        </svg>
                        <a href="#" class="text-amber-700 hover:text-amber-900">@EleanorTimewalk</a>
                    </div>
                </div>
            </div>

            <div class="bg-amber-100 rounded-lg shadow-md border border-amber-200 p-6">
                <h3 class="text-xl font-semibold text-amber-900 mb-4">Time Badges</h3>
                <div class="grid grid-cols-3 gap-3">
                    <div class="flex flex-col items-center">
                        <div class="h-16 w-16 rounded-full time-badge flex items-center justify-center mb-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/6295/6295417.png" alt="Badge" class="h-10 w-10">
                        </div>
                        <span class="text-xs text-amber-800 text-center">Medieval Master</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="h-16 w-16 rounded-full time-badge flex items-center justify-center mb-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/3309/3309977.png" alt="Badge" class="h-10 w-10">
                        </div>
                        <span class="text-xs text-amber-800 text-center">Renaissance Explorer</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="h-16 w-16 rounded-full time-badge flex items-center justify-center mb-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/3075/3075977.png" alt="Badge" class="h-10 w-10">
                        </div>
                        <span class="text-xs text-amber-800 text-center">Artifact Hunter</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="h-16 w-16 rounded-full time-badge flex items-center justify-center mb-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" alt="Badge" class="h-10 w-10">
                        </div>
                        <span class="text-xs text-amber-800 text-center">Viking Voyager</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="h-16 w-16 rounded-full time-badge flex items-center justify-center mb-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/2784/2784589.png" alt="Badge" class="h-10 w-10">
                        </div>
                        <span class="text-xs text-amber-800 text-center">Castle Connoisseur</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="h-16 w-16 rounded-full time-badge flex items-center justify-center mb-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/3227/3227076.png" alt="Badge" class="h-10 w-10">
                        </div>
                        <span class="text-xs text-amber-800 text-center">History Scholar</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="lg:col-span-2">
            <!-- Timeline Section -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-amber-900 mb-6">My Time Journey</h2>
                <div class="relative">
                    <!-- Timeline Track -->
                    <div class="absolute left-3 top-0 w-2 h-full timeline-track rounded-full"></div>

                    <!-- Timeline Events -->
                    <div class="space-y-12">
                        <!-- Timeline Event 1 -->
                        <div class="relative pl-12 scroll-trigger">
                            <div class="absolute left-0 w-8 h-8 bg-amber-800 rounded-full flex items-center justify-center">
                                <span class="text-amber-100 font-bold">1</span>
                            </div>
                            <div class="parchment p-5 rounded-lg shadow-md border border-amber-300">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-semibold text-amber-900">Medieval Monastery Visit</h3>
                                    <span class="px-3 py-1 bg-amber-200 text-amber-800 rounded-full text-sm">1242 AD</span>
                                </div>
                                <p class="text-amber-800 mb-4">
                                    Observed the daily life of Benedictine monks at Canterbury Cathedral. Documented their manuscript illumination techniques and agricultural innovations.
                                </p>
                                <div class="flex flex-wrap gap-4">
                                    <img src="https://www.ribapix.com/images/thumbs/037/0373426_RIBA32126_600.jpeg" alt="Canterbury" class="h-24 w-32 object-cover rounded-md">
                                    <img src="https://c4.wallpaperflare.com/wallpaper/344/123/704/history-historic-viking-medieval-medieval-manuscript-hd-wallpaper-preview.jpg" alt="Manuscript" class="h-24 w-32 object-cover rounded-md">
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Event 2 -->
                        <div class="relative pl-12 scroll-trigger">
                            <div class="absolute left-0 w-8 h-8 bg-amber-800 rounded-full flex items-center justify-center">
                                <span class="text-amber-100 font-bold">2</span>
                            </div>
                            <div class="parchment p-5 rounded-lg shadow-md border border-amber-300">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-semibold text-amber-900">Florentine Renaissance</h3>
                                    <span class="px-3 py-1 bg-amber-200 text-amber-800 rounded-full text-sm">1478 AD</span>
                                </div>
                                <p class="text-amber-800 mb-4">
                                    Attended an evening gathering at the Medici Palace. Witnessed discussions between Lorenzo de' Medici and prominent artists about the nature of beauty and balance in art.
                                </p>
                                <div class="flex flex-wrap gap-4">
                                    <img src="https://c4.wallpaperflare.com/wallpaper/536/542/333/rainbow-over-body-of-water-wallpaper-preview.jpg" alt="Florence" class="h-24 w-32 object-cover rounded-md">
                                    <img src="https://i.pinimg.com/736x/9e/84/ff/9e84ff1c9b9c3d23b36626e30c4b1040.jpg" alt="Renaissance Art" class="h-24 w-32 object-cover rounded-md">
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Event 3 -->
                        <div class="relative pl-12 scroll-trigger">
                            <div class="absolute left-0 w-8 h-8 bg-amber-800 rounded-full flex items-center justify-center">
                                <span class="text-amber-100 font-bold">3</span>
                            </div>
                            <div class="parchment p-5 rounded-lg shadow-md border border-amber-300">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-semibold text-amber-900">Viking Trading Settlement</h3>
                                    <span class="px-3 py-1 bg-amber-200 text-amber-800 rounded-full text-sm">962 AD</span>
                                </div>
                                <p class="text-amber-800 mb-4">
                                    Spent a month in Hedeby, documenting the unique blend of Scandinavian and Continental trading practices. Collected samples of amber jewelry and trade goods.
                                </p>
                                <div class="flex flex-wrap gap-4">
                                    <img src="https://img.freepik.com/premium-photo/illustration-viking-longship-sailing-sea-with-mountains-background-vikings-standi_1117379-1900.jpg?semt=ais_hybrid" alt="Viking Ship" class="h-24 w-32 object-cover rounded-md">
                                    <img src="https://s1.img.bidsquare.com/item/l/2332/23328740.jpeg?t=1QXakL" alt="Amber" class="h-24 w-32 object-cover rounded-md">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Discoveries Section -->
            <div>
                <h2 class="text-2xl font-bold text-amber-900 mb-6">Recent Discoveries</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Artifact 1 -->
                    <div class="bg-amber-100 rounded-lg shadow-md overflow-hidden border border-amber-200 scroll-trigger">
                        <img src="https://www.okmdetectors.com/cdn/shop/files/gold-coin-byzantine-empire-turkiye-preview.png?v=1695303400&width=420" alt="Byzantine Coin" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-amber-900 mb-2">Byzantine Gold Solidus</h3>
                            <p class="text-amber-800 mb-3">A remarkably well-preserved gold coin from the reign of Emperor Justinian I, discovered in a marketplace in Constantinople.</p>
                            <div class="flex justify-between">
                                <span class="text-sm text-amber-700">March 12, 2025</span>
                                <span class="text-sm font-medium text-amber-900">532 AD</span>
                            </div>
                        </div>
                    </div>

                    <!-- Artifact 2 -->
                    <div class="bg-amber-100 rounded-lg shadow-md overflow-hidden border border-amber-200 scroll-trigger">
                        <img src="https://media.istockphoto.com/id/466268089/photo/scribe-writing.jpg?s=612x612&w=0&k=20&c=fDIJn1KiIW4ZMOH-jqCG7siET20fsH6ypZBXqfr3xN4=" alt="Manuscript Page" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-amber-900 mb-2">Illuminated Manuscript Page</h3>
                            <p class="text-amber-800 mb-3">A single page from a previously unknown Book of Hours, featuring unique depictions of agricultural life alongside religious imagery.</p>
                            <div class="flex justify-between">
                                <span class="text-sm text-amber-700">February 28, 2025</span>
                                <span class="text-sm font-medium text-amber-900">1356 AD</span>
                            </div>
                        </div>
                    </div>

                    <!-- Artifact 3 -->
                    <div class="bg-amber-100 rounded-lg shadow-md overflow-hidden border border-amber-200 scroll-trigger">
                        <img src="https://c4.wallpaperflare.com/wallpaper/613/849/317/old-maps-old-maps-1700-map-of-europe-vintage-europe-map-hd-wallpaper-preview.jpg" alt="Medieval Map" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-amber-900 mb-2">Portolan Chart Fragment</h3>
                            <p class="text-amber-800 mb-3">A section of an early nautical chart showing the Mediterranean coastline with remarkable accuracy for its time.</p>
                            <div class="flex justify-between">
                                <span class="text-sm text-amber-700">January 15, 2025</span>
                                <span class="text-sm font-medium text-amber-900">1415 AD</span>
                            </div>
                        </div>
                    </div>

                    <!-- Artifact 4 -->
                    <div class="bg-amber-100 rounded-lg shadow-md overflow-hidden border border-amber-200 scroll-trigger">
                        <img src="https://wallpapercave.com/wp/wp12268828.jpg" alt="Viking Runes" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-amber-900 mb-2">Runic Message Stick</h3>
                            <p class="text-amber-800 mb-3">A wooden stick carved with Norse runes containing a personal message between merchants, offering insights into daily Viking communication.</p>
                            <div class="flex justify-between">
                                <span class="text-sm text-amber-700">December 7, 2024</span>
                                <span class="text-sm font-medium text-amber-900">985 AD</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-amber-900 text-amber-100 py-8">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-semibold mb-4">TimeTrekker</h4>
                    <p class="text-amber-300 text-sm">Exploring history one moment at a time.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Home</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Explore Eras</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Community</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Historical Database</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Artifact Registry</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Time Travel Guidelines</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Preservation Techniques</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Terms of Service</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Privacy Policy</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Temporal Ethics</a></li>
                        <li><a href="#" class="text-amber-300 hover:text-amber-100">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-amber-800 mt-8 pt-6 text-center text-sm text-amber-400">
                <p>&copy; 2025 TimeTrekker. All rights reserved. Temporal Displacement License #TT-42985-C.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Simple scroll animation for timeline items
        document.addEventListener('DOMContentLoaded', function() {
            let scrollTriggers = document.querySelectorAll('.scroll-trigger');

            let checkVisibility = () => {
                scrollTriggers.forEach(element => {
                    let position = element.getBoundingClientRect();

                    // Check if element is in viewport
                    if(position.top < window.innerHeight - 100) {
                        element.classList.add('visible');
                    }
                });
            };

            // Check visibility on load
            checkVisibility();

            // Check visibility on scroll
            window.addEventListener('scroll', checkVisibility);
        });
    </script>
</body>
</html>
