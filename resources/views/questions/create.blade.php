@extends('layouts.app')

@section('content')



 <div class="container mt-5" >
          <h3>Ask question</h3> 


             <div class="card shadow-sm">
          
         <div class="card-body p-4" >
          
<form action="/" method="POST">

	{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Title<sup class="text-danger">*</sup></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Enter a short and proper title for your description" required>
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Description<sup class="text-danger">*</sup></label>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Enter a detailed description of what problem you're facing and steps to replicate" required name="description"></textarea>
  </div>

  <div class="form-group">
            <label for="tags">Add tags</label>
            <input type="text" class="form-control" placeholder="tag1, tag2, tag3" name="tag">
            <small class="text-secondary">Tags will help others to find your question faster. Add comma separated tags. For ex: <span class="font-weight-light font-italic">codetrek, bootstrap, frontend</span></small>
          </div>
          <button type="submit"  class="btn btn-primary mt-3">Post your question</button>

  </div>


  
  
 
  
</form>


        </div>
         </div>

         <footer class="bg-light py-3 text-center mt-5">
    <span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
  </footer>





@endsection