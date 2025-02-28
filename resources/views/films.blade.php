<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>

    <title>FILMS</title>
</head>
<style>
    table {
        max-width: 100%;
    }
    .filmadd {
        justify-content: space-between;
        text-align: center;
        display: flex;
        width: 110%;
       

        
        
    }
    .filmadd h1 {
        justify-content: space-between;
        text-align: center;
        display: flex;
        float: left;
        
        
    }
    .filmadd a {
        justify-content: space-between;
        text-align: center;
        display: flex;
        float: right;
        
        
    }
    .filmadd a:hover {
        
       
        text-align: center;
        border-color: rgb(42, 38, 79);
        background-color: rgb(153, 147, 208);
        
        height: 35px;
        width: auto;
        padding: auto;
    }


</style>
<body>
        @if(session('store_films'))
        <span>{{session('store_films')}}</span>
        @endif
        @if(session('update_films'))
        <span>{{session('update_films')}}</span>
        @endif
        <div class="filmadd">
            <h1>FILMS</h1>
        
        <a href="{{ route('films.add') }}">ADD FILM</a>
    </div>
        
        

        <table class="table table-bordered table-striped table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Director</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Cast</th>
                    <th scope="col">Plot</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($films as $film)
<tr>
   <td>
   @if($film->img)
   <img src="{{ asset('storage/images/' . $film->img) }}" style=" width: 100px; height: 100px;">

{{-- <h1>{{$film->img}}</h1> --}}
@else 
 <span>No image found!</span>
@endif

   </td>
                <td>{{$film->title}}</td>
                <td>{{$film->date}}</td>
                <td>{{$film->director}}</td>
                <td>{{$film->genre}}</td>
                <td>{{$film->cast}}</td>
                <td>{{$film->plot}}</td>
                <td>{{$film->rating}}</td>
                <td>
                    <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a href="/admin/">BACK</a><br>
        
</body>
</html>