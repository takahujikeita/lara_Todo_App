<nav role="navigation" aria-label="Pagination Navigation">
    <ul class="flex justify-between">
        @if ($paginator->onFirstPage())
            <li>
                <span class="cursor-not-allowed py-2 px-4">Previous</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" class="py-2 px-4">Previous</a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li>
                    <span class="py-2 px-4">{{ $element }}</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <span class="py-2 px-4 bg-blue-500 text-white">{{ $page }}</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}" class="py-2 px-4">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="py-2 px-4">Next</a>
            </li>
        @else
            <li>
                <span class="cursor-not-allowed py-2 px-4">Next</span>
            </li>
        @endif
    </ul>
</nav>
