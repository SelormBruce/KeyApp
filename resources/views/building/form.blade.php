<div class="form-group">

    <div>
        <label for="name" class="text-light">Building  Name</label>
        <input type="text" class="form-control" name="name" value="{{old('role') ?? $building->name}}">
        <div class="text-light">
            {{$errors->first('name')}}
        </div>
    </div>
    <div>
       <label for="description" class="text-light">Descriptioin</label>
        <textarea name="description"  class="form-control" cols="30" rows="5">
               {{$building->description}}
        </textarea>
    </div>
</div>
