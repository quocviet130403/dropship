@if ($paginator->hasPages())
    <div class="row">
    <div class="col-md-12 text-center">
        <div class="block-27">
       <ul>
       
        @if ($paginator->onFirstPage())
            <li class="disabled"><a href="javascript:;"><i class="ion-ios-arrow-back"></i></a></li>
        @else
            <li class="disabled"><a href="{{ $paginator->previousPageUrl() }}"><i class="ion-ios-arrow-back"></i></a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="ion-ios-arrow-forward"></i></a></li>
        @else
            <li class="disabled"><a href="javascript:;"><i class="ion-ios-arrow-forward"></i></a></li>
        @endif
    </ul>
</div>
</div>
</div>
@endif 