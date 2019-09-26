<ul>
@foreach($childs as $child)
    <li>
        {{ $child->name }}
        @if(count($child->childs))
            @include('admin.admin.role_wise_permission.manageChild',['childs' => $child->childs])
        @endif
    </li>
@endforeach
</ul>
                          