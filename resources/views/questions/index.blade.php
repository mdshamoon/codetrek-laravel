@extends('layouts.app')

@section('content')


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 <div class="container mt-5" >
    <div class="d-flex justify-content-between flex-column flex-md-row mb-3">
          <h3 class=""> Questions</h3> 
          <form class="form-inline my-2 my-lg-0 float-right" action="index.php" method="POST">
          <input class="form-control " type="text" placeholder="Search " aria-label="Search" style="width: 50%" name="search">
          <button class="btn btn-primary mr-2"><i class="fas fa-search "></i></button>
       
          <a class="btn btn-outline-primary my-2 my-sm-0" href="new-question">Ask Questions</a>
         
        </form>
        
        </div>
     

@foreach ( $questions as $question)

        <div class="card mb-4 shadow-sm">
          <div class="card-body">
        
           <h4>
            <a href="#" class="text-dark">
           {{$question->Title}}</a></h4>
             <span style="color: #666"> {{$question->Description}}</span>

              <br>

              @php
                $tags=explode(',', $question->Tags);

              @endphp

                @foreach( $tags as $tag )

                  <span class='badge badge-primary mr-2'>{{ $tag }}</span>

                @endforeach

             


           
         
           <div class="mt-3"><a href="#" class="card-link">Mohd Shamoon</a> asked on </div>
            <div class="mt-3"><i class="far fa-thumbs-up mr-1"> </i><i class="far fa-thumbs-down mr-2"></i>18 <i class="far fa-comments pl-1"> 18 Answers</i></div>
             </div>
        
         </div>


@endforeach
      

    

         
       
         
           

       


       


<footer class="text-center py-3 mt-5" style="color:blue;background-color: #eee"><i class="fas fa-code"></i>Developed at Codetrek, New Tehri</footer>



@endsection