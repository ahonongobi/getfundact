<style>

		.active span{
			background-color: #ff6015 !important;
			color: white !important;
			border-color: #ff6015 !important;
        
		}
         
	
</style>
@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    {{--<span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
                    <span style="color: #ff6015 !important" class="page-link" aria-hidden="true">← Précédant</span>
                </li>
            @else
                <li class="page-item">
                    <a style="color: #ff6015 !important" class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">← Précédant</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a style="color: #ff6015 !important" class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Suivant →</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    {{--<span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
                    <span style="color: #ff6015 !important" class="page-link" aria-hidden="true">Suivant →</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
