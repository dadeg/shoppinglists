@extends('layout')

@section('content')
    <div class="page-header">
        <h1>View Shopping List</h1>
    </div>

    
<h2>
   {{ $shoppinglist->name }}
</h2>
<h3>
Monday Meals
</h3><p>
{{ $shoppinglist->monday }}
</p><h3>
Tuesday Meals</h3><p>
{{ $shoppinglist->tuesday }}
</p><h3>
Wednesday Meals</h3><p>
{{ $shoppinglist->wednesday }}
</p><h3>
Thursday Meals</h3><p>
{{ $shoppinglist->thursday }}
</p><h3>
Friday Meals</h3><p>
{{ $shoppinglist->friday }}
</p><h3>
Saturday Meals</h3><p>
{{ $shoppinglist->saturday }}
</p><h3>
Sunday Meals</h3><p>
{{ $shoppinglist->sunday }}
</p><h3>
Fruits</h3><p>
{{ $shoppinglist->fruit }}
</p><h3>
Vegetables</h3><p>
{{ $shoppinglist->vegetable }}
</p><h3>
Dairy</h3><p>
{{ $shoppinglist->dairy }}
</p><h3>
Meat Substitutes</h3><p>
{{ $shoppinglist->meatsub }}
</p><h3>
Meats</h3><p>
{{ $shoppinglist->meat }}
</p><h3>
Grains</h3><p>
{{ $shoppinglist->grain }}
</p><h3>
Dry Goods</h3><p>
{{ $shoppinglist->drygoods }}
</p><h3>
Other</h3><p>
{{ $shoppinglist->other }}
</p>

@stop
