@if ($total_pages > 0)
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        @if ($page_number == '1')
            <li class="page-item d-none">
                <a class="page-link" href="#" tabindex="-1">
                	<i class="fa fa-chevron-left fa-icon ml-0"></i>
            	</a>
            </li>
        @else
            <li class="page-item">
            	<a class="page-link" href="{{$page_number-1}}">
            		<i class="fa fa-chevron-left fa-icon ml-0"></i>
            	</a>
            </li>
        @endif

        @for ($i = 1; $i <= $total_pages; $i++)
            @if ($page_number == $i)
                <li class="page-item active">
                    <a class="page-link">{{ $i }}</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ url('blog').'/'.$i.'/'.$service }}">{{ $i }}</a>
                </li>
            @endif
        @endfor 
            @if ( $page_number < $total_pages)
                <li class="page-item">
                    <a class="page-link" href="{{ url('blog').'/'.$page_number+1}}/{{$service}}" rel="next">
                        <i class="fa fa-chevron-right fa-icon ml-0"></i>
                    </a>
                </li>
            @else
            <li class="page-item disabled d-none">
                <a class="page-link" href="#"><i class="fa fa-chevron-right fa-icon ml-0"></i></a>
            </li>
        @endif

    </ul>
@endif