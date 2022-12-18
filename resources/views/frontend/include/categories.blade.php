{{-- @php
$categories = App\Models\Category::orderBy('category_name_en', 'asc')->get();	
@endphp  --}}
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
			@foreach ($categories as $category)
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="{{ $category->category_icon }}" aria-hidden="true"></i> {{ (session()->get('language') == 'english') ? $category->category_name_en : $category->category_name_bn }}</a>
				@if ($category->subCategories->isNotEmpty())
				<ul class="dropdown-menu mega-menu">
					<li class="yamm-content">
						<div class="row">
                            {{-- @dd(__DIR__) --}}
							{{-- @php
								$subcategories = App\Models\Subcategory::where('category_id', $category->id)->orderBy('subcategory_name_en', 'asc')->get();	
							@endphp --}}
							@foreach ($category->subCategories()->get() as $subcategory)
								<div class="col-sm-12 col-md-3">
									<a href="{{ url('subcategory/product', $subcategory->id.'/'.$subcategory->subcategory_slug_en) }}"><h2 class="title">{{ (session('language') == 'english') ? $subcategory->subcategory_name_en : $subcategory->subcategory_name_bn }}</h2></a>
									<ul class="links list-unstyled">
										@foreach ($subcategory->subSubCategories()->get() as $subsubcategory)
										<li><a href="{{ url('subsubcategory/product', $subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en) }}">{{ (session('language') == 'english') ? $subsubcategory->subsubcategory_name_en : $subsubcategory->subsubcategory_name_bn }}</a></li>
										@endforeach
									</ul>
								</div><!-- /.col -->
							@endforeach
						</div><!-- /.row -->
					</li><!-- /.yamm-content -->
				</ul>
				@endif
				<!-- /.dropdown-menu -->            
			</li><!-- /.menu-item -->
			@endforeach
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->