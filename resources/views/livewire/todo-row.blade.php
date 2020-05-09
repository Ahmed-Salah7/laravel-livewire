<div>
    <div class="custom-control custom-checkbox mt-4">
        <input type="checkbox" class="custom-control-input" id="{{$todo->id}}"
               {{$todo->done ?'checked':''}} wire:change="completed({{$todo->id}})">
        <label class="custom-control-label {{   $todo->done ?   'done':''}}" style="float: left"
               for="{{$todo->id}}">{{$todo->content}}</label>
        <button class="btn btn-danger" style="float: right" wire:click="remove_todo({{$todo->id}})"
                onclick="confirm('Are you sure ?') || event.stopImmediatePropagation()">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>
