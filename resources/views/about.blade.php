@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }} </h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle" width="200">
@endsection

{{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum ketiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla consequatur, sint molestiae impedit laborum quaerat tempora iusto amet provident quibusdam deserunt numquam autem porro deleniti odit voluptatem labore sapiente earum qui laboriosam. Sapiente expedita corrupti vero dolor vel neque maiores commodi architecto,</p><p>quibusdam corporis labore error repellendus quaerat quidem in consectetur distinctio voluptas repudiandae! Ratione nihil ipsum, similique sequi maiores placeat, consectetur doloribus delectus voluptas modi eius obcaecati sit pariatur officiis? Nisi, consequuntur! Quibusdam quae, laboriosam blanditiis quos corrupti aspernatur sunt fugit nihil, </p><p> eum non quia, unde suscipit cum. Veritatis esse similique error illo exercitationem voluptatibus labore quaerat unde, recusandae eligendi doloribus quas, nemo suscipit? Aliquid, est, modi alias ut eligendi soluta repellendus numquam vel laboriosam laudantium asperiores, doloribus velit rem nulla voluptate non voluptates et natus quis at labore! Voluptate officiis perspiciatis vel dignissimos pariatur fugiat optio quibusdam explicabo sit? Inventore voluptas laboriosam tempore illum quos deserunt quibusdam magnam.</p>'
])

Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolorum voluptate dolorem rem libero natus suscipit eum expedita earum fuga. Quas animi quos doloremque officia vero! Libero perferendis nemo maiores, minima officiis numquam hic, molestiae magni laborum blanditiis asperiores. Temporibus pariatur nam repellat quae veritatis autem nulla consequatur et architecto enim deserunt, incidunt officiis omnis modi. Quam voluptatibus doloremque earum mollitia illum non delectus, optio nulla magni pariatur accusamus, inventore, deleniti suscipit dignissimos veritatis omnis expedita? Odio eos aspernatur deleniti labore dolorem ut distinctio fugiat laboriosam impedit similique itaque, vel ratione necessitatibus ex delectus dolores odit sed accusantium deserunt officia? --}}

{{-- Category::create([
    'name' => 'Personal',
    'slug' => 'personal'
]) --}}



