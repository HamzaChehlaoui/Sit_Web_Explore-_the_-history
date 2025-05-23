<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des commandes - TimeTrekker</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/4645/4645379.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .parchment {
            background-color: #fffbeb;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%2392400e' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .timeline-track {
            background: repeating-linear-gradient(
                45deg,
                #92400e,
                #92400e 10px,
                #78350f 10px,
                #78350f 20px
            );
        }

        .order-card {
            transition: all 0.3s ease;
        }

        .order-card:hover {
            transform: translateY(-5px);
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

        .vintage-shadow {
            box-shadow: 0 4px 6px -1px rgba(120, 53, 15, 0.1), 0 2px 4px -1px rgba(120, 53, 15, 0.06);
        }
    </style>
</head>
<body class="font-serif bg-gradient-to-b from-amber-50 to-amber-100 min-h-screen">
    <!-- Header/Navigation (Placeholder) -->
    <header class="bg-amber-900 text-amber-100 shadow-md">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/4645/4645379.png" alt="TimeTrekker Logo" class="h-10 w-10">
                    <span class="text-2xl font-bold">TimeTrekker</span>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="hover:text-amber-200 transition-colors">Accueil</a>
                    <a href="#" class="hover:text-amber-200 transition-colors">Expéditions</a>
                    <a href="#" class="hover:text-amber-200 transition-colors">À propos</a>
                    <a href="#" class="hover:text-amber-200 transition-colors">Contact</a>
                    <a href="#" class="text-amber-300 hover:text-amber-200 transition-colors">Mon Compte</a>
                </nav>
                <div class="md:hidden">
                    <button class="text-amber-100 hover:text-amber-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Title -->
    <div class="bg-amber-800 text-amber-100 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-2">Historique des commandes</h1>
            <div class="flex items-center space-x-2">
                <a href="#" class="text-amber-300 hover:text-amber-200">Mon Compte</a>
                <span>›</span>
                <span>Historique des commandes</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Filters -->
        <div class="bg-amber-100 rounded-lg shadow-md p-6 mb-8 border border-amber-200">
            <h2 class="text-2xl font-semibold text-amber-900 mb-4">Filtrer mes commandes</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-amber-700 mb-2">Période</label>
                    <select class="w-full rounded-lg border-amber-300 bg-amber-50 text-amber-800 py-2 px-3">
                        <option>Tous</option>
                        <option>30 derniers jours</option>
                        <option>6 derniers mois</option>
                        <option>12 derniers mois</option>
                    </select>
                </div>
                <div>
                    <label class="block text-amber-700 mb-2">Type d'expédition</label>
                    <select class="w-full rounded-lg border-amber-300 bg-amber-50 text-amber-800 py-2 px-3">
                        <option>Tous</option>
                        <option>Renaissance</option>
                        <option>Égypte Ancienne</option>
                        <option>Ère Industrielle</option>
                    </select>
                </div>
                <div>
                    <label class="block text-amber-700 mb-2">Statut</label>
                    <select class="w-full rounded-lg border-amber-300 bg-amber-50 text-amber-800 py-2 px-3">
                        <option>Tous</option>
                        <option>En attente</option>
                        <option>Confirmé</option>
                        <option>Terminé</option>
                        <option>Annulé</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button class="bg-amber-700 hover:bg-amber-600 text-amber-100 py-2 px-4 rounded-lg transition-colors w-full">
                        Appliquer les filtres
                    </button>
                </div>
            </div>
        </div>

        <!-- Order Timeline -->
        <div class="relative mb-12">
            <div class="timeline-track h-2 rounded-full"></div>
            <div class="flex justify-between mt-2">
                <div class="text-xs text-amber-700">2023</div>
                <div class="text-xs text-amber-700">2024</div>
                <div class="text-xs text-amber-700">2025</div>
            </div>
        </div>

        <!-- Orders List -->
        <div class="space-y-6">
            <!-- Order Card 1 -->
            <div class="order-card bg-amber-100 rounded-lg shadow-md overflow-hidden border border-amber-200 hover:shadow-xl transition-shadow">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/4 p-6 bg-amber-800 text-amber-100">
                        <div class="text-lg font-semibold mb-1">Commande #TT-2589</div>
                        <div class="text-amber-300 mb-4">15 mars 2025</div>
                        <span class="inline-block bg-amber-600 text-amber-100 px-3 py-1 rounded-full text-sm">Terminé</span>
                    </div>
                    <div class="md:w-3/4 p-6">
                        <div class="flex flex-col md:flex-row justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-semibold text-amber-900">Expédition Renaissance Italienne</h3>
                                <p class="text-amber-700">3 voyageurs · Florence, Italie · 5 jours</p>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <span class="text-2xl font-bold text-amber-900">1250€</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">Art et Culture</span>
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">15ème siècle</span>
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">Guide Expert</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-1 text-amber-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <span class="text-sm text-amber-700">5.0 (12 avis)</span>
                            </div>
                            <div>
                                <a href="#" class="text-amber-700 hover:text-amber-600 flex items-center space-x-1">
                                    <span>Voir les détails</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Card 2 -->
            <div class="order-card bg-amber-100 rounded-lg shadow-md overflow-hidden border border-amber-200 hover:shadow-xl transition-shadow">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/4 p-6 bg-amber-800 text-amber-100">
                        <div class="text-lg font-semibold mb-1">Commande #TT-2431</div>
                        <div class="text-amber-300 mb-4">28 janvier 2025</div>
                        <span class="inline-block bg-amber-600 text-amber-100 px-3 py-1 rounded-full text-sm">Terminé</span>
                    </div>
                    <div class="md:w-3/4 p-6">
                        <div class="flex flex-col md:flex-row justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-semibold text-amber-900">Expédition Égypte Ancienne</h3>
                                <p class="text-amber-700">2 voyageurs · Vallée des Rois · 7 jours</p>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <span class="text-2xl font-bold text-amber-900">1800€</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">Archéologie</span>
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">1200 av. J.-C.</span>
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">Tout inclus</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-1 text-amber-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                                </svg>
                                <span class="text-sm text-amber-700">4.8 (24 avis)</span>
                            </div>
                            <div>
                                <a href="#" class="text-amber-700 hover:text-amber-600 flex items-center space-x-1">
                                    <span>Voir les détails</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Card 3 -->
            <div class="order-card bg-amber-100 rounded-lg shadow-md overflow-hidden border border-amber-200 hover:shadow-xl transition-shadow">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/4 p-6 bg-amber-800 text-amber-100">
                        <div class="text-lg font-semibold mb-1">Commande #TT-2256</div>
                        <div class="text-amber-300 mb-4">12 octobre 2024</div>
                        <span class="inline-block bg-amber-600 text-amber-100 px-3 py-1 rounded-full text-sm">Terminé</span>
                    </div>
                    <div class="md:w-3/4 p-6">
                        <div class="flex flex-col md:flex-row justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-semibold text-amber-900">Expédition Révolution Industrielle</h3>
                                <p class="text-amber-700">4 voyageurs · Londres, Angleterre · 3 jours</p>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <span class="text-2xl font-bold text-amber-900">950€</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">Sciences</span>
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">19ème siècle</span>
                            <span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm">Famille</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
