@foreach($todos as $todo)
  <li id="{{$announ->id}}">
    <a href="#" onClick="task_done('{{announ->id}}');" class="toggle">
    </a>
    <span id="span_{{announ>id}}">{{$announ->title}}</span>
     <a href="#" onClick="delete_task('{{announ->id}}');" class="icondelete">Delete</a>
     <a href="#" onClick="edit_task('{{announ>id}}','{{announ->title}}');" class="icon-edit">Edit</a>
   </li>
@endforeach
