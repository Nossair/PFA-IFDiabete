@if ($paginator->hasPages())

    <div class="container">
        <div class="row form-group">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a>Précédent</a></li>
        @else
            <li class=""><a href="{{ $paginator->previousPageUrl() }}" rel="prev">Précédent</a></li>
        @endif

        {{-- "Three Dots" Separator First--}}
        @if ($paginator->currentPage()>3)
            <li class="disabled"><a>,,,</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a><span>{{ $cat_names[$page-1]->name }}</span></a></li>
                    @else
                        @if($page >= $paginator->currentPage()-2 and $page <= $paginator->currentPage()+2)
                            <li class=""><a href="{{ $url }}">{{ $cat_names[$page-1]->name }}</a></li>
                        @endif
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- "Three Dots" Separator Last--}}
        @if ($paginator->currentPage()<=sizeof($cat_names)-3)
            <li class="disabled"><a>,,,</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class=""><a href="{{ $paginator->nextPageUrl() }}" rel="next">Suivant</a></li>
        @else
            <li class="disabled"><a>Suivant</a></li>
        @endif
    </ul>
            </div>
        </div>
    </div>
@endif
