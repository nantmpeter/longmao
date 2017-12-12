
<div class="am-u-lg-12 am-cf">
    <div class="am-fr">
        <ul class="am-pagination tpl-pagination">
            <li class="am-disabled"><a href="?page=1">«</a></li>
            @if($page_count > 5)
                <li @if($page == 1) class="am-active" @endif><a href="?page=1">1</a></li>
                <li @if($page == 2) class="am-active" @endif><a href="?page=2">2</a></li>
                <li @if($page == 3) class="am-active" @endif><a href="?page=3">3</a></li>
                <li @if($page == 4) class="am-active" @endif><a href="?page=4">4</a></li>
                <li @if($page == 5) class="am-active" @endif><a href="?page=5">5</a></li>
            @else
                @for($i = 1; $i <= $page_count; $i++)
                    <li @if($page == $i) class="am-active" @endif><a href="?page={{$i}}">{{$i}}</a></li>
                @endfor
            @endif
            <li><a href="?page={{$page_count}}">»</a></li>
        </ul>
    </div>
</div>