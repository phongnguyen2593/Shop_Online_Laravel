

    <ul class="categories_mega_menu">
        @foreach ($childs as $child)
        <li class="menu_item_children"><a href="#">{{ $child->name }}</a></li>
        @endforeach
    </ul>
