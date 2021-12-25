<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

<ul class="list-reset flex flex-col">
    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
        <a href="{{route('admin.index')}}"
           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fas fa-tachometer-alt float-left mx-2"></i>
            Anasayfa
            <span><i class="fas fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
        <a href="{{route('admin.urunler.index')}}"
           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fas fa-tachometer-alt float-left mx-2"></i>
            Ürünler
            <span><i class="fas fa-angle-right float-right"></i></span>
        </a>
    </li>
</ul>

</aside>