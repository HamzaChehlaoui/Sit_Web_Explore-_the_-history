@extends('Visiteur.master')

@section('content')

<style>

    .scroll-beautiful::-webkit-scrollbar {
        width: 8px;
    }

    .scroll-beautiful::-webkit-scrollbar-track {
        background: #fef3c7;
        border-radius: 10px;
    }

    .scroll-beautiful::-webkit-scrollbar-thumb {
        background-color: #d97706;
        border-radius: 10px;
        border: 2px solid #fef3c7;
    }

    .scroll-beautiful {
        scrollbar-color: #d97706 #fef3c7;
        scrollbar-width: thin;
    }
</style>
<body class="font-serif bg-gradient-to-b from-amber-50 to-amber-100 min-h-screen">

    <!-- Article Hero Section -->
    <div class="relative pt-16 pb-24 flex content-center items-center justify-center">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('https://t4.ftcdn.net/jpg/05/62/05/73/360_F_562057377_jbuKO8yjBC5t9ctheD64Xxwcgsvmulrt.jpg');">
            <span class="w-full h-full absolute opacity-0 bg-amber-900"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-full px-4 ml-auto mr-auto text-center">
                    <div class="floating mt-[3rem]">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-amber-100 mb-6 font-serif">
                            {{ $article->title }}
                        </h1>
                        @auth

                    @endauth
                        <p class="text-xl text-amber-200 mb-4 max-w-3xl mx-auto">
                            {{ $article->description }}
                        </p>
                        <div class="flex justify-center space-x-4 text-amber-200 text-sm mb-6">
                            <span><i class="fas fa-clock mr-2"></i>{{ \Carbon\Carbon::parse($article->date_publication)->format('F d, Y') }}</span>
                            <span><i class="fas fa-user mr-2"></i>{{ $article->utilisateur->name ?? 'Auteur inconnu' }}</span>
                            <span><i class="fas fa-tag mr-2"></i>{{ $article->category->name ?? 'Catégorie inconnue' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Content Section -->
    <section class="py-16 parchment">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-amber-100 rounded-lg shadow-lg overflow-hidden border border-amber-200 mb-10">
                <br>
                <div class="flex justify-between items-center mb-6 px-4">
                    <h3 class="text-2xl font-bold text-amber-900 font-serif">
                        {{ $article->title }} :
                    </h3>
                    @auth
    @if(auth()->id() === $article->utilisateur_id || auth()->user()->role_id===1)
        <!-- Article Action Buttons -->
<div class="flex items-center gap-3 mb-6 mt-4">
    @if(auth()->id() === $article->utilisateur_id)
        <a href="{{ route('articles.edit', $article->id) }}"
           class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-medium text-sm text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
            Edit
        </a>
    @endif

    <form id="delete-article-form" action="{{ route('articles.destroy', $article->id) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <button type="button" id="delete-article-btn"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-sm text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-150 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
        Delete
    </button>
</div>
    @endif
@endauth
                    @if(auth()->user()->role_id !==1)
                    <form action="{{ route('favorites.toggle', $article->id) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="flex items-center gap-2 text-amber-700 hover:text-white font-semibold px-4 py-2 rounded border border-amber-400 bg-white hover:bg-amber-500 transition-all duration-300">
                            <i class="fas fa-star {{ auth()->user()->favorites->contains('article_id', $article->id) ? 'text-yellow-400' : 'text-gray-400' }}"></i>
                            {{ auth()->user()->favorites->contains('article_id', $article->id) ? 'Retirer des favoris' : 'Ajouter aux favoris' }}
                        </button>
                    </form>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-6">
                    @foreach($article->images as $image)
                        <img src="{{ $image->path }}" alt="Article Image">
                    @endforeach
                </div>

                <div class="p-8">
                    <div class="prose prose-amber max-w-none text-amber-900">
                        {!! $article->content !!}
                    </div>

                    <!-- Historical Context -->
                    <div class="mt-12 bg-amber-50 p-6 rounded-lg border border-amber-200">
                        <h3 class="text-2xl font-bold text-amber-900 mb-4 font-serif">Historical Context</h3>
                        <p class="text-amber-800">{{ $article->historical_context ?? 'This event took place during a pivotal moment in history, influencing various aspects of society, culture, and politics of the era.' }}</p>
                    </div>

                    <!-- Key Figures -->
                    @if(isset($article->key_figures) && count($article->key_figures) > 0)
                    <div class="mt-8">
                        <h3 class="text-2xl font-bold text-amber-900 mb-4 font-serif">Key Historical Figures</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($article->key_figures as $figure)
                                <div class="bg-amber-50 p-4 rounded-lg border border-amber-200">
                                    <h4 class="text-lg font-semibold text-amber-900">{{ $figure->name }}</h4>
                                    <p class="text-amber-800">{{ $figure->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Timeline -->
                    <div class="mt-12">
                        <h3 class="text-2xl font-bold text-amber-900 mb-4 font-serif">Timeline of Events</h3>
                        <div class="relative">
                            <div class="absolute left-0 w-1 bg-amber-300 h-full"></div>
                            @for($i = 1; $i <= 3; $i++)
                            <div class="ml-8 relative mb-8">
                                <div class="absolute -left-10 w-5 h-5 rounded-full bg-amber-600 border-4 border-amber-100"></div>
                                <div class="bg-amber-50 p-4 rounded-lg border border-amber-200">
                                    <h4 class="text-lg font-semibold text-amber-900">Event {{ $i }}</h4>
                                    <p class="text-sm text-amber-600">{{ date('F Y', strtotime("-".($i*5)." months")) }}</p>
                                    <p class="text-amber-800 mt-2">A significant development related to this historical event that shaped its course.</p>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Sources -->
                    <div class="mt-12">
                        <h3 class="text-2xl font-bold text-amber-900 mb-4 font-serif">Sources & References</h3>
                        <ul class="list-disc pl-5 text-amber-800">
                            @for($i = 1; $i <= 3; $i++)
                                <li class="mb-2">Historical reference {{ $i }}: "{{ $article->title }} and Its Impact", Journal of Historical Studies</li>
                            @endfor
                        </ul>
                    </div>

                    <!-- Navigation and Social -->
                    <div class="mt-12 flex flex-col md:flex-row justify-between items-center pt-6 border-t border-amber-200">
                        <div class="flex space-x-4">
                            <a href="{{ url()->previous() }}" class="inline-block bg-amber-700 text-amber-100 px-4 py-2 rounded-lg font-semibold hover:bg-amber-600 transition-all duration-300">
                                <i class="fas fa-arrow-left mr-2"></i> Back to Articles
                            </a>
                        </div>
                        <div class="flex space-x-3 mt-4 md:mt-0">
                            <span class="text-amber-800">Share this article:</span>
                            <a href="#" class="text-amber-700 hover:text-amber-500"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-amber-700 hover:text-amber-500"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-amber-700 hover:text-amber-500"><i class="fab fa-pinterest"></i></a>
                            <a href="#" class="text-amber-700 hover:text-amber-500"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-amber-100 rounded-lg shadow-lg overflow-hidden border border-amber-200 mb-10">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-amber-900 mb-6 font-serif">
                        <i class="fas fa-comments mr-2"></i> Comments ({{ count($article->commentaires ?? []) }})
                    </h3>

                    <!-- Modify your existing comment section to include edit functionality -->
<div class="space-y-6 mb-8 max-h-[500px] overflow-y-auto pr-2 scroll-beautiful">
    @forelse($article->commentaires ?? [] as $commentaire)
        <div class="bg-amber-50 p-4 rounded-lg border border-amber-200" id="comment-{{ $commentaire->id }}">
            <div class="flex justify-between items-start mb-2">
                <div class="flex items-center">
                    <div class="bg-amber-700 text-amber-100 rounded-full w-10 h-10 flex items-center justify-center mr-3">
                        <span class="font-bold">{{ substr($commentaire->utilisateur->name ?? 'A', 0, 1) }}</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-amber-900">{{ $commentaire->utilisateur->name ?? 'Anonymous' }}</h4>
                        <p class="text-xs text-amber-600">{{ \Carbon\Carbon::parse($commentaire->date_commentaire)->format('F d, Y \a\t h:i A') }}</p>
                    </div>
                </div>
                @auth
                    @if(auth()->id() == $commentaire->utilisateur_id)
                        <div class="flex space-x-2">
                            <button onclick="toggleEditComment({{ $commentaire->id }})" class="text-amber-600 hover:text-amber-800"><i class="fas fa-edit"></i> </button>
                            <form action="{{ route('commentaires.destroy', $commentaire->id) }}" method="POST" class="delete-comment-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-amber-600 hover:text-amber-800 delete-comment-btn">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
            <!-- Regular comment content (visible by default) -->
            <div class="text-amber-800 mt-2 comment-content" id="comment-content-{{ $commentaire->id }}">
                <p>{{ $commentaire->content }}</p>
            </div>

            <!-- Edit form (hidden by default) -->
            @auth
                @if(auth()->id() == $commentaire->utilisateur_id)
                    <div class="mt-2 hidden comment-edit-form" id="comment-edit-form-{{ $commentaire->id }}">
                        <form action="{{ route('commentaires.update', $commentaire->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <textarea name="content" class="w-full p-2 border border-amber-300 rounded-md focus:ring-amber-500 focus:border-amber-500" rows="3">{{ $commentaire->content }}</textarea>
                            <div class="flex justify-end space-x-2 mt-2">
                                <button type="button" onclick="toggleEditComment({{ $commentaire->id }})" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Cancel</button>
                                <button type="submit" class="px-3 py-1 bg-amber-600 text-white rounded hover:bg-amber-700">Save</button>
                            </div>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    @empty
        <div class="text-center py-8">
            <p class="text-amber-800 italic">No comments yet. Be the first to share your thoughts!</p>
        </div>
    @endforelse
</div>


                    <!-- Flash Messages -->
                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded" role="alert">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif

                    <!-- Comment Form -->
                    @auth
                        <div class="bg-amber-50 p-6 rounded-lg border border-amber-200">
                            <h4 class="text-xl font-bold text-amber-900 mb-4 font-serif">Leave a Comment</h4>
                            <form action="{{ route('commentaires.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <input type="hidden" name="article_id" value="{{ $article->id }}">
                                <div>
                                    <textarea name="content" rows="4" class="w-full bg-amber-100 border border-amber-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition @error('content') border-red-500 @enderror" placeholder="Partagez vos réflexions sur cet article...">{{ old('content') }}</textarea>
                                    @error('content')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-amber-700 text-amber-100 px-6 py-2 rounded-lg font-semibold hover:bg-amber-600 transition-all duration-300 transform hover:scale-105 shadow-md">
                                        <i class="fas fa-paper-plane mr-2"></i> Publier le commentaire
                                    </button>
                                </div>
                            </form>
                        </div>
                    @else
                        <div class="bg-amber-50 p-6 rounded-lg border border-amber-200 text-center">
                            <p class="text-amber-800 mb-4">You must be logged in to comment on this article.</p>
                            <a href="{{ route('login') }}" class="inline-block bg-amber-700 text-amber-100 px-6 py-2 rounded-lg font-semibold hover:bg-amber-600 transition-all duration-300">
                                <i class="fas fa-sign-in-alt mr-2"></i> Login to Comment
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 parchment">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-3xl font-bold text-amber-900 mb-4 font-serif">Continue Your Historical Journey</h3>
            <p class="text-amber-800 mb-8 max-w-2xl mx-auto">Join our community of history enthusiasts and discover more fascinating stories from the past</p>
            <div class="space-x-4">
                <a href="#" class="inline-block bg-gradient-to-r from-amber-700 to-amber-600 text-amber-100 px-8 py-3 rounded-lg font-semibold hover:from-amber-600 hover:to-amber-500 transition-all duration-300 transform hover:scale-105 shadow-lg">Become a Member</a>
                <a href="#" class="inline-block bg-gradient-to-r from-amber-100 to-amber-200 text-amber-900 px-8 py-3 rounded-lg font-semibold hover:from-amber-200 hover:to-amber-300 transition-all duration-300 transform hover:scale-105 shadow-lg">Browse More Articles</a>
            </div>
        </div>
    </section>

</body>
@endsection

<script src="/js/article.js"></script>
