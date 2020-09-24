<div class="" style="width:200px;height:100vh;background-color:orange;">
  @foreach ($paganti as $pagante)
    @php
      echo $pagante["name"] . $pagante["lastname"] . "<br>";
    @endphp
  @endforeach
</div>
