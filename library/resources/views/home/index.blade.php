@extends('layouts.home')

@section('title') Strona główna @endsection

@section('content')

    @include('include.navbar')

    <div class="text-center my-4">
        <h1>Witamy w naszej bibliotece</h1>

    </div>

    <div class="row" >
        <div class="col-lg-6">
            <img src="https://wbpg.org.pl/wp-content/uploads/2022/09/01-6.jpg" alt="biblioteka" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget dapibus urna. Donec viverra tristique purus ac dictum. Donec vel nunc varius nisi pulvinar congue. Vivamus enim ipsum, convallis non mi nec, vestibulum mattis ligula. Cras ac euismod magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque eu ex eros. Sed laoreet accumsan nibh.
                Cras a lectus quam. Ut est justo, condimentum in turpis sed, tincidunt elementum nisl. Ut nunc lectus, fermentum vitae odio id, euismod consectetur orci. Cras elit magna, rhoncus sit amet molestie sit amet, hendrerit ac lacus. Pellentesque malesuada est ipsum, nec congue enim sagittis ut. Cras lacus massa, accumsan et malesuada sit amet, dictum et tortor. Vivamus in pellentesque nulla, non euismod ipsum.
            </p>
        </div>
    </div>


@endsection
