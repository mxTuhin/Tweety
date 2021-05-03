<!-- widget single item start -->


<li class="unorder-list">

    <div class="unorder-list-info">
        <div>
            <div style="float:left">
                <h3 class="list-title">{{$list->text}}</h3>
                <p class="list-subtitle">{{ date('h:i:s a m/d/Y', strtotime($list->created_at))}}</p>
            </div>
            <div style="margin-left: 200px;">
                <a href="{{route('close_todo_list', $list->id)}}"><b>x</b></a>
            </div>
        </div>


    </div>

</li>
