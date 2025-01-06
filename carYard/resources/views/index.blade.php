,<h1> Hello muraya view facades </h1>






<script>
   const hobbies = {{ Js::from($hobbies)}}
   console.log(hobbies)

    </script>

{{-- @verbatim
{{ variable }}

@endverbatim

@if ($name == 'John Doe')
    <h1> Hello muraya </h1>
    
@endif --}}