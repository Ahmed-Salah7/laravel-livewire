<div class="mt-5">
    <div class="form-group mb-5">
        <label for="exampleInputEmail1">TODO</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="TODO ..."
               wire:model="content" wire:keydown.enter="add_todo()">
        @if($errors->has('content'))
            <small id="emailHelp" class="form-text text-danger"> {{$errors->first('content')}}</small>

        @else
            <small id="emailHelp" class="form-text text-muted">Write your todo then click enter.</small>
        @endif
    </div>

    @foreach($todos as $todo)
        @livewire('todo-row' , ['todo'=>$todo],key($todo->id))
    @endforeach
</div>
