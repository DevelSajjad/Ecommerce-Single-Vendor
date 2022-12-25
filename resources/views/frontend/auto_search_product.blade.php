<ul>
    @foreach ($products as $product )
        <a href="">
            <li><img src="{{ asset($product->product_thumbnail) }}" width="50px" height="50px" alt=""></li>
            <li><strong>{{ $product->product_name_en }}</strong></li>
        </a>
    @endforeach
</ul>
