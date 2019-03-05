@extends('layouts.master')
@section('content')
  <div class="card-body">
       <div class="callout callout-success">
         <h5>The id is </h5>

         <p id="div1">{{$num}}</p>
             <button style="width:15%"  class="btn btn-success btn-block btn-flat"  onclick="CopyToClipboard('div1')">
             copy to clipboard
            </button>
          </div>
        </div>
      
     </div>

     
     <script>
        function CopyToClipboard(containerid) {
          if (document.selection) { 
              var range = document.body.createTextRange();
              range.moveToElementText(document.getElementById(containerid));
              range.select().createTextRange();
              document.execCommand("copy"); 
          
          } else if (window.getSelection) {
              var range = document.createRange();
               range.selectNode(document.getElementById(containerid));
               window.getSelection().addRange(range);
               document.execCommand("copy");
               alert("id copied") 
          }}
     </script>

 


     

 @endsection