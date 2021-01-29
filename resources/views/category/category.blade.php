<h2>HELLO</h2>
@foreach($cate as $ca)
    <div>{{$ca->category->title()}}</div>
@endforeach
