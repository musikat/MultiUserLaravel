<!DOCTYPE HTML>

<html>
	<head>
		<title>Moviefy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>
	</head>
<style>
.card {
    position: relative;
    width: 550px;
    height: 100%;
    box-shadow: rgb(42, 38, 79) 0px 0px 10px;
    overflow: hidden;
    
    background: rgb(42, 38, 79);
    border-width: 3px;
    border-style: solid;
    border-color: rgb(26, 22, 63);
    border-image: initial;
    border-radius: 5px;
}
.card h3 {
    font-size: 2em;
    justify-content: center;
    text-align: center;
    color: white;
    
}
.card a {
    position: relative;
    display: block;
    transition-duration: .3s;
    margin-left: 100px ;
}
.card-items {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    
    box-shadow: rgb(42, 38, 79) 0px 0px 10px;
    
    
    background: rgb(42, 38, 79);
    
    border-style: solid;
    border-color: rgb(26, 22, 63);
    border-image: initial;
    border-radius: 3px;
    
}
#saveBtn {
    box-shadow: none;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-transform: uppercase;
}
#saveBtn:hover {
    background: whitesmoke;
    color: rgb(26, 22, 63);
    border-color: inherit;
}
.btn {
    justify-content: space-between;
    text-align: center;
    
}
#date {
    background-color: rgba(212, 212, 255, 0.035);
    border: none;
    
}
#genre {
    background-color: rgba(212, 212, 255, 0.035);
    border: none;
}
.imgPreview{
    display: inline-block;
}
#preview {
    margin: 10px;
    display: inline-flex;
}

</style>
<body class="is-preload">

		@section('content') 

		<!-- Wrapper -->
        <div id="wrapper">

<!-- Header -->
    <header id="header" class="alt">
        <a href="{{url('/client')}}" class="logo"><strong>Moviefy</strong> <span>by Laravel</span></a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

<!-- Menu -->
    <nav id="menu">
        <ul class="links">
        <li><a href="/admin/">Home</a></li>
        <li><a href="/admin/">Dashboard</a></li>
        </ul>
        <ul class="actions stacked">
            
        </ul>
    </nav>
</div>

<!-- Main -->

<div class="container">
   <div >
       <div >
           <div class="card">
               <h3>ADDING FILM FORM</h3>

               <div class="card-items" >
                  <form method="POST" action="{{ route('films.store') }}" enctype="multipart/form-data">
                      @csrf

                      <div >
                          <label >Title</label>

                          <div >
                              <input id="title" type="text" class="form-control @error('title') is-invalid @enderror " name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                             
                              @error('title')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                    <div >
                        <label >Date</label>

                        <div >
                            <input id="date" type="number" min="1900" max="2023" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                      <div >
                          <label for="director" class="col-md-4 col-form-label text-md-right">Director</label>

                          <div >
                              <input id="director" type="text" class="form-control @error('director') is-invalid @enderror" name="director" value="{{ old('director') }}" required autocomplete="director" autofocus>

                              @error('director')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                      <div >
                          <label for="genre" class="col-md-4 col-form-label text-md-right">Genre</label>

                          <div >
                              <input id="genre" type="number" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>

                              @error('genre')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                      <div >
                          <label for="cast" class="col-md-4 col-form-label text-md-right">Cast</label>

                          <div >
                              <input id="cast" type="text" class="form-control @error('cast') is-invalid @enderror" name="cast" value="{{ old('cast') }}" required autocomplete="cast" autofocus>

                              @error('cast')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                      <div >
                          <label for="plot" class="col-md-4 col-form-label text-md-right">Plot</label>

                          <div >
                              <input id="plot" type="text" class="form-control @error('plot') is-invalid @enderror" name="plot" value="{{ old('plot') }}" required autocomplete="plot" autofocus>

                              @error('plot')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                      <div class="imgPreview" >
                        <label for="img" class="col-md-4 col-form-label text-md-right">Image</label>
                        

                        <div >
                            
                        <input id="img" type="file" class="form-control @error('img') is-invalid @enderror" name="img" value="{{ old('img') }}" required autocomplete="img" autofocus>
                        <img id="preview" src="#" alt="Image preview" style="display: none; width: 200px; height: 250px;">    
                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                      

                      <div >
                          <div class="btn">
                              <button type="submit" class="button" id="saveBtn">
                              {{ __('Save') }}
                              </button>
                          </div>
                      </div>
                      
                  </form>

                  

                  <script>
                    document.getElementById('img').addEventListener('change', function(e) {
                    var img = document.getElementById('preview');
                    img.src = URL.createObjectURL(e.target.files[0]);
                    img.style.display = 'block';
                    });
                    </script>




               </div><a href="/admin/" class="button">Go Back</a><br>
           </div>
       </div>
   </div>
</div>

</div>

		<!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
            <script src="{{ asset('assets/js/search.js') }}"></script>

	</body>
</html>