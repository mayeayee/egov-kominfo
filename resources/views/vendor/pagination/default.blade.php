<div>

    @if ($paginator->hasPages())
    <div class="screen-slider-navigation slider-navigation" style="align-items: flex-start;">
        @if ($paginator->onFirstPage())

        <div class=" disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <i class="las la-long-arrow-alt-left" style="color: #2193b0"></i>
        </div>
        @else

        {{-- <a href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')" rel="prev" class="">
            <i class="las la-long-arrow-alt-left"></i>
        </a> --}}
        @if(method_exists($paginator,'getCursorName'))

            <button wire:click="setPage('{{$paginator->previousCursor()->encode()}}','{{ $paginator->getCursorName() }}')"
                wire:loading.attr="disabled" rel="prev"  style="border: none; background-color: rgba(0,0,0,0);">
                <i class="las la-long-arrow-alt-left"></i>
            </button>
            @else


            <button dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                 wire:click="previousPage('{{ $paginator->getPageName() }}')"   style="border: none; background-color: rgba(0,0,0,0);"
                wire:loading.attr="disabled" rel="prev">
                <i class="las la-long-arrow-alt-left"></i>
            </button>
            @endif
        @endif

        @if ($paginator->hasMorePages())


        @if(method_exists($paginator,'getCursorName'))

            <button style="border: none; background-color: rgba(0,0,0,0);" dusk="nextPage"
            wire:click="setPage('{{$paginator->nextCursor()->encode()}}','{{ $paginator->getCursorName() }}')"
            wire:loading.attr="disabled" rel="next">
                <i class="las la-long-arrow-alt-right"></i>
            </button>
            @else

            <button style="border: none; background-color: rgba(0,0,0,0);" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                 wire:click="nextPage('{{ $paginator->getPageName() }}')"
                wire:loading.attr="disabled" rel="next">
                <i class="las la-long-arrow-alt-right"></i>
            </button>
            @endif
        @else

        <div aria-disabled="true" aria-label="@lang('pagination.next')" class="disabled ">
            <i class="las la-long-arrow-alt-right" style="color: #2193b0"></i>
        </div>
        @endif

    </div>
    @endif
</div>
