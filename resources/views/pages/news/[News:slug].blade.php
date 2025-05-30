<?php
    \Laravel\Folio\name('news.show');
    ?>

<x-layouts.app>
    <x-navbar />
    <div class="relative bg-white text-black pt-20 pb-10 px-4">
        <div class="container mx-auto flex">
            <div class="w-full text-center">
                <h1 class="text-center text-2xl md:text-4xl font-bold mb-2 uppercase">{{ $news->title }}</h1>
                <p class="text-center text-lg font-bold mt-10 uppercase">
                    {{ $news->newsCategory->name }}
                </p>
                <p class="text-center text-sm text-gray-500">
                    {{ $news->published_at->format('d F Y') }}
                </p>
            </div>
        </div>
    </div>
    <div style="background: linear-gradient(to bottom, white, #a3a4f4)" class="pb-6">
        <div class="bg-white prose p-6 max-w-4xl mx-auto mt-10 shadow-md rounded-lg">
            <img class="w-full h-auto rounded-lg" src="{{ Storage::url($news->image) }}" alt="">
            <div class="text-sm leading-relaxed max-w-full">
                {!! $news->content !!}
            </div>

            <!-- Comment Section -->
            <div class="mt-10 border-t pt-6">
                <h3 class="text-xl font-bold mb-4">Comments</h3>

                <!-- Comment Form -->
                <form action="{{ route('comments.store') }}" method="POST" class="mb-8">
                    @csrf
                    <input type="hidden" name="news_id" value="{{ $news->id }}">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" id="name" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Comment</label>
                        <textarea name="comment" id="comment" rows="4" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Post Comment
                    </button>
                </form>

                <!-- Comments List -->
                <div class="space-y-4">
                    @foreach($news->comments()->whereNull('parent_id')->orderBy('created_at', 'desc')->get() as $comment)
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-start gap-3">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $comment->name }}"
                                alt="Avatar"
                                class="w-10 h-10 rounded-full"
                            >
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h4 class="font-semibold">{{ $comment->name }}</h4>
                                    <span class="text-sm text-gray-500">{{ $comment->created_at->format('d M Y H:i') }}</span>
                                </div>
                                <p class="mt-2 text-gray-700">{{ $comment->comment }}</p>

                                <!-- Reply Button -->
                                <button onclick="toggleReplyForm('{{ $comment->id }}')"
                                    class="text-sm text-blue-500 hover:text-blue-700 mt-2">
                                    Reply
                                </button>

                                <!-- Reply Form -->
                                <div id="replyForm-{{ $comment->id }}" class="hidden mt-4">
                                    <form action="{{ route('comments.store') }}" method="POST" class="mb-4">
                                        @csrf
                                        <input type="hidden" name="news_id" value="{{ $news->id }}">
                                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                        <div class="mb-4">
                                            <label for="name-{{ $comment->id }}" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                            <input type="text" name="name" id="name-{{ $comment->id }}" required
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        </div>
                                        <div class="mb-4">
                                            <label for="comment-{{ $comment->id }}" class="block text-sm font-medium text-gray-700 mb-1">Reply</label>
                                            <textarea name="comment" id="comment-{{ $comment->id }}" rows="2" required
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                        </div>
                                        <button type="submit"
                                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            Post Reply
                                        </button>
                                    </form>
                                </div>

                                <!-- Replies -->
                                @if($comment->replies->count() > 0)
                                <div class="ml-8 mt-4 space-y-4">
                                    @foreach($comment->replies()->orderBy('created_at', 'asc')->get() as $reply)
                                    <div class="bg-white p-3 rounded-lg">
                                        <div class="flex items-start gap-3">
                                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $reply->name }}"
                                                alt="Avatar"
                                                class="w-8 h-8 rounded-full"
                                            >
                                            <div class="flex-1">
                                                <div class="flex justify-between items-start">
                                                    <h4 class="font-semibold text-sm">{{ $reply->name }}</h4>
                                                    <span class="text-xs text-gray-500">{{ $reply->created_at->format('d M Y H:i') }}</span>
                                                </div>
                                                <p class="mt-1 text-sm text-gray-700">{{ $reply->comment }}</p>

                                                <!-- Reply Button for Nested Reply -->
                                                <button onclick="toggleReplyForm('reply-{{ $reply->id }}')"
                                                    class="text-xs text-blue-500 hover:text-blue-700 mt-2">
                                                    Reply
                                                </button>

                                                <!-- Reply Form for Nested Reply -->
                                                <div id="replyForm-reply-{{ $reply->id }}" class="hidden mt-4">
                                                    <form action="{{ route('comments.store') }}" method="POST" class="mb-4">
                                                        @csrf
                                                        <input type="hidden" name="news_id" value="{{ $news->id }}">
                                                        <input type="hidden" name="parent_id" value="{{ $reply->id }}">
                                                        <div class="mb-4">
                                                            <label for="name-reply-{{ $reply->id }}" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                                            <input type="text" name="name" id="name-reply-{{ $reply->id }}" required
                                                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="comment-reply-{{ $reply->id }}" class="block text-sm font-medium text-gray-700 mb-1">Reply</label>
                                                            <textarea name="comment" id="comment-reply-{{ $reply->id }}" rows="2" required
                                                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                                        </div>
                                                        <button type="submit"
                                                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                            Post Reply
                                                        </button>
                                                    </form>
                                                </div>

                                                <!-- Nested Replies -->
                                                @if($reply->replies->count() > 0)
                                                <div class="ml-8 mt-4 space-y-4">
                                                    @foreach($reply->replies()->orderBy('created_at', 'asc')->get() as $nestedReply)
                                                    <div class="bg-gray-50 p-3 rounded-lg">
                                                        <div class="flex items-start gap-3">
                                                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $nestedReply->name }}"
                                                                alt="Avatar"
                                                                class="w-6 h-6 rounded-full"
                                                            >
                                                            <div class="flex-1">
                                                                <div class="flex justify-between items-start">
                                                                    <h4 class="font-semibold text-xs">{{ $nestedReply->name }}</h4>
                                                                    <span class="text-xs text-gray-500">{{ $nestedReply->created_at->format('d M Y H:i') }}</span>
                                                                </div>
                                                                <p class="mt-1 text-xs text-gray-700">{{ $nestedReply->comment }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layouts.app>

<script>
    function toggleReplyForm(commentId) {
        const form = document.getElementById(`replyForm-${commentId}`);
        form.classList.toggle('hidden');
    }
</script>
